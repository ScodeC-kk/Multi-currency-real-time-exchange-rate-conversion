<?php
header('Content-type: application/json');
include '../phpFunction/StartUp.php';
session_start();
$session_User_No = $_SESSION['User_No'];
$sql = "SELECT First,Second,Third,Fourth,Fifth,Sixth,Seventh FROM `User_setting` WHERE `User_No` =".$session_User_No.";";
$result = $conn->query($sql);

foreach ($result as $value) {
    echo json_encode($value);
}

?>
