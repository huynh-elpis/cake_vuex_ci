<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthoritiesFixture
 *
 */
class AuthoritiesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'function_name' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'function_key' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sort_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'secretariats' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'corporations' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'stores' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'avail_flg' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => '1', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comment' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
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
            'function_name' => 'コンテンツダウンロード',
            'function_key' => 'TOP_CONTENTS',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 2,
            'function_name' => '法人検索・一覧',
            'function_key' => 'CORPORATIONS_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 3,
            'function_name' => '法人情報ダウンロード',
            'function_key' => 'CORPORATIONS_DOWNLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 4,
            'function_name' => '法人情報アップロード',
            'function_key' => 'CORPORATIONS_UPLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 5,
            'function_name' => '法人情報登録',
            'function_key' => 'CORPORATIONS_REGISTER',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 6,
            'function_name' => '法人情報変更',
            'function_key' => 'CORPORATIONS_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 7,
            'function_name' => '法人情報削除',
            'function_key' => 'CORPORATIONS_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 8,
            'function_name' => '店舗検索・一覧',
            'function_key' => 'STORES_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 9,
            'function_name' => '店舗情報ダウンロード',
            'function_key' => 'STORES_DOWNLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 10,
            'function_name' => '店舗情報アップロード',
            'function_key' => 'STORES_UPLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 11,
            'function_name' => '店舗情報登録',
            'function_key' => 'STORES_REGISTER',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 12,
            'function_name' => '店舗情報変更',
            'function_key' => 'STORES_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 13,
            'function_name' => '店舗情報削除',
            'function_key' => 'STORES_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 14,
            'function_name' => '指定機械設置状況検索・一覧',
            'function_key' => 'MACHINE_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 15,
            'function_name' => '指定機械設置状況ダウンロード',
            'function_key' => 'MACHINE_DOWNLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 16,
            'function_name' => '指定機械設置状況アップロード',
            'function_key' => 'MACHINE_UPLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 17,
            'function_name' => '指定機械設置状況登録・変更',
            'function_key' => 'MACHINE_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 18,
            'function_name' => '指定機械設置状況削除',
            'function_key' => 'MACHINE_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 19,
            'function_name' => '支払データ表示',
            'function_key' => 'PAYMENT_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 20,
            'function_name' => '支払データダウンロード',
            'function_key' => 'PAYMENT_DOWNLOAD',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 21,
            'function_name' => '事務局管理者検索・一覧',
            'function_key' => 'SECRETARIATS_USER_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 22,
            'function_name' => '事務局管理者新規登録・変更',
            'function_key' => 'SECRETARIATS_USER_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 23,
            'function_name' => '事務局管理者削除',
            'function_key' => 'SECRETARIATS_USER_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 24,
            'function_name' => '法人管理者検索・一覧',
            'function_key' => 'CORPORATIONS_USER_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 25,
            'function_name' => '法人管理者新規登録・変更',
            'function_key' => 'CORPORATIONS_USER_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 26,
            'function_name' => '法人管理者削除',
            'function_key' => 'CORPORATIONS_USER_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 27,
            'function_name' => '店舗管理者検索・一覧',
            'function_key' => 'STORES_USER_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 28,
            'function_name' => '店舗管理者新規登録・変更',
            'function_key' => 'STORES_USER_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 29,
            'function_name' => '店舗管理者削除',
            'function_key' => 'STORES_USER_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '1',
            'stores' => '1',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 30,
            'function_name' => 'イベント情報検索・一覧',
            'function_key' => 'EVENT_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 31,
            'function_name' => 'イベント情報新規登録・変更',
            'function_key' => 'EVENT_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 32,
            'function_name' => 'イベント情報削除',
            'function_key' => 'EVENT_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 33,
            'function_name' => 'イベント店舗検索・一覧',
            'function_key' => 'EVENT_STORE_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 34,
            'function_name' => 'イベント店舗新規登録・変更',
            'function_key' => 'EVENT_STORE_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 35,
            'function_name' => 'イベント店舗削除',
            'function_key' => 'EVENT_STORE_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 36,
            'function_name' => '消費税検索・一覧',
            'function_key' => 'EVENT_AMOUNT_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 37,
            'function_name' => '消費税新規登録・変更',
            'function_key' => 'EVENT_AMOUNT_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 38,
            'function_name' => '消費税削除',
            'function_key' => 'EVENT_AMOUNT_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 39,
            'function_name' => '青少年指導検索・一覧',
            'function_key' => 'YOUTH_INST_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 40,
            'function_name' => '青少年指導新規登録・変更',
            'function_key' => 'YOUTH_INST_EDIT',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 41,
            'function_name' => '青少年指導税削除',
            'function_key' => 'YOUTH_INST_DELETE',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
        [
            'id' => 42,
            'function_name' => '画面権限一覧',
            'function_key' => 'DISP_CONTENTS_LIST',
            'sort_no' => 1,
            'secretariats' => '1',
            'corporations' => '0',
            'stores' => '0',
            'avail_flg' => '1',
            'created' => 1506667006,
            'modified' => 1506667006,
            'created_user_id' => 1,
            'modified_user_id' => 1,
            'comment' => 'Comment'
        ],
    ];
}
