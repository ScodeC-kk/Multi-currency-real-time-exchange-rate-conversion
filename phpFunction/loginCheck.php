<?php
include 'StartUp.php';
session_start();
echo $_SESSION['User_No'];
if($_SESSION['User_No'] == ''){
	header('Location: ../index.php');  
}else{
header('Location: ../index_Login.php'); 
}
?>
