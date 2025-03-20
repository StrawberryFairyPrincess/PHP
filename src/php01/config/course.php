<?php

// htmlspecialchars：フォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数

// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";

?>