// 問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。

let numbers = [2, 5, 12, 13, 15, 18, 22];

// ここに答えを実装してください。↓↓↓
// isEven関数の作成
function isEven() {

    // 配列の要素の数だけ処理を繰り返す
    for (let i = 0; i < numbers.length; i++) {

        // iが偶数の場合は「◯○は偶数です」と表示させる
        if(i % 2 === 0) {
            console.log(numbers[i] + `は偶数です`);
        }
    }
}

// isEven関数の呼び出し
isEven();



/* 問2:以下の要件を満たすように実装してください。 
  【要件】 
  ・インスタンス化した時にガソリンとナンバーがセットされるようなCarクラスを作成する
  ・「ガソリンは〇〇です。ナンバーは△△です」と出力される「getNumGas」という関数を作成する
*/

// carクラスの作成
class Car {

    // コンストラクタの作成。変数：gass、number用意
    constructor(gass, number) {

        // 受け取ったgass（右辺）をこのクラスのgass（左辺）に代入して使える状態にする
        this.gass = gass;
        // 受け取ったnumber（右辺）をこのクラスのnumber（左辺）に代入して使える状態にする
        this.number = number;
    }

    // 「getNumGas」関数を作成
    getNumGas() {
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.number}です`);
    }
}

let car_info = new Car(`10`, `1234`);
car_info.getNumGas();