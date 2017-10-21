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
if($amount < 0){
  echo("<p>Please enter a positive number</p>");

}
elseif($amount == 0){

  echo("<p></p>");
}
else{
  $answer = ($amount /$rateToEuro) * $rateToTarget;
  echo("<p>".$answer."</p>");

}


?>
