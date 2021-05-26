<?php
include 'StartUp.php';
require_once 'block_io.php';
function alert($msg) {
    setcookie("returnMSG", $msg, time()+1, "/");
    //echo "<script type='text/javascript'>alert('$msg');</script>";
    header('Location: ../Login_User.php');
}


$login_id = strval($_POST["login_id"]);
$password = strval($_POST["password"]);


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);






$apiKey = "a616-7f94-44c7-c384";
$pin = "iampolyustudentliveinhongkong";
$version = 2; // the API version to use


$block_io = new BlockIo($apiKey, $pin, $version);


// get target balance 

$dTrustAddress='2MuR3VVmdv3oZp4oXfq9UiEVX6qqbgJSkaH';

function recaptchaCheck($token)
{
    if (!$token)
    {
        return false;
    }

    $secret_key = '';
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $token);
    $response_data = json_decode($response, true);
    if ($response_data["success"])
    {
        return true;
    }
    else
    {
        return false;
    }
}




if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
	alert("please input a correct password");
	header('Location: ../Login_User.php');
}else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['Login'])) {
		$password=hash('sha256', $password);
	$sql = "SELECT * FROM User_info WHERE User_ID = '".$login_id."' AND password = '".$password."';";
	echo $sql;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		if (recaptchaCheck($_POST['g-recaptcha-response']) == false){
		alert("Incorrect recaptcha input");
		}else{
		while($row = $result->fetch_assoc()) {
		$User_No = $row["User_No"];
		$add =$row["address"];
		$id =$row["User_ID"];
		}
		session_start();
		$_SESSION['User_No'] = $User_No;
		$_SESSION['add'] = $add;
		$_SESSION['id'] = $id;

		header('Location: ../index_Login.php');
		}
	}else{
		alert("incorrect username or password");
		
		
	}
	
    } else {
	if (recaptchaCheck($_POST['g-recaptcha-response']) == false){
	alert("Incorrect recaptcha input");
	}else{	
	$sql = "SELECT COUNT(*)+1 as res FROM User_info;";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {$NewUserNo = $row["res"];}
	$time = time();


	global $block_io;
    $newaddress=$block_io->get_new_address();
    
    $address=$newaddress->data->address;
    $_SESSION['add']=$address;
	$_SESSION['usid']=$login_id;
	$password=hash('sha256', $password);

	$sql = "INSERT INTO `User_info` (`User_No`, `User_ID`, `password`, `address`, `Unix_time`) VALUES ('$NewUserNo', '$login_id', '$password', '$address', '$time');";
	$result = $conn->query($sql);
	


	$sql = "INSERT INTO `User_setting` (`User_No`, `First`, `Second`, `Third`, `Fourth`, `Fifth`, `Sixth`, `Seventh`) VALUES ('$NewUserNo', 'usd', 'eur', 'jpy', 'hkd', 'cny', 'btc', 'eth');";
	$result = $conn->query($sql);
	echo $sql;
	session_start();
	$_SESSION['User_No'] = $NewUserNo;
	header('Location: ../index_Login.php');
	setcookie("returnMSG","The account is created. Welcome to use this services.", time()+1, "/");
	}
    }
}

?>
