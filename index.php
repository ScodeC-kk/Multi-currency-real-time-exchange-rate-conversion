<html>
<?php
include 'phpFunction/StartUp.php';
session_start();
if (strlen($_SESSION['User_No'])==1){
	header('Location: index_Login.php');  
}
?>

<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <title>ExchangeRate.com | Multi-currency real-time exchange rate conversion</title>
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


</style>
<body class="is-preload">

    <!-- Header -->
    <header id="header">
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com</a>
        <nav>          
            <a href="Login_User.php" style="font-size: 25px"><i class="icon fa-sign-in" style="color:#B1B1B3"></i></a>
            <a href="DeveolopInfo.php" style="font-size: 25px"><i class="icon fa-question" style="color:#B1B1B3"></i></a>
        </nav>
    </header>


    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>ExchangeRate.com</h1>
            <p>Let's start to exchange the rate conversion</p>
        </div>
    </section>

    <!-- Main -->
    
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">

                <!-- Form -->

                <form method="post" action="" enctype='multipart/form-data'>
                    <div class="col-6 col-12-xsmall">
                        <h3>Let's start</h3>
                        <div class="placeholder" data-placeholder="United States dollar (USD)">
                        <input type="text" name="usd" id="usd" value="" onfocus="SetChange(this);"/>
                        <div>
                    </div>
                    <br>
                        <div class="col-6 col-12-xsmall">
                        
                        <div class="placeholder" data-placeholder="Euro (EUR)">
                        <input type="text" name="eur" id="eur" value="" onfocus="SetChange(this);"/>
                        <div>
                    </div>
                    <br>
                        <div class="col-6 col-12-xsmall">
                        
                        <div class="placeholder" data-placeholder="Japanese yen (JPY)">
                        <input type="text" name="jpy" id="jpy" value="" onfocus="SetChange(this);"/>
                        <div>
                    </div>
                    <br>
                        <div class="col-6 col-12-xsmall">
                        
                        <div class="placeholder" data-placeholder="Hong Kong dollar (HKD)">
                        <input type="text" name="hkd" id="hkd" value=""  onfocus="SetChange(this);"/>
                        <div>
                    </div>
                    <br>
                        <div class="col-6 col-12-xsmall">
                        
                        <div class="placeholder" data-placeholder="Chinese Yuan (CNY)">
                        <input type="text" name="cny" id="cny" value="" onfocus="SetChange(this);" />
                        <div>
                    </div>
                    <br>
                        <ul class="actions">
                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="primary" id='Count' onclick="count()">Count according to USD</button>
                        <li><input type="reset" value="Reset" /></li>
                        <li><input type="button" value="Generate QRcode to share" onclick="share()"/></li>
                        <li><input type="button" value="Scan QRcode " onclick="window.location.href='scanning.php'"/></li>
                    </ul>
                </form>
            </div>
        </div>
        
<script type="text/javascript" src="qrcodeJS/jquery.min.js"></script>
<script type="text/javascript" src="qrcodeJS/qrcode.js"></script>
                           
<div id="qrcode" style="width:300; height:0; margin-top:15px;" oncontextmenu="return false" onselectstart="return false" ondragstart="return false"></div>




<script type="text/javascript">
var QrcodeColor= "#FFFFFF";
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
	var QrcodeColor= "#35363A";
};
			
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 300,
        height: 300,
    	colorDark : "#E2212F",
    	colorLight : QrcodeColor,
    
    });


    

    $("#text").
    on("blur", function() {
        makeCode();
    }).
    on("keydown", function(e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });

</script>
                      
<script>


var Main = "usd";
var AllCurrency = ["usd","eur","jpy","hkd","cny"];

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
	//alert(passedObject.id);
	Main = passedObject.id;
	var res = Main.toUpperCase();
	document.getElementById('Count').innerText = "Count according to "+res;

	
}
function count(){
	var getData = document.getElementById(Main).value;
	var FilteredValue = AllCurrency.filter(function(e) { return e !== Main })
	
	
	try {
	    eval(getData); 
	} catch (e) {
	    if (e instanceof SyntaxError) {
		alert(e.message);
	    }
	}
	
	var url = "storeData/count.php?coin="+ Main +"&value="+ eval(getData).toFixed(5) +"&other="+FilteredValue.join('');
	
	document.getElementById(Main).value = eval(getData).toFixed(5);
	fetch(url)
	.then(res => {
	    return res.json();
	}).then(result => {
            FilteredValue.forEach(ReturnData => document.getElementById(ReturnData).value = result[ReturnData] );
	});
	
}

function share(){
<?php
$pageURL = (@$_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']; 
echo "DefalultLink = '".$pageURL."';";
?>
if (document.getElementById(Main).value == ''){

qrcode.makeCode(DefalultLink);
document.getElementById("qrcode").style.height = "300px"; 
//window.prompt('You can copy this link',DefalultLink);
}else{
qrcode.makeCode(DefalultLink+"?coin="+Main+"&value="+document.getElementById(Main).value);
document.getElementById("qrcode").style.height = "300px"; 
//window.prompt('You can copy this link',);
}

}

<?php
$CoinList = array("usd","eur","jpy","hkd","cny");
$coin = $_GET["coin"];
$value = $_GET["value"];
if (in_array($coin,$CoinList) and is_numeric($value)){
	echo "document.getElementById('".$coin."').value = ".$value.";";
	echo 'var Main = "'.$coin.'";';
	echo 'count();';
	echo "document.getElementById('Count').innerText = 'Count according to ".strtoupper($coin)."';";
}

?>

</script>




    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
