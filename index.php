<?php
include($_SERVER['DOCUMENT_ROOT']."/FetchCurrency.php");

$ECB = getECB();
$Fixer = getFixer();

print_r($ECB);


?>
