<?php
$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];

var_dump($colors);

echo "<br>";

$colors = ["red" => "赤", "blue" => "青", "green" => "緑", "yellow" => "黄色"];

var_dump($colors);

echo "<br>";

// IT用語 SESに向けて準備しよう
echo "IT用語 SESに向けて準備しよう<br>";
echo "1. プルリクエスト（マージリクエスト）：コードの変更をレビュワーに通知し、マージを依頼する機能。<br>";
echo "2. Git Flow：Gitの機能であるブランチを活用したGitの開発手法。<br>";
echo "それぞれ役割が振られているmaster, release, develop, feature, hot-fixの5つのブランチを使い分けて、開発を進める。<br>";
echo "3. CRON：UNIX系システム(Unix OS、Linux OS)で使用されるジョブを自動実行するスケジューラー。<br>";
echo "ユーザーが設定したスケジュールに基づいて一定時間毎に指定したコマンド、シェルスクリプトやプログラムを自動実行させる事ができる<br>";
?>