<?php

// FILL_INがなくて
// 追加された部分ではなく「下記の内容に追加しましょう」の文言の方が良さそう。→

// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];

// POST送信されたpost_idを変数に格納しておく 
// $post_id = $_POST['post_id'];

// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策


// クラスの取り込みしていない？
// redirect_main_unless_parameter($id);を取り込みする？
if (empty($id)) {
    header("Location: main.php");
    exit;
}

// 下記のソース入力していない
/*
$row = find_post_by_id($id);
// 関数から取得した値を格納
$id = $row['id'];
$title = $row['title'];
$content = $row['content'];
*/

// PDOのインスタンスを取得
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM posts WHERE id = :id";
    $sql_comments = "SELECT * FROM comments WHERE post_id = :post_id";

    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    $stmt_comments = $pdo->prepare($sql_comments);

    // idのバインド
    $stmt->bindParam(':id', $id);
    
    //:post_idと$idが一緒。
    $stmt_comments->bindParam(':post_id', $id);

    //実行
    $stmt->execute();
    $stmt_comments->execute();

} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}

// 結果が1行取得できたら
if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
} else {
    // 対象のidでレコードがない => 不正な画面遷移
    echo "対象のデータがありません。";
}

//var_dump($id,$title,$content);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>記事詳細</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <table>
            <tr>
                <td>ID</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>タイトル</td>
                <td><?php echo $title; ?></td>
            </tr>
            <tr>
                <td>本文</td>
                <td><?php echo $content; ?></td>
            </tr>
        </table>
        <a href="create_comment.php?post_id=<?php echo $id ?>">この記事にコメントする</a><br />
        <a href="main.php">メインページに戻る</a>
        <div>
        <?php
        // 結果が1行取得できたら
        while ($row = $stmt_comments->fetch(PDO::FETCH_ASSOC)) {
            echo '<hr>';
            echo $row['name'];
            echo '<br />';
            echo $row['content'];
        }
        ?>
        </div>
    </body>
</html>