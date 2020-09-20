<?php
// DB名
define('DB_DATABASE', 'checktest4');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 *@return object
 */
//connect関数を作成
function connect() {
    try {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        //DBと接続できた場合は「接続OK」と表示
        //echo '接続OK';
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        //接続に失敗した場合はエラー内容を表示
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}