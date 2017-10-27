<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Core\Configure;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\Event;
use Cake\Network\Email\Email;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Validation\Validator;

class UserController extends AppController
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

                    return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
                }
            }
        }
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
