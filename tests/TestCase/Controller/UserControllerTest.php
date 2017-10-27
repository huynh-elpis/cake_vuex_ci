<?php

namespace App\Test\TestCase\Controller;

use App\Controller\UserController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Cms\UserController Test Case
 */
class UserControllerTest extends IntegrationTestCase
{
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.authorities', 'app.login_users'];


    public function testLogin()
    {
        $this->enableCsrfToken();
        $data = ['login_name' => 'test', 'password' => '12345678'];
        $this->post(['controller' => 'User', 'action' => 'login'], $data);
        $this->assertRedirect(['controller' => 'Pages', 'action' => 'index']);
    }
}
