<?php


function getFixer(){
  $content = file_get_contents("http://api.fixer.io/latest");
  $result= json_decode($content);
  $i = 0;
  $currencyArray= array();
  foreach ($result as $key => $value) {
    if ($i ==2 ) {
      foreach ($value as $name=> $value) {
        $currencyArray[$name]=$value;
      }
    }
    $i++;
  }
ksort($currencyArray);
return $currencyArray;
}
function getECB(){
  $currencyArray = array();
  $XMLContent=file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
  foreach($XMLContent as $line){
    if(preg_match("/currency='([[:alpha:]]+)'/",$line,$currencyCode)){
      if(preg_match("/rate='([[:graph:]]+)'/",$line,$rate)){
        $currencyArray[$currencyCode[1]]=$rate[1];

      }
    }
  }
  ksort($currencyArray);
  return $currencyArray;
}

?>
