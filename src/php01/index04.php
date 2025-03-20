<!-- http://localhost/php01/index04.php -->

<?php

// 算術演算子
$a = 15;
$b = 3;
$c = 10;
$d = 5;
echo $a + $b . "<br/>";
echo $a - $b . "<br/>";
echo $a * $b . "<br/>";
echo $a / $b . "<br/>";
echo $a % $c . "<br/>";

// 代入演算子
$a = $b;
echo $a . "<br/>";

// 複合演算子
// .= : 文字列の時使う、
// ( $a .= $b )と( $a = $a.$b )は同じ
$c += $d;
echo $c . "<br/>";

// 比較演算子
// ($a == $b) $aが$bに等しい時1
// ($a === $b) $aが$bに等しく同じ型の時
// ($a != $b)($a <> $b) $aが$bに等しくない時
// ($a !== $b) $aが$bと等しくないか、同じ型でない時
$a = 20;
$b = 5;
echo ( $a > $b ) . "<br/>";

// 論理演算子
// ($a xor $b) $aまたは$bのどっちかだけTRUE
// ($a ?? $b) $aがnullや未定義の場合$bを返し、それ以外の場合は$aを返す
echo ( ( $a > 10 ) && ( $a < 30 ) ) . "<br/>";

// 加算子、減算子
$a = $b = 10;
$c = $d = 5;
echo ++$a . "<br/>";
echo $b++ . "<br/>";
echo --$c . "<br/>";
echo $d-- . "<br/>";

?>