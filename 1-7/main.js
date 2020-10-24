/*
問1：以下の要件を満たすように「たい焼きクラス」を作成してください。

【要件】
・クラス名：Taiyaki
・インスタンス化する度に「あんこ」「クリーム」「チーズ」等と中身を変えられるように実装してください。
（コンストラクタで渡ってきた引数をセットする）
・「中身は〇〇です」と中身を出力する関数を作成してください。
*/

// Taiyakiクラスを作成
class Taiyaki {

    // コンストラクタの作成。変数：content用意
    constructor(content) {

        // 受け取ったcontent（右辺）をこのクラスのcontent（左辺）に代入して使える状態にする
        this.content = content;
    }

    nakami() {
        console.log(`中身は${this.content}です`);
    }
}

let anko = new Taiyaki(`あんこ`);
anko.nakami();

let cream = new Taiyaki(`クリーム`);
cream.nakami();

let cheese = new Taiyaki(`チーズ`);
cheese.nakami();