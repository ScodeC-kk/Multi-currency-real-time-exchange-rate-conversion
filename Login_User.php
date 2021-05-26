<?php
session_start();
if (strlen($_SESSION['User_No'])!=0){
	header('Location: index_Login.php');  
}

?>

<html>

<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>ExchangeRate.com - Sign Up</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/darkMode.css" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <a class="logo" href="javascript:window.location.reload(true)">ExchangeRate.com - Login</a>
        <nav>
            <a href="index.php">&#9664;&nbsp;&nbsp;Back</a>
        </nav>
    </header>


    <!-- Heading -->
    <div id="heading">
        <h1>Login</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">

                <!-- Form -->

                <form method="post" action="phpFunction/loginSubmit.php" enctype='multipart/form-data'>
                    <div class="col-6 col-12-xsmall">
                        <h3>Welcome back!</h3>
                        <input type="text" name="login_id" id="login_id" value="" placeholder="Login ID" />
                    </div>
                    <br>
                    <div class="col-6 col-12-xsmall">
                        <input type="password" name="password" id="password" value="" placeholder="Password" />
                    </div>
                    <br>
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    
                    <div class="g-recaptcha" id="g-recaptcha" data-sitekey=""></div>
                    <br>
                    <script>
                    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
			  const recaptcha = document.querySelector('.g-recaptcha');
			  recaptcha.setAttribute("data-theme", "dark");
			};
			</script>
			
                    <!-- Break -->
                    <script>
                        function showPassword() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }

                    </script>

                    <div class="col-6 col-12-small">
                        <input type="checkbox" id="checkbox-beta" name="checkbox" onclick="showPassword()">

                        <label for="checkbox-beta">Show password</label>
                    </div>

                    <ul class="actions">
                        <li><input type="submit" id="Login" name="Login" value="Login" class="primary" /></li>
                        
                        <li><input type="submit" id="Create" name="Create" value="Create an account" /></li>
		

                    </ul>
                </form>



            </div>
        </div>
    </section>
<?php
$_COOKIE['returnMSG'];
if (isset($_COOKIE['returnMSG'])){
echo "<script type='text/javascript'>alert('".$_COOKIE['returnMSG']."');</script>";
}

?>

</body>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</html>


