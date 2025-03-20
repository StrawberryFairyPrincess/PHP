<!-- http://localhost/php01/config/result.php -->

<?php

$name = htmlspecialchars( $_POST['name'], ENT_QUOTES );
$product = htmlspecialchars( $_POST['product'], ENT_QUOTES );
$quantity = htmlspecialchars( $_POST['quantity'], ENT_QUOTES );

echo "私の名前は" . $name . "<br/>";
echo "希望商品は" . $product . "<br/>";
echo "注文数は" . $quantity . "<br/>";

?>