<!-- http://localhost/php01/index05.php -->

<?php

// if文
$a = 7;
if( $a == 5 ){
    echo "\$aは5です" . "<br/>";
}
else if( $a == 7 ){
    echo "\$aは7です" . "<br/>";
}
else{
    echo "\$aは5と7以外です" . "<br/>";
}

// switch文
$people = "Saburo";
switch( $people ){
    case "Taro":
        echo "太郎です" . "<br/>";
        break;
    case "Jiro":
        echo "次郎です" . "<br/>";
        break;
    case "Saburo":
        echo "三郎です" . "<br/>";
        break;
}

// 三項演算子
// $result = (条件式) ? "TRUE時の値" : "FALSE時の値";
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b . "<br/>";

?>