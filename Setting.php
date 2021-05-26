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
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>ExchangeRate.com | View Record</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/darkMode.css" />
</head>
<style>
    input {
        text-align: right;

    }

    .placeholder {
        position: relative;
    }

    .placeholder::after {
        position: absolute;
        left: 20px;
        top: 11px;
        content: attr(data-placeholder);
        pointer-events: none;
        opacity: 0.9;
        font-size: 20px;
    }


    input,
    select,
    p,
    placeholder,
    button {
        font-size: 20px;
    }

    ul {
        margin: 0;
        padding: 0
    }

    li {
        border-radius: 25px;
        cursor: move;
        display: block;
        padding: 20px 10px;
        background: #E4E4E4;
        border-bottom: solid 1px gray;
        width: 100%;
    }

    @media (prefers-color-scheme: dark) {
        ul {
            margin: 0;
            padding: 0
        }

        li {

            cursor: move;
            display: block;
            padding: 20px 10px;
            background: #2D2F3A;
            border-bottom: solid 1px gray;
        }

    }

    .float-container {
        padding: 20px;
    }

    .float-child {
        width: 50%;
        float: left;
        padding: 20px;
    }

</style>
<?php
$url = "storeData/conutry.json";
$json = file_get_contents($url);
$conutry = json_decode($json, true);

$url = "storeData/availableCoin.json";
$json = file_get_contents($url);
$availableCoin = json_decode($json, true);
?>

<body>

    <!-- Header -->
    <header id="header">
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com - Setting</a>
        <nav>
            <a href="index_Login.php">&#9664;&nbsp;&nbsp;Back</a>
        </nav>
    </header>


    <!-- Banner -->
    <section id="main" class="wrapper">
        <div class="inner">

            <div class="content">
                <h1>Select your option</h1>
			<button onClick="applyOption()" class="primary">Apply & Exit</button>
                       <button onClick="window.location.reload();" >Reset</button>
                    
                <div class="float-container" style="height:650px;">
                    <div class="float-child">
                        <h3>Your option</h3>
                        <ul id="SelectOption">
<?php

$session_User_No = $_SESSION['User_No'];
$sql = "SELECT First,Second,Third,Fourth,Fifth,Sixth,Seventh FROM `User_setting` WHERE `User_No` =".$session_User_No.";";
$result = $conn->query($sql);

foreach ($result as $value) {
    $first = $value['First'];
    $Second = $value['Second'];
    $Third = $value['Third'];
    $Fourth = $value['Fourth'];
    $Fifth = $value['Fifth'];
    $Sixth = $value['Sixth'];
    $Seventh = $value['Seventh'];
    $info = array($first, $Second, $Third,$Fourth,$Fifth,$Sixth,$Seventh);
    echo "<li draggable='true' id='$first'>&nbsp;&nbsp;&nbsp;".$conutry[$first]." (".strtoupper($first).")</li>";
    echo "<li draggable='true' id='$Second'>&nbsp;&nbsp;&nbsp;".$conutry[$Second]." (".strtoupper($Second).")</li>";
    echo "<li draggable='true' id='$Third'>&nbsp;&nbsp;&nbsp;".$conutry[$Third]." (".strtoupper($Third).")</li>";
    echo "<li draggable='true' id='$Fourth'>&nbsp;&nbsp;&nbsp;".$conutry[$Fourth]." (".strtoupper($Fourth).")</li>";
    echo "<li draggable='true' id='$Fifth'>&nbsp;&nbsp;&nbsp;".$conutry[$Fifth]." (".strtoupper($Fifth).")</li>";
    echo "<li draggable='true' id='$Sixth'>&nbsp;&nbsp;&nbsp;".$conutry[$Sixth]." (".strtoupper($Sixth).")</li>";
    echo "<li draggable='true' id='$Seventh'>&nbsp;&nbsp;&nbsp;".$conutry[$Seventh]." (".strtoupper($Seventh).")</li>";

}

?>
                        </ul>
                        <p>You need to select 7 options, only read first 7 options</p>
                    </div>
                    <div class="float-child">
                        <h3>Currency you can select</h3>
                        <ul style="overflow-y: scroll; height:500px;">
                        <?php
                        foreach ($availableCoin as $arr) {
                        if (!in_array($arr, $info)) {
    				echo "<li draggable='true' id='$arr'>&nbsp;&nbsp;&nbsp;".$conutry[$arr]." (".strtoupper($arr).")</li>";
				}
			    
			}
                        ?>
    			
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <script>
var dragging = null;

document.addEventListener('dragstart', function(event) {
    var target = getLI( event.target );
    dragging = target;
    event.dataTransfer.setData('text/plain', null);
    event.dataTransfer.setDragImage(self.dragging,0,0);
});

document.addEventListener('dragover', function(event) {
    try {
        event.preventDefault();
    var target = getLI( event.target );
    var bounding = target.getBoundingClientRect();
    var offset = bounding.y + (bounding.height/2);
    if ( event.clientY - offset > 0 ) {

       	target.style['border-bottom'] = 'solid 4px blue';
        target.style['border-top'] = '';
    } else {
        target.style['border-top'] = 'solid 4px blue';
        target.style['border-bottom'] = '';
    }  
        } catch (error) {
            
        }

});

document.addEventListener('dragleave', function(event) {
    try {
        var target = getLI( event.target );
    target.style['border-bottom'] = '';
    target.style['border-top'] = '';   
    } catch (error) {
        
    }

});

document.addEventListener('drop', function(event) {
    try {
    event.preventDefault();
    var target = getLI( event.target );
    if ( target.style['border-bottom'] !== '' ) {
        target.style['border-bottom'] = '';
        target.parentNode.insertBefore(dragging, event.target.nextSibling);
    } else {
        target.style['border-top'] = '';
        target.parentNode.insertBefore(dragging, event.target);
    }
} catch (error) {
        
    }
});

function getLI( target ) {
    while ( target.nodeName.toLowerCase() != 'li' && target.nodeName.toLowerCase() != 'body' ) {
        target = target.parentNode;
    }
    if ( target.nodeName.toLowerCase() == 'body' ) {
        return false;
    } else {
        return target;
    }
};


function applyOption(){
	try {
	var resultList = [];
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[0].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[1].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[2].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[3].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[4].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[5].id);
	resultList.push(document.getElementById("SelectOption").getElementsByTagName("li")[6].id);
	fetch('phpFunction/applyChange.php?update='+resultList.join(""));
	setTimeout(window.location.assign("index_Login.php"), 500);
	}catch(err) {
		alert("You should select 7 option");
	}
	
}

</script>




    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
