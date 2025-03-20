<!-- http://localhost/php01/index07.php -->

<?php

// 関数定義の種類

// 引数あり、戻り値なし
function outputNumber($a){
    echo "引数の値は" . $a . "です" . "<br/>";
    return;
}
outputNumber(2);

// 引数なし、戻り値なし
function outputHello(){
    echo "Hello world" . "<br/>";
}
outputHello();

// 引数あり、戻り値あり
function total( $number1, $number2 ){
    $value = $number1 + $number2;
    return $value;
}
echo total(2, 4) . "<br/>";
echo total( 2, 3 ) . "<br/>";

// 問題1
function successFailure( $score1, $score2, $score3 ){
    $sum = $score1 + $score2 + $score3;
    if( $sum > 210 ){
        echo "合計点は" . $sum . "なので合格です" . "<br/>";
    }
    else{
        echo "合計点は" . $sum . "なので不合格です" . "<br/>";
    }
}
successFailure( 89, 73, 96 );
successFailure( 43, 52, 81 );

// 問題2
function triangle( $base, $height ){
    return ( $base * $height / 2 );
}
function rectangle( $base, $height ){
    return ( $base * $height );
}
function trapezium( $base1, $base2, $height ){
    return ( ( $base1 + $base2 ) * $height / 2 );
}
echo triangle( 5, 4 ) . "<br/>";
echo rectangle( 5, 3 ) . "<br/>";
echo trapezium( 3, 7, 5 ) . "<br/>";

?>