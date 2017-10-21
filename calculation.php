<?php

include_once($_SERVER['DOCUMENT_ROOT']."/form.php");

$ratefrom;
$rateto;

if($provider=="Fixer"){
  $provider = $fixer;
}
else{
  $provider = $ECB;
}

foreach ($provider as $key => $value) {
  if($currencyfrom ==$key ){
    $rateToEuro = $value;
    // echo($rateToEuro);

  }
  if($currencyto ==$key ){
    $rateToTarget = $value;
    // echo($rateToTarget);
  }
}
$answer = ($amount /$rateToEuro) * $rateToTarget;


echo($answer);
?>
