<?php
//タイムゾーンを東京に設定
date_default_timezone_set('Asia/Tokyo');

//現在時刻を取得する
$time = date ("H");

//型変換する。文字型を整数型に変換する
$intTime = intval ($time);
echo "今".$intTime."時台です。<br>";

//取得した現在時刻によって表示させる挨拶を変更する
//もし、現在時刻が4時〜11時の場合は「おはようございます！」と表示
if ($intTime >= 4 && $intTime <= 11) {
    echo "おはようございます！<br>";
//現在時刻が12時〜15時の場合は「こんにちは！」と表示
} elseif ($intTime >=12 && $intTime <= 15) {
    echo "こんにちは！<br>";
//上記以外の時間の場合は「こんばんは！」と表示
} else {
    echo "こんばんは！<br>";
}

var_dump($intTime, $time);