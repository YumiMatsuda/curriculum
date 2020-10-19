<?php
// db_connect.phpの読み込み
include_once("db_connect.php");

// エラーメッセージ、登録完了メッセージの初期化
$errorMessage = "";
$signUpMessage = "";

// ログインボタンが押された場合
if (isset($_POST["signUp"])) {
    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
        // 入力したユーザIDとパスワードを格納
        $name = $_POST["name"];
        $password = $_POST["password"];

        // 2. ユーザIDとパスワードが入力されていたら認証する
        // %s：文字列、sprintf：変数から文字列を作り出す。
        $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', PDO_DSN, DB_DATABASE);

        $pdo = db_connect();

        // 3. エラー処理
        try {
            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");

            $stmt->execute(array($name, password_hash($password, PASSWORD_DEFAULT))); 
            
            // パスワードのハッシュ化を行う（今回は文字列のみなのでbindValue(変数の内容が変わらない)を使用せず、直接excuteに渡しても問題ない）
            $userid = $pdo->lastinsertid();  // 登録した(DB側でauto_incrementした)IDを$useridに入れる

            $signUpMessage = '登録が完了しました。';  // ログイン時に使用するIDとパスワード
            } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            echo $e->getMessage();
            }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ユーザー登録画面</title>
        <!--style.css ファイルを読み込みする-->
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    <div class="wrapper">
        <h1>ユーザー登録画面</h1>
        <form method="POST" action="">
            <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
            <div><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></div>
            <div class="text_box">
                <input type="text" name="name" id="name" placeholder="ユーザー名"><br><br>
                <input type="password" name="password" id="password" placeholder="パスワード"><br><br>
            </div>
            <input type="submit" value="新規登録" id="signUp" name="signUp" class="button_2">
        </form>
    </div>
</body>
</html>