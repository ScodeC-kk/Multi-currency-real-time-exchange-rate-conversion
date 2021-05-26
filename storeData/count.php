<?php
$coin = strtolower($_GET["coin"]);
$value = strtolower($_GET["value"]);
$other = str_split(strtolower($_GET["other"]), 3);
$User = $_GET["User"];
//$return = [$coin => $value];
$return = [];

$url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/".$coin.".json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);


foreach ($other as $AnotherCoin) {
    $return[$AnotherCoin] = round($value*json_encode($json_data[$coin][$AnotherCoin]),5);
} 

//  127.0.0.1/storeData/count.php?coin=eth&value=123.123&other=BTCETHUSDHKD
//  127.0.0.1/storeData/count.php?coin=eth&value=123.123&other=btcethusdhkd

header('Content-type: application/json');

echo json_encode($return);

if (strlen($User)>0){
	include '../phpFunction/StartUp.php';
	session_start();
	$session_User_No = $_SESSION['User_No'];
	$time = time();
	$sql = "INSERT INTO `User_record` (`User_No`, `SearchNum`, `currency`, `time`) VALUES ('$session_User_No', '$value', '$coin', $time); ";
	$result = $conn->query($sql);
	
}

?>
