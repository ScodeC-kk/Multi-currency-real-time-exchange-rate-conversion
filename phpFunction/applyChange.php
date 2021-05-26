<?php
header('Content-type: application/json');
include 'StartUp.php';
session_start();
$GetData = str_split($_GET['update'], 3);
$session_User_No = $_SESSION['User_No'];
$sql = "UPDATE User_setting SET First = '".$GetData[0]."' ,Second = '".$GetData[1]."' ,Third = '".$GetData[2]."' ,Fourth = '".$GetData[3]."' ,Fifth = '".$GetData[4]."' ,Sixth = '".$GetData[5]."' ,Seventh = '".$GetData[6]."' Where User_No = '$session_User_No';";
$result = $conn->query($sql);


?>
