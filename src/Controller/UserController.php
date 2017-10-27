<?php

namespace App\Controller\Cms;

use App\Controller\CmsController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Core\Configure;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\Event;
use Cake\Network\Email\Email;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Validation\Validator;

class UserController extends CmsController
{
    /**
     * before filter function
     * @param Event $event Event object
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->viewBuilder()->layout('default');
    }

    /**
     * Index page /cms/login
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function login()
    {
        //$obj = new DefaultPasswordHasher;
        //echo $obj->hash('12345678');
        $this->Auth->logout();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if ($user['avail_flg'] == '1') {
                    $this->Auth->setUser($user);

                    return $this->redirect(['controller' => 'Top', 'action' => 'index']);
                }
            }
            $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_001'));
        }
    }

    /**
     * Index page /cms/password/reset-auth
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function resetAuth()
    {
        $this->Auth->logout();
        $loginUsersTable = TableRegistry::get('LoginUsers');
        if ($this->request->is('ajax')) {
            $data = $this->request->data();
            $users = $loginUsersTable->find()
                ->select(['LoginUsers.id'])
                ->where(['LoginUsers.mail_address' => $data['mail_address'], 'LoginUsers.avail_flg' => '1'])->toArray();
            echo count($users);
            exit;
        }
        if ($this->request->is('post')) {
            $data = $this->request->data();

            $validator = new Validator();
            $validator->notEmpty('mail_address', Configure::read('MESSAGE_NOTIFICATION.MSG_005'))
                ->add('mail_address', [
                    'minLength' => [
                        'rule' => ['minLength', 8],
                        'last' => true,
                        'message' => str_replace(['{0}', '{1}'], ['8', '128'], Configure::read('MESSAGE_NOTIFICATION.MSG_009'))
                    ],
                    'maxLength' => [
                        'rule' => ['maxLength', 128],
                        'last' => true,
                        'message' => str_replace(['{0}', '{1}'], ['8', '128'], Configure::read('MESSAGE_NOTIFICATION.MSG_009'))
                    ],
                    'email' => [
                        'rule' => 'email',
                        'message' => Configure::read('MESSAGE_NOTIFICATION.MSG_006'),
                    ]
                ]);

            $errors = $validator->errors($data, false);

            if (empty($errors)) {
                $user = $loginUsersTable->find()
                    ->select(['LoginUsers.id', 'LoginUsers.user_name', 'LoginUsers.mail_address'])
                    ->where(['LoginUsers.mail_address' => $data['mail_address'], 'LoginUsers.avail_flg' => '1'])->first();
                if (!empty($user)) {
                    $loop = 1;

                    $hash = '';
                    do {
                        $hash = $this->getHash(time() . rand(100, 1000));
                        $user_hash = $loginUsersTable->find()
                            ->select(['LoginUsers.id'])
                            ->where(['LoginUsers.pass_hash' => $hash, 'LoginUsers.avail_flg' => '1'])->toArray();
                        if (!count($user_hash)) {
                            $loop = 0;
                        }
                    } while ($loop);

                    try {
                        $entity = $loginUsersTable->get($user->id);
                        $entity->pass_hash = $hash;
                        $entity->passreset_expire = date('Y-m-d H:i:s', strtotime("+1 day"));
                        $entity->modified = date('Y-m-d H:i:s');
                        $entity->modified_user_id = $user->id;
                        $entity->comment = Configure::read('MESSAGE_COM.COM_004');
                        if ($loginUsersTable->save($entity)) {
                            $mailinfos['user_name'] = $user->user_name;
                            $mailinfos['url'] = Router::fullBaseUrl() . Router::url(["controller" => "User", "action" => "resetHash", "?" => ["key" => $hash]]);
                            $mailinfos['email'] = $user->mail_address;

                            if ($mailinfos['email']) {
                                $this->sendEmail(
                                    Configure::read('from_address'),
                                    $mailinfos['email'],
                                    '[AOU管理システム]パスワード再発行',
                                    $mailinfos,
                                    'email_reset_auth',
                                    null,
                                    null
                                );
                            }

                            return $this->redirect(['action' => 'resetSend']);
                        } else {
                            $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_012'));
                        }
                    } catch (RecordNotFoundException $e) {
                        $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_012'));
                    }
                } else {
                    $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_012'));
                }
            } else {
                $error_mail_address = $errors['mail_address'];
                foreach ($errors['mail_address'] as $key => $value) {
                    $error_mail_address = $value;
                    break;
                }
                $this->Flash->error($error_mail_address);
            }
        }
        $this->render('reset_auth');
    }

    /**
     * Index page /cms/password/reset-send
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function resetSend()
    {
        $this->Auth->logout();
        $this->render('reset_send');
    }

    /**
     * Index page /cms/password/reset
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function resetHash()
    {
        $this->Auth->logout();
        $loginUsersTable = TableRegistry::get('LoginUsers');
        $hash_key = $this->request->getQuery('key');
        $show_edit = 0;

        if ($this->request->is('ajax')) {
            $data = $this->request->data();
            $user = $loginUsersTable->find()
                ->select(['LoginUsers.id', 'LoginUsers.password'])
                ->where(['LoginUsers.id' => $data['id'], 'LoginUsers.avail_flg' => '1'])->first();
            if (!empty($user)) {
                $obj = new DefaultPasswordHasher;
                if ($obj->check($data['password'], $user->password)) {
                    echo 1;
                } else {
                    echo 0;
                }
            }
            exit;
        }
        $user = null;
        if ($hash_key) {
            $user = $loginUsersTable->find()
                ->select(['LoginUsers.id', 'LoginUsers.user_name', 'LoginUsers.mail_address', 'LoginUsers.passreset_expire'])
                ->where(['LoginUsers.pass_hash' => $hash_key, 'LoginUsers.avail_flg' => '1'])->first();
            if (empty($user)) {
                $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_028'));
            } else {
                if (strtotime($user->passreset_expire) > time()) {
                    $show_edit = 1;
                } else {
                    $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_029'));
                }
            }
        }
        if ($this->request->is('post') && $show_edit == 1) {
            $data = $this->request->data();

            $updateTransaction = $loginUsersTable->getConnection()->transactional(function () use ($data, $loginUsersTable) {
                try {
                    $obj = new DefaultPasswordHasher;

                    $entity = $loginUsersTable->get($data['aid']);
                    $entity->password = $obj->hash($data['password']);
                    $entity->modified = date('Y-m-d H:i:s');
                    $entity->modified_user_id = $data['aid'];
                    $entity->comment = Configure::read('MESSAGE_COM.COM_005');

                    $entity->pass_hash = '';
                    $entity->passreset_expire = '0000-00-00 00:00:00';

                    if (!$loginUsersTable->save($entity, ['atomic' => false])) {
                        return false;
                    }
                } catch (RecordNotFoundException $e) {
                    return false;
                }

                return true;
            });

            if ($updateTransaction == true) {
                $mailinfos['user_name'] = $user->user_name;
                $mailinfos['url'] = Router::fullBaseUrl() . Router::url(["controller" => "User", "action" => "login"]);
                $mailinfos['email'] = $user->mail_address;

                if ($mailinfos['email']) {
                    $this->sendEmail(
                        Configure::read('from_address'),
                        $mailinfos['email'],
                        '[AOU管理システム]パスワード再設定完了',
                        $mailinfos,
                        'email_reset_pass',
                        null,
                        null
                    );
                }

                return $this->redirect(['action' => 'resetEnd']);
            } else {
                $this->Flash->error(Configure::read('MESSAGE_NOTIFICATION.MSG_020'));
            }
        }
        $this->set(['show_edit' => $show_edit, 'hash_key' => $hash_key, 'user' => $user]);
        $this->render('reset_hash');
    }

    /**
     * Index page /cms/password/reset-end
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function resetEnd()
    {
        $this->Auth->logout();
        $this->render('reset_end');
    }

    /**
     * Index page /cms/logout
     * @return \Cake\Network\Response|void : boolean
     * @author: ThuanLe
     */
    public function logout()
    {
        //$this->request->session()->delete('Auth');
        $this->Auth->logout();
        $this->request->session()->destroy();
        $this->redirect(['controller' => 'User', 'action' => 'login']);
    }

    /**
     * Description: get the hash value for a password
     * Function: getHash
     * @param string $word not null
     * @return \Cake\Network\Response|void : null
     * @author: ThuanLe
     */
    protected function getHash($word)
    {
        $hasher = new DefaultPasswordHasher;
        $hash = $hasher->hash($word);

        return $hash;
    }
}
