<?php

include '../phpFunction/StartUp.php';
session_start();
$session_User_No = $_SESSION['User_No'];
$time = time();
//$sql = "INSERT INTO `User_record` (`User_No`, `SearchNum`, `currency`, `time`) VALUES ('$session_User_No', '$value', '$coin', $time); ";
//$result = $conn->query($sql);
echo $session_User_No;

?>
