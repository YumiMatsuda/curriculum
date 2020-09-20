<?php
/* getData.php ファイルを読み込みする*/
include_once("getData.php");
/* pdo.php ファイルを読み込みする*/
include_once("pdo.php");

/*getDataをインスタンス化（実体化）する*/ 
/*getDataクラスをgettingDataという名前で実体を作った*/
$gettingData = new getData();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE=edge">
    <title>Y&I Group Blog</title>
    <!--style.css ファイルを読み込みする-->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="left">
            <!--img/logo.pngファイルを挿入。サイズは幅200px、高さは幅120px-->
            <img src="img/logo.png" alt="Y&IGroup" width=200 height=120>
        </div>
        <div class="right">
            <div class="right-up" style="text-align:right;">
            <!--実体化したクラスの中のgetUserDataを実行-->
            <!--getData.phpファイルの$users_dataを$usersDataに代入した-->
                <?php $usersData = $gettingData->getUserData(); 
                    echo "ようこそ";
                    echo $usersData["last_name"];
                    echo $usersData["first_name"];
                    echo "さん";
            ?>
            </div>
            <div class="right-bottom" style="text-align:right;">
                <?php
                    echo "最終ログイン日：";
                    echo $usersData["last_login"];
                ?>
            </div>
        </div>
        
        <div class="main">
        <table>
        <tr><th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th></tr>
        <?php
        //getData.phpファイルの$post_dataを$postDataに代入した
        $postData = $gettingData->getPostData(); 
        // while文はfalseになるまで処理を繰り返す
        // fetch：fetchを実行するために1行ずつ次のデータを取ってくる。取ってくるデータがなくなったらfalseを返す
        // while($table = $postData->fetch(PDO::FETCH_ASSOC)をfalseでない間処理を繰り返す
        while(($table = $postData->fetch(PDO::FETCH_ASSOC))!=FALSE) {
        ?>
        <tr>
            <td><?php echo $table["id"]; ?></td>
            <td><?php echo $table["title"]; ?></td>
            <td>
                <?php 
                if($table["category_no"] == "1") {
                    echo "食事";
                }elseif($table["category_no"] == "2") {
                    echo "旅行";
                }else {
                    echo "その他";
                }
                ?>
            </td>
            <td><?php echo $table["comment"]; ?></td>
            <td><?php echo $table["created"]; ?></td>
            <td><?php echo "<br>"; ?></td>
        </tr>
        <?php } ?>
        </table>
        </div>
        <div class="footer">Y&I group.inc</div>
    </div>
</div>
</body>
</html>