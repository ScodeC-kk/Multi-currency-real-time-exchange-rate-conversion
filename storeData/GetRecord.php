<?php
header('Content-type: application/json');
include '../phpFunction/StartUp.php';
session_start();
$session_User_No = $_SESSION['User_No'];
$sql = "SELECT SearchNum,currency,time FROM `User_record` WHERE `User_No` = ".$session_User_No." ORDER BY `User_record`.`time` DESC limit 20";
$result = $conn->query($sql);

$returnResult = [];
foreach ($result as $value) {
    array_push($returnResult,[$value["SearchNum"],$value["currency"],$value["time"]]);
}

echo json_encode($returnResult);

?>
