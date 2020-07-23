<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "a");
    // 対象のファイルに書き込む
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}

$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line.'<br>';
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}

// IT用語 SESに向けて準備しよう
echo "1. CakePHPの2系・3系の違い：<br>";
echo "CakePHPの3系は簡単に使うことができる。日本語での情報や書籍が多く、学習も進めやすいことがメリット。<br>";
echo "また、Ruby on Railsの影響を受けておりWEBシステムの開発を高速で行うことができるのも大きな特徴。<br>";
echo "CakePHPの2系との違いはCakePHP2はComposerでのインストールに対応していなかったが、<br>";
echo "CakePHP3はComposerで簡単にインストールすることができる。次に、モデル周りの構成や、DBからデータを取得する際のコードも比較的簡単。<br>";
echo "CakePHP2のQuelyBuilderでは多次元配列をつかい複雑だったものが、CakePHP3では簡単に使えるように変更されている。<br>";
echo "2. LAMP：データベースを利用したWebアプリケーションを開発・運用するのに適した、<br>";
echo "人気の高いオープンソースソフトウェアの組み合わせ。Linux+Apache+MySQL+PHP/Perl/Pythonの頭文字を取ったもの。<br>";
echo "全てオープンソースソフトウェアとして公開されている<br>";
echo "3. AWS：Amazon Web Servicesの略。Amazon Web Servicesによって提供されているクラウドコンピューティングサービス（ウェブサービス）<br>";
echo "ストレージ、ネットワーク、データベースだけではなく、データ分析（アナリティクス）、アプリケーション、セキュリティ、モバイル、IoT、人工知能（AI）など多岐にわたる。<br>";