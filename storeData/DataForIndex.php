<?php
function CheckData($coin) {
	$url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/".$coin.".json";
	$json = file_get_contents($url);
	return  json_decode($json, true);
}


header('Content-type: application/json');

$indexDollar = array('usd', 'eur', 'jpy','hkd','gpd');

foreach ($indexDollar as $AnotherCoin) {
    $save = CheckData($AnotherCoin);
    foreach ($indexDollar as $anotherLoop) {
    	echo json_encode($save[$AnotherCoin][$anotherLoop]);
    }
} 





?>
