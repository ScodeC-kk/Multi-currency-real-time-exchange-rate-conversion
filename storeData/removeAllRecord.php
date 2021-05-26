<?php
header('Content-type: application/json');
include '../phpFunction/StartUp.php';
session_start();
$session_User_No = $_SESSION['User_No'];
$sql = "DELETE FROM `User_record` WHERE `User_No` = ".$session_User_No;
$result = $conn->query($sql);



?>
