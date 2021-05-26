<?php
//header('Content-type: application/json');
$Currency = strtolower($_GET['Currency']);
$year = $_GET['Y'];
$month = $_GET['M'];
$day = $_GET['D'];

//https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/2020-11-24/currencies/eur.json
//http://192.168.1.101/storeData/getCurrencyData.php?Currency=usd
//http://192.168.1.101/storeData/getCurrencyData.php?Currency=usd&Y=2021&M=4&D=24

if (strlen($year) == 0 AND strlen($month) == 00 AND strlen($day) == 00){
$url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/".$Currency.".json";
}else{
$year = $_GET['Y'];
$month = substr(100+$_GET['M'],-2);
$day = substr(100+$_GET['D'],-2);

$url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/".$year."-".$month."-".$day."/currencies/".$Currency.".json";
}

$json = file_get_contents($url);
//echo $url;
print_r($json);

?>
