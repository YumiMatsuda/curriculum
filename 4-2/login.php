<?php
require_once('db_connect.php');
// セッション開始
session_start();

// $_POSTが空ではない場合
// つまり、ログインボタンが押された場合のみ、下記の処理を実行する
if (!empty($_POST)) {
    // ログイン名が入力されていない場合の処理
    if (empty($_POST["name"])) {
        echo "ユーザー名が未入力です。";
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }

    // 両方共入力されている場合
    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        //ログイン名とパスワードのエスケープ処理
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        // ログイン処理開始
        $pdo = db_connect();
        try {
            //データベースアクセスの処理文章。ログイン名があるか判定
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            // 入力された値と引っ張ってきた値が同じか判定しています。
            if (password_verify($pass, $row['password'])) {
                // セッションに値を保存
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違ってた時の処理
                echo "パスワードに誤りがあります。";
            }
        } else {
            //ログイン名がなかった時の処理
            echo "ユーザー名かパスワードに誤りがあります。";
        }
    }
}
?>
<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ログイン画面</title>
        <!--style.css ファイルを読み込みする-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <h1>ログイン画面</h1>
            <a href="SignUp.php" class="button_1">新規ユーザー登録</a><br>
                <form method="post" action="">
                <div class="text_box">
                    <input type="text" name="name" size="15" placeholder="ユーザー名"><br><br>
                    <input type="text" name="pass" size="15" placeholder="パスワード"><br><br>
                </div>
                    <input type="submit" value="ログイン" class="button_2">
                </form>
        </div>
    </body>
</html>