<!-- http://localhost/php01/index08.php -->

<?php

// 配列
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);
echo "<br/>";
// var_dump関数は与えられた変数の値を詳細に出力
// 出力結果：配列の要素数、各要素のデータ型、値、値の長さ（文字列の場合）

// 配列の番号
echo $people[0] . "<br/>";
echo $people[2][3] . "<br/>";

// 連想配列：添字に文字列を用いた配列、書き方2種類
// $people = array(
//     'person1' => 'Taro',
//     'person2'  => 'Jiro',
//     'person3'  => 'Saburo'
// );
$people = [
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3'  => 'Saburo'
];
var_dump($people);
echo "<br/>";
echo $people['person1'] . "<br/>";
echo $people['person2'][0] . "<br/>";

// 多次元配列
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
];
echo $people[0]["last_name"] . "<br/>";

// foreach文：配列の要素の数だけ処理を繰り返す
// foreach文では配列と値を引数として指定
$people = array('Taro', 'Jiro', 'Saburo');
foreach ($people as $person) {
    echo $person;
    echo '<br />';
}
// foreachの引数のうち、値を「キー => 値」の形にすると添字を付けられる
// 配列にキーが指定されていない場合、デフォルトで添字が当てられる
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);
foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}
// 「添字」は「格納されてる名前」です

// 問題
$people = [
    [ "Taro", 25, "men" ],
    [ "Jiro", 20, "men" ],
    [ "Hanako", 16, "women" ]
];
foreach( $people as $person ){
    echo $person[0] . "は" . $person[1] . "歳の" . $person[2] . "です" . '<br/>';
}

?>