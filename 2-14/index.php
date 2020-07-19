<?php
//count（要素の数を数える）
$fruits = ["apple", "banana", "orange"];
echo count($fruits);
//要素が３つなので３と出力される

echo "<br>";
echo "<br>";

//sort（要素の並べ替え）
$fruits = ["orange", "banana", "apple"];
sort($fruits);
var_dump($fruits);
//apple, banana, orangeの順番で出力される

echo "<br>";
echo "<br>";

//sort（要素の並べ替え）
$numbers = [4, 67, 32, 78, 100];
sort($numbers);
var_dump($numbers);
//4, 32, 67, 78, 100の順番で出力される

echo "<br>";
echo "<br>";

//in_array（配列に中にある要素が存在しているか）
$fruits = ["apple", "banana", "orange"];
var_dump(in_array("banana", $fruits));
//$fruits配列の中に「banana」が入っているかを調べる
//bool(true)と出力される：bool型は真偽値を入れる事ができる変数の一つ

echo "<br>";
echo "<br>";

//in_array（配列に中にある要素が存在しているか）
$fruits = ["apple", "banana", "orange"];
if (in_array("apple", $fruits)) {
    echo "りんごをあげるよ";
} else {
    echo "りんごはあげられないよ";
}
//配列の中にりんごがあるので「りんごをあげるよ」と出力される

echo "<br>";
echo "<br>";

//implode（配列を結合して文字列に変換）
$fruits = ["apple", "banana", "orange"];
$atstr = implode("@", $fruits);
//implodeは第一引数で配列を結合させる際に入れたい文字を、第2引数で対象の配列を指定する
//apple@banana@orangeと出力される。文字列なのでstring型で出力。
var_dump($atstr);

echo "<br>";
echo "<br>";

//implode（配列を結合して文字列に変換）
$fruits = ["apple", "banana", "orange"];
$atstr = implode($fruits);
//結合時に区切り文字を入れない場合
var_dump($atstr);

echo "<br>";
echo "<br>";

//explode（文字列を指定の区切りで配列にする）
//配列内の要素を結合する。結合時の区切り文字は@にする
$fruits = ["apple", "banana", "orange"];
$atstr = implode("@", $fruits);
var_dump($atstr);

echo "<br>";

//結合されている文字列を各要素に区切って配列にする
$re_fruits = explode("@", $atstr);
var_dump($re_fruits);

echo "<br>";
echo "<br>";

//explode（文字列を指定の区切りで配列にする）
//カンマ区切りの文字列を配列にする
$str = "1, 2, 3, 4, 5, 6";
$array = explode(",",$str);
//$arrayは配列のこと
var_dump($array);
?>

<p></p>

<p>IT用語 SESに向けて準備しよう</p>
<p>1. 要件定義（要求仕様書）：情報システムやソフトウェアについて顧客が望んでいる機能や仕様などの概略をまとめたもののこと</p>
<p>2. 単体テスト・結合テスト：
<p>・単体テスト：プログラムを検証する作業の中でも、プログラムを手続きや関数といった個々の機能ごとに分割し</p>
<p>そのそれぞれについて動作検証を行う手法のこと。</p>
<p>・結合テスト：システム開発におけるプログラムの検証作業の中でも、手続きや関数といった個々の機能を結合させて、</p>
<p>うまく連携・動作しているかを確認するテストのこと。</p>
<p>3. テスト仕様書（どのようなもの、項目）：システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、</p>
<p>テストするポイントをまとめたドキュメントのこと。</p>
<p>単体テスト、結合テスト、機能テスト、システムテスト（負荷テスト、ボリュームテスト、セキュリティテストetc）、受け入れテスト（シナリオテスト）</p>
<p>運用テスト、リグレッションテストなどの項目がある。</p>