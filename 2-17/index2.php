<?php
//タイムゾーンを東京に設定
date_default_timezone_set('Asia/Tokyo');

//現在時刻を取得する
$time = date("H");
echo "今".$time."時台です。<br>";

//取得した現在時刻によって表示させる挨拶を変更する
//もし、現在時刻が4時〜11時の場合は「おはようございます！」と表示
if ($time >= 4 && $time <= 11) {
    echo "おはようございます！";
//現在時刻が12時〜15時の場合は「こんにちは！」と表示
} elseif ($time >=12 && $time <= 15) {
    echo "こんにちは！";
//上記以外の時間の場合は「こんばんは！」と表示
} else {
    echo "こんばんは！";
}
