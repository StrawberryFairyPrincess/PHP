<!-- http://localhost/php01/index03.php -->

<?php

// $は変数
$item = "JavaScript";
// $item = "PHP";
echo $item;
echo "<br />";

// constは定数
const FELANGUAGE = "Vue.js";
echo FELANGUAGE;
echo "<br />";

// 文字列
$string = "こんにちは";
// 整数
$integer = 20;
echo $integer;
echo "<br />";
echo $string;
echo "<br />";

// 連結演算子
$name1 = "Sato" . "Taro";
$name2 =  "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";
echo $name1;
echo "<br />";
echo $name2 . "Jiro";
echo "<br />";
echo $last_name . $first_name;
echo "<br />";

// 連結演算子問題
// $name_work = Tanaka;
// $last_name_work = Yamada;
// $first_name_work = Saburo;
// echo $name_work . "Jiro";
echo $name2 . "Jiro";
echo "<br />";
// echo $last_name_work . $first_name;
echo $last_name . $first_name;
echo "<br />";

?>