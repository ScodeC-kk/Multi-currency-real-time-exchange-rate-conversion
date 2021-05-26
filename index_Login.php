<html>
<?php
include 'phpFunction/StartUp.php';
session_start();
if (strlen($_SESSION['User_No'])==0){
	header('Location: index.php');  
}
$User_No = $_SESSION['User_No'];
?>

<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <title>ExchangeRate.com | Welcome back </title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/darkMode.css" />
</head>
<style>
input { 
    text-align: right; 

}

.placeholder
{
    position: relative;
}

.placeholder::after
{
    position: absolute;
    left: 20px;
    top: 11px;
    content: attr(data-placeholder);
    pointer-events: none;
    opacity: 0.9;
    font-size: 20px;
}


input, select ,p,placeholder,button {
    font-size: 20px;
}
a {text-decoration: none;}

.unselectable {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    

}

</style>
<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com - logined user</a>
        <nav>
            <a href="phpFunction/AutoLogout.php" style="font-size: 25px"><i class="icon fa-sign-out" style="color:#B1B1B3"></i></a>
            <a href="Setting.php" style="font-size: 25px"><i class="icon fa-cogs" style="color:#B1B1B3"></i></a>
            <a href="viewRecord.php" style="font-size: 25px"><i class="icon fa-history" style="color:#B1B1B3"></i></a>
            <a href="DeveolopInfo.php" style="font-size: 25px"><i class="icon fa-question" style="color:#B1B1B3"></i></a>
            
        </nav>
    </header>


    
    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>Wellcome back </h1>
            <?php
            echo "<p id='username_Display'>Hello</p>";
            ?>
        </div>
    </section>

   <!-- Main -->
    
    <section id="main" class="wrapper">
        <div class="inner">
        
            <div class="content">

                <!-- Form -->

                <form method="post" action="" enctype='multipart/form-data'>
                <h3>Let's start</h3>
                
                <?php
                
               $url = "storeData/conutry.json";
		$json = file_get_contents($url);
		$json_data = json_decode($json, true);


		$sql = "SELECT * FROM `User_setting` WHere `User_No` = $User_No;";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			$UserSettingList = [$row["First"],$row["Second"],$row["Third"],$row["Fourth"],$row["Fifth"],$row["Sixth"],$row["Seventh"]];
			
		}
		foreach ($UserSettingList as $value) {
		    $save = $json_data[$value];
		    echo '<div class="col-6 col-12-xsmall">';
		    echo '<div class="placeholder" data-placeholder="'.$save.' ('.strtoupper($value).')">';
		    echo '<input type="text" name="'.$value.'" id="'.$value.'" value="" onfocus="SetChange(this);"/></input>';
		    echo '<div>';
		    echo '</div>';
		    echo '<br>';
		}

                ?>
                        <ul class="actions">
                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="primary" id='Count' onclick="count()">Count according to <?php echo strtoupper($UserSettingList[0]); ?></button>
                        
                        <li><input type="reset" value="Reset" class="primary" /></li>
                        
                        <li><button type="button" id='ViewDetail' onclick="GoViewDetail()">Select option & view</button></li>
                        
			
                       &nbsp;

                    </ul>
                    <input type="checkbox" id="AutoMode" name="AutoMode" checked><label for="AutoMode"  class="unselectable" > Auto Mode </label>
                </form>
            
            </div>
        </div>



	
    </section>

<script>
       
//setup before functions
let typingTimer;                //timer identifier
let doneTypingInterval = 1500;  //time in ms (1.5 seconds)

<?php
foreach ($UserSettingList as $value) {
//echo $value;
echo "let ".$value."myInput = document.getElementById('$value');";
echo $value."myInput.addEventListener('keyup', () => {";
echo "    clearTimeout(typingTimer);";
echo "    if (".$value."myInput.value) {";
echo "        typingTimer = setTimeout(doneTyping, doneTypingInterval);";
echo "    }";
echo "});";
}
?>

//user is "finished typing," do something
function doneTyping () { 
	if (document.getElementById('AutoMode').checked) {
		count();
	}
}


var Main = <?php echo $UserSettingList[0] ?>;
var AllCurrency = <?php echo json_encode($UserSettingList) ?>;


document.addEventListener("keydown", function(event) {
   if (event.keyCode == 27){
   $(':input').val('');
   }
   if (event.keyCode == 13){
   //$(':input').val('');
   count();
   }


  
});

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}


function SetChange(passedObject){
	Main = passedObject.id;
	var res = Main.toUpperCase();
	document.getElementById('Count').innerText = "Count according to "+res;
	document.getElementById('ViewDetail').innerText = "View the detail of "+res;
}

function count(){
	var getData = document.getElementById(Main).value;
	var FilteredValue = AllCurrency.filter(function(e) { return e !== Main })
	
	
	try {
	    eval(getData); 
	} catch (e) {
	    if (e instanceof SyntaxError) {
		
	    }
	}
	
	var url = "storeData/count.php?coin="+ Main +"&value="+ eval(getData).toFixed(5) +"&other="+FilteredValue.join('')+"&User=1";
	
	document.getElementById(Main).value = eval(getData).toFixed(5);
	fetch(url)
	.then(res => {
	    return res.json();
	}).then(result => {
            FilteredValue.forEach(ReturnData => document.getElementById(ReturnData).value = result[ReturnData] );
	});
	
}

function GoViewDetail(){
	var FilteredValue = AllCurrency.filter(function(e) { return e !== Main })
	
	if (FilteredValue.length == 6){
		var ViewUrl = "viewDetail.php?ViewCoin="+ Main +"&other="+FilteredValue.join('');
		window.location.href = ViewUrl;
	}else{
		alert("Please select an option");
	}
  	

	
	
}


</script>
<?php
$_COOKIE['returnMSG'];
if (isset($_COOKIE['returnMSG'])){
echo "<script type='text/javascript'>alert('".$_COOKIE['returnMSG']."');</script>";
}

?>



    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
