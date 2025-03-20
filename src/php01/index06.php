<!-- http://localhost/php01/index06.php -->

<?php

// for文
for ($i = 0; $i < 4; $i++) {
    echo $i;
}
echo "<br/>";

for( $i=1; $i<=5; $i++ ){
    echo $i * 2 . "<br/>";
}

// while文
$i = 0;
while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

$count = 0;
while( $count < 20 ){
    $count++;
    echo $count . "<br/>";
}

// break
$i = 0;
while ($i < 10) {
    if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
    }
    echo $i;
    $i++;
}
echo "<br/>";

// continue
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
        // $iが5の時、$iに1を足す処理をし、スキップをする。
    }
    echo $i;
    $i++;
}
echo "<br/>";

$count = 0;
while( $count <= 100 ){

    $count++;

    if( $count % 6 == 0 ){
        continue;
    }
    else{
        if( $count >= 20 ){
            break;
        }
        echo $count . "<br/>";
    }

}

// do…while文
// 繰り返し処理を行ってから評価するため、最低1回は実行する
$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while ($i < 5);  //条件式が真の時に実行

$num = 0;
do{
    echo "num = " . $num . "<br/>";
    $num++;
} while( $num < 3 );

// 問題1
for( $i=1; $i<=50; $i++ ){

    if( ( $i%3 == 0 ) &&
        ( $i%5 == 0 ) ){
        echo "FizzBuzz" . "<br/>";
    }
    else if( $i%3 == 0 ){
        echo "Fizz" . "<br/>";
    }
    else if( $i%5 == 0 ){
        echo "Buzz" . "<br/>";
    }
    else{
        if( $i == 1 ){
            echo "FizzBuzz Game" . "<br/>";
        }

        echo  $i . "<br/>";
    }

}

// 問題2
for( $i=1; $i<=5; $i++ ){

    for( $j=1; $j<=5; $j++ ){
        echo "●";
    }

    echo "<br/>";

}

?>