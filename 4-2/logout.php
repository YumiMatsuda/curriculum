<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <!--style.css ファイルを読み込みする-->
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <div class="wrapper">
        <h1>ログアウト画面</h1><br>
        <div>ログアウトしました</div><br>
        <a href="login.php">ログイン画面に戻る</a><br>
    </div>
    </body>
</html>