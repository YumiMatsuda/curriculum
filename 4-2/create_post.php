<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require_once('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (!empty($_POST)){
    
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        echo '発売日が未入力です。';
    } elseif (empty($_POST["stock"])) {
        echo '在庫数が未選択です。';
    }


    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
        // 入力したtitleとcontentを格納
        $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
        $date = htmlspecialchars($_POST['date'], ENT_QUOTES);
        $stock = htmlspecialchars($_POST['stock'], ENT_QUOTES);

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $stmt = $pdo->prepare("INSERT INTO books (title, date, stock) VALUES (?, ?, ?)");
            //実行
            $stmt->execute(array($title, $date, $stock));
            // main.phpにリダイレクト
            header("Location: main.php");
            exit;
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--style.css ファイルを読み込みする-->
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div class="wrapper">
    <h1>本登録画面</h1>
    <form method="POST" action="">
    <div class="text_box">
        <input type="text" name="title" id="title" placeholder="タイトル"><br><br>
        <input type="text" name="date" id="date" placeholder="発売日"><br><br>
    
    <h3>在庫数</h3>
    <div class="cp_ipselect cp_sl01">
        <select name="stock">
            <option value="" hidden>選択してください</option>
            <?php for ($i=0;$i<=20;$i++){ ?>
                <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
            <?php } ?>
        </select>
    </div>
    <br>
    <input type="submit" value="登録" id="post" name="post" class="button_6">
    </div>
    </form>
</div>
</body>
</html>