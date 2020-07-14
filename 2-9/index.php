<?php
    //100回ループする
for($num=1;$num<=100;$num++) {
    //3と5で割り切れる時FizzBuzzと表示
if ($num % 3 == 0 && $num % 5 == 0) {
    echo "FizzBuzz!!<br>";
    //3で割り切れる場合はFizzと表示
} elseif($num % 3 == 0) {
    echo "Fizz!<br>";
    //5で割り切れる場合はBuzzと表示
} elseif($num % 5 == 0) {
    echo "Buzz!!<br>";
    //それ以外は数字をそのまま表示
} else {
    echo $num."<br>";
}
}

echo "<br>";

//IT用語 SESに向けて準備しよう
echo "IT用語 SESに向けて準備しよう<br>";
echo "1. パフォーマンス：コンピュータやシステムがどの程度の処理で動作するかという度合いを表すもの<br>";
echo "2. スロークエリ:データベースにおいて時間のかかっているSQLのこと。<br>";
echo "3. クエリログ：MySQLサーバーが実行したSQLクエリを出力するログのこと<br>";
?>