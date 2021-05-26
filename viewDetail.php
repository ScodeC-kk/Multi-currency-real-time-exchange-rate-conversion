<html>
<?php
include 'phpFunction/StartUp.php';
session_start();
if (strlen($_SESSION['User_No'])==0){
	header('Location: index.php');  
}
$User_No = $_SESSION['User_No'];

if (!isset($_GET['ViewCoin'])) {
    header('Location: index.php');  
}
if (!isset($_GET['other'])) {
    header('Location: index.php');  
}

$ViewCoin = $_GET['ViewCoin'];
$other = str_split($_GET['other'], 3);
$url = "storeData/conutry.json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

?>
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <title>ExchangeRate.com | View Detail</title>
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
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com - View Detail</a>
        <nav>
            <a href="index_Login.php">&#9664;&nbsp;&nbsp;Back</a>
        </nav>
    </header>


    <!-- Banner -->
    
    <section id="banner">
        <div class="inner">
            <h1>ExchangeRate.com</h1>
            <p>View Detail</p>
        </div>
    </section>

    <!-- Main -->
    <script>
    function returnMode(){
    	return "dark"
    }
    </script>
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/<?php echo strtoupper($ViewCoin).strtoupper($other[0]);?>/" rel="noopener" target="_blank"><span class="blue-text"><?php echo strtoupper($ViewCoin).strtoupper($other[0]);?> Rates</span></a> by TradingView</div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
		  {
		  "symbol": "<?php echo $ViewCoin.$other[0];?>",
		  "width": "100%",
		  "height": "500",
		  "locale": "en",
		  "dateRange": "12M",
		  "colorTheme": "light",
		  "trendLineColor": "rgba(219, 50, 50, 1)",
		  "underLineColor": "rgba(255, 0, 0, 0.18)",
		  "isTransparent": true,
		  "autosize": true,
		  "largeChartUrl": ""
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->

		 <table id="demoTable">
		<thead>
		<tr>
		<td style="text-align:left;"><label>Currency</label></td>
		<td style="text-align:right;"><label>Value</label></td>
		</tr>
		</thead> 
		<tbody>
		<?php
		foreach ($other as $value) {
			echo "<tr>";
			echo "<td  style='text-align:left;'>$json_data[$value] (".strtoupper($value).")</td>";
			echo "<td  style='text-align:right;'><p id='$value'>0</p></td>";
			echo "</tr>";
		}
		?>
		</tbody>
		<table>
            </div>
            <?php
             	    echo '<div class="col-6 col-12-xsmall">';
		    echo '<div class="placeholder" data-placeholder="'.$ViewCoin.' ('.strtoupper($ViewCoin).')">';
		    echo '<input type="text" name="'.$ViewCoin.'" id="'.$ViewCoin.'" value="" onkeyup="InputData()"/></input>';
		    echo '<div>';
		    echo '</div>';
		    echo '<br>';
		  ?>  
        </div>
    </section>


<script>
<?php
echo "var ListOfOther = ".json_encode($other).";";
?>

function InputData(){
	getInput = document.getElementById("<?php echo $ViewCoin ?>").value;
	getInput=eval(getInput);
	if (isNaN(parseFloat(getInput))){
	<?php
	foreach ($other as $value) {
    		echo 'changeIdValue("'.$value.'",parseFloat(0));';
	}
	?>
	}else{
	<?php
	foreach ($other as $value) {
    		echo 'changeIdValue("'.$value.'",parseFloat(getInput)*NowCurrencyValue["'.$value.'"]);';
	}
	?>

	}
	

	
	
}

<?php
echo "var ListOfOther = ".json_encode($other).";";
?>
//storeData/getCurrencyData.php?Currency=usd

function changeIdValue(Id,value) {
  document.getElementById(Id).innerHTML = value;
}

function getJSON(url) {
	var resp ;
	var xmlHttp ;

	resp  = '' ;
	xmlHttp = new XMLHttpRequest();

	if(xmlHttp != null)
	{
	    xmlHttp.open( "GET", url, false );
	    xmlHttp.send( null );
	    resp = xmlHttp.responseText;
	}

	return resp ;
}


var NowCurrency = "<?php echo $ViewCoin;?>";
var NowCurrencyValue = {};
function getJsonData(Country,backDay = 0 ){
	// 864e5 == 86400000 == 24*60*60*1000
	today = new Date(Date.now() - (backDay*864e5));
	date = today.getDate();
	month = today.getMonth()
	year = today.getFullYear();
	if (backDay == 0){
		url = "storeData/getCurrencyData.php?Currency="+Country;
	}else{
		url = "storeData/getCurrencyData.php?Currency="+year+"&Y="+Country+"&M="+month+"&D="+date;
	}
	return JSON.parse(getJSON(url))[Country];
}	

var NowCurrencyValue = getJsonData(NowCurrency);
console.log(NowCurrencyValue);

</script>




    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
