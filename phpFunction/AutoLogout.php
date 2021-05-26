<?php
session_start();
echo $_SESSION['User_No'];
session_destroy();
header('Location: ../index.php'); 


?>
