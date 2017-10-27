<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoginUsersFixture
 *
 */
class LoginUsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'mail_address' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_name' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'login_name' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'auth_type' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'secretariats_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'corporations_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'stores_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pass_hash' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'passreset_expire' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'avail_flg' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => '1', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comment' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'login_name' => ['type' => 'index', 'columns' => ['login_name'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'mail_address' => 'abc@abc.com',
            'user_name' => 'test',
            'login_name' => 'test',
            'password' => '$2y$10$/HbJVrbGeMW0P19SrWaSSeXpkLZ.qR4Q..Fmjzz2Ek4zejeu4goiO',
            'auth_type' => 1,
            'secretariats_id' => 1,
            'corporations_id' => 1,
            'stores_id' => 1,
            'pass_hash' => 'Lorem ipsum dolor sit amet',
            'passreset_expire' => 1506925109,
            'avail_flg' => '1',
            'created' => 1506925109,
            'modified' => 1506925109,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Lorem ipsum'
        ],
        [
            'id' => 2,
            'mail_address' => 'abc2@abc.com',
            'user_name' => 'test2',
            'login_name' => 'test2',
            'password' => '$2y$10$/HbJVrbGeMW0P19SrWaSSeXpkLZ.qR4Q..Fmjzz2Ek4zejeu4goiO',
            'auth_type' => 2,
            'secretariats_id' => 0,
            'corporations_id' => 1,
            'stores_id' => 1,
            'pass_hash' => 'Lorem ipsum dolor sit amet',
            'passreset_expire' => 1506925109,
            'avail_flg' => '1',
            'created' => 1506925109,
            'modified' => 1506925109,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Lorem ipsum'
        ],
        [
            'id' => 3,
            'mail_address' => 'abc3@abc.com',
            'user_name' => 'test3',
            'login_name' => 'test3',
            'password' => '$2y$10$/HbJVrbGeMW0P19SrWaSSeXpkLZ.qR4Q..Fmjzz2Ek4zejeu4goiO',
            'auth_type' => 3,
            'secretariats_id' => 0,
            'corporations_id' => 1,
            'stores_id' => 1,
            'pass_hash' => 'Lorem ipsum dolor sit amet',
            'passreset_expire' => 1506925109,
            'avail_flg' => '1',
            'created' => 1506925109,
            'modified' => 1506925109,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Lorem ipsum'
        ],
    ];
}
