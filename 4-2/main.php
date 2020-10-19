<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();

try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY id asc";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
    <!--style.css ファイルを読み込みする-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1>在庫一覧画面</h1>
        <div class="button">
            <a href="create_post.php" class="button_3">新規登録</a>
            <a href="logout.php" class="button_4">ログアウト</a><br><br>
        </div>
        <table>
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th></th>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><a href="delete_post.php?id=<?php echo $row['id']; ?>" class="button_5">削除</a></td>
        </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>