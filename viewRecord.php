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
    <title>ExchangeRate.com | View Record</title>
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
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com - View Record</a>
        <nav>
            <a href="index_Login.php">&#9664;&nbsp;&nbsp;Back</a>
        </nav>
    </header>


    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>ExchangeRate.com</h1>
            <p>View Record</p>
        </div>
    </section>

    <!-- Main -->
    
    <section id="main" class="wrapper">
        <div class="inner">
        	
            <div class="content">
            <ul class="actions">
            <li><button type="button" class="primary" id='Count' onclick="loadXMLDoc()">Refresh</button></li>
            <li><button type="button" id='remove' onclick="removeAll()">Cancel all record</button></li>
            </ul>
		 <table id="demoTable">
		<thead>
		<tr>
		<td ><label>Value</label></td>
		<td ><label>Currency</label></td>
		<td ><label>Time</label></td>
		</tr>
		</thead> 
		<tbody>
		</tbody>
		<tfoot>
		<td ><label>Only show the least 20 record</label></td>
		<td ><label></label></td>
		<td ><label id="total"></label></td>
		</tfoot>
		<table>
            </div>
        </div>
    </section>


<script>
<?php
$url = "storeData/conutry.json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "ConutryList = ".json_encode($json_data).";";
?>

function timeConverter(UNIX_timestamp){
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
  return time;
}

function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    $("tbody").children().remove();

      JSON.parse(this.responseText).forEach(element => $("table tbody").append("<tr><td>"+element[0]+"</td><td>"+ConutryList[element[1]]+" ("+element[1].toUpperCase()+")</td><td>"+timeConverter(element[2])+"</td></tr>"));
    }
  };
  xhttp.open("GET", "storeData/GetRecord.php", true);
  xhttp.send();
}
loadXMLDoc();

function removeAll() {
fetch('storeData/removeAllRecord.php');
loadXMLDoc();
}

</script>




    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
