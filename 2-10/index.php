<?php
function getCuboidArea($length, $width, $height) {
    $area = $length * $width * $height;
    print "直方体の面積は".$area."です。";
}
getCuboidArea(5,10,8);

echo "<br>";
echo "<br>";

//IT用語 SESに向けて準備しよう
echo "IT用語 SESに向けて準備しよう<br>";
echo "1. ハッシュ化：値をハッシュ関数に入れてハッシュ値に変換すること<br>";
echo "ハッシュ値から元のデータを割り出したり、同じハッシュ値を持つ別のデータを生成することは極めて難しいためパスワード保管などで使われる。<br>";
echo "2. 総合テスト：手続きや関数といった個々の機能を結合させて、うまく連携・動作しているかを確認するテストのこと。<br>";
echo "3. デバッグ：プログラム内のバグを探し出して取り除き、意図した動作をするよう修正する作業のこと。<br>";
?>