<?php
include($_SERVER['DOCUMENT_ROOT']."/fetchCurrency.php");

$fixer = getFixer();
$ECB = getECB();

if(isset($_POST['amount'])){
  $amount= $_POST['amount'];
}
if(isset($_POST['provider'])){
  $provider = $_POST['provider'];
}
if(isset($_POST['currencyform'])){
  $currencyfrom= $_POST['currencyform'];
}
if(isset($_POST['currencyto'])){
  $currencyto = $_POST['currencyto'];
}

echo('<p>Currency from</p>');
echo('<select id="currencyfrom" name="currencyform">');
foreach ($fixer as $key =>$value) {
  echo('<option type="submit" value='.$key.'>'.$key.'</option>');
}
echo('</select>');

echo('<p>Currency to</p>');
echo('<select id="currencyto" name="currencyto">');
foreach ($fixer as $key =>$value) {
  echo('<option type="submit" value='.$key.'>'.$key.'</option>');
}
echo('</select>');


?>
