<?php
//ceil 切り上げ
$x = 6.2;
echo ceil($x);

echo "<br>";
echo "<br>";

//floor 切り捨て
$x = 6.2;
echo floor($x);

echo "<br>";
echo "<br>";

//四捨五入
$x = 6.2;
echo round($x);

echo "<br>";
echo "<br>";

//pi(円周率)
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
// 半径が6の円の面積の計算
circleArea(6);

echo "<br>";
echo "<br>";

//mt_rand(乱数)
echo mt_rand(1, 25);

echo "<br>";
echo "<br>";

//strlen（文字列の長さ）
$str = "yasaisarada";
echo strlen($str);

echo "<br>";
echo "<br>";

//strpos（検索）
$str = "yasaisarada";
echo strpos($str, "i");
// =>4と出力される

echo "<br>";
echo "<br>";

//substr（文字列の切り取り）
$str = "yasaisarada";
echo substr($str, -6, 6);
//saradaと出力される

echo "<br>";
echo "<br>";

//str_replace（置換）
$str = "yasaisarada";
echo str_replace("yasai", "YaSaI", $str);

echo "<br>";
echo "<br>";

//str_replace（置換）
$str = "I am Matsuda";
echo str_replace(" ", "", $str);
//半角スペースがなくなる

echo "<br>";
echo "<br>";

//printf（フォーマット化した文字列を出力）
$name = "吉田さん";
$limit_number = 10;

printf("%sの残り時間は後%d秒です", $name, $limit_number);

echo "<br>";
echo "<br>";

//printf（フォーマット化した文字列を出力）数を増やした場合
$name = "吉田さん";
$limit_minute = 10;
$limit_second = 5;

printf("%sの残り時間は%d分%d秒です", $name, $limit_minute, $limit_second);

echo "<br>";
echo "<br>";

//2桁で表示させたい場合、%02dのように表記
$limit_hour = 30;
$limit_minute = 15;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo "<br>";

$limit_hour = 4;
$limit_minute = 6;
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
//sprintfは出力までできないため、echoで出力が必要
echo $limit_time;
?>

<p>IT用語 SESに向けて準備しよう</p>
<p>1. PostgreSQL・Oracle SQL：</p>
<p>・PostgreSQL：ポストグレスキューエルと呼ぶ。リレーショナルデータベース（RDB）の作成や操作、管理ができる</p>
<p>リレーショナルデータベース（RDB）は、データを表形式で持ち、1つの表に入ったデータを別の表のデータと関連付けることで、</p>
<p>複雑なデータや大規模なデータを柔軟に取り扱うことができる。</p>
<p>・Oracle SQL：オラクルでデータの定義や操作を行うための言語のこと。</p>
<p>オラクルとは、1979 年に世界ではじめて商用として出荷された RDBMS : データベース・システム。</p>
<p>RDBMSは、RDBをコンピュータ上で操作できるようにした管理システムのこと</p>
<p>2. TortoiseGit・TortoiseSVN：</p>
<p>・TortoiseGitとはWindows用のGitソフトウェア。GUIで操作を行うことが出来るため扱いやすい。</p>
<p>・TortoiseSVNとはクライアント/サーバ型の集中型バージョン管理システム。Apache Subversionのクライアントにあたる。</p>
<p>3. 外部設計・内部設計：</p>
<p>・外部設計：操作画面や操作方法、データ出力など、ユーザーから見えるインターフェース部分の仕様を決定したり、</p>
<p>セキュリティや運用規定、システム開発のスケジュールや費用などを設計したりと基本的にユーザーに向けた仕様を設計すること</p>
<p>・内部設計：外部設計の結果を実際にプログラミングできるように、システム内部に特化した詳細な設計を行うこと</p>
