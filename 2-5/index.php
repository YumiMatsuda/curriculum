<?php
$name = "taro";
$password = "pass";

if ($name === "taro" && $password === "pass") {
    echo "ログイン成功です";
} elseif ($name === "taro") {
    echo "パスワードが間違っています。";
} elseif ($password === "pass") {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています。";
}

// IT用語 SESに向けて準備しよう
echo "<br>";
echo "<br>";
echo "IT用語 SESに向けて準備しよう<br>";
echo "1. IDE（統合開発環境）<br>";
echo "→Integrated Development Environmentの略。<br>";
echo "ソフトウェアの開発で利用されるソフトウェアを、その他の支援ツールなどとまとめ<br>";
echo "一つの開発環境で統合・統一的に扱えるようにした開発環境のこと。<br>";
echo "2. JOIN（データベースにおいて）：<br>";
echo "→データベースにおいて複数のテーブルを結合させること。内部結合と外部結合がある<br>";
echo "内部結合：2つのテーブルで一致したデータ行のみ取得する。<br>";
echo "外部結合：2つのテーブルで一致しないデータも含めてどちらか一方のテーブルのデータを全て取得する<br>";
echo "3. コンフリクト<br>";
echo "→複数の装置やソフトウェアが一つの資源を同時に利用しようとして競合状態になること。<br>";
?>