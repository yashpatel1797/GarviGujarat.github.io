
<html>
<head>

<meta charset="UTF-8">
	<title>GARVI GUJRAT</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-second-bar.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	

	<link rel="stylesheet" href="fcss/demo.css">
	<link rel="stylesheet" href="fcss/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">
	</script>
<link rel="stylesheet" type="text/css" href="after-signup.css" media="screen" />
<title>Log-in</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


	<meta charset="UTF-8">
	<title>GARVI GUJRAT</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script type="text/javascript">
	</script>
<link rel="stylesheet" type="text/css" href="login.css" media="screen">
<link rel="stylesheet" type="text/css" href="create_user.css" media="screen">


</head>
<div class="sy">
	<header class="header-two-bars">

	<div class="header-first-bar">

		<div class="header-limiter">

			<h1><a href="#">garvi<span>gujarat</span></a></h1>

			<nav>
			<a href="#">home</a>	
				<a href="http://localhost/final/festival/festival.php" target="_blank" >festivals</a>&nbsp;	
				<a href="http://localhost/final/food/food.php" target="_blank">food</a>	&nbsp;
				
				<a href="http://localhost/final/games/games.php" target="_blank">games</a>&nbsp;	
				<a href="http://localhost/final/people/people.php" target="_blank">people</a>	&nbsp;
				<a href="http://localhost/final/fair/fair.php" target="_blank">fairs</a>	&nbsp;
				<a href="http://localhost/final/litrature/litrature.php" target="_blank">literature</a>&nbsp;	
				<a href="http://localhost/final/place/places.php" target="_blank">places</a>	&nbsp;
				<a href="http://localhost/final/singer/singer.php" target="_blank">Singer</a>	&nbsp;
				<a href="http://localhost/final/movie/movie.php" target="_blank" >movies</a>	&nbsp;
				
				<a href="http://localhost/final/contact.php" target="_blank">contact us</a>	&nbsp;
				<a href="http://localhost/final/about%20us/contact1.html" target="_blank" >about us</a>	&nbsp;&nbsp;
			<a></a><a></a><a></a><a></a><a></a>
				<a href="http://localhost/final/yash%20file/login.php" >Sign-in</a>	&nbsp;
				<a href="http://localhost/final/yash%20file/signup.php">Sign-up</a>

			</nav>

			
		</div>

	</div>

	

</header>
</div>

<body>
<?php
	if(isset($_GET["error"]))
	{
		echo "<br><br><center><b>Incorrect Username or Password</b></center>";
	}
?>
	
   <section class="container">
    <div class="login">
      <h1>Login </h1>
      <form method="post" name="reg_form" action="log.php">
        <p><input type="text" name="email" id="email" value="" placeholder="Email"></p>
        <p><input type="password" name="pwd" id="pwd" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">Keep me logged in
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login" class="but but1" onclick="javascript: return log()"></p>
      </form>
    </div>

    <div class="dis1">
    <p class="dis">(OR)</p>
    </div>

    <div style="padding-left:20px;" class="create_user">
    <form method="post" action="signup.php">
    <input type="submit" name="commit" value="Create a new account" class="create create1">
    </form>
  </section>

    <script>
function log(){
		var email = document.getElementById("email").value;
 		var pwd = document.getElementById("pwd").value;
		
		if(email==""){
 					alert("Please enter your E-mail Id");
 					document.getElementById("email").focus();
					document.getElementById("email").style.borderColor="red";
 					return false;
 				}
		if(pwd==""){
					alert("Please enter your Password");
					document.getElementById("pwd").focus();
					document.getElementById("pwd").style.borderColor="red";
 					return false;
		}	document.reg_form.submit();		
}

</script>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>garvi<span>gujarat</span></h3>

				<p class="footer-links">
							
						
								·
					<a href="#"> home</a>
					<br/>·
					<a href="http://localhost/final/about%20us/contact1.html">About us</a>
					<br/>	·
					<a href="http://localhost/final/contact.php">Contact us</a>
				</p>

				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><a href="https://www.google.co.in/maps/place/LDRP+Institute+of+Technology+and+Research/@23.2391995,72.6363981,17z/data=!3m1!4b1!4m5!3m4!1s0x395c2b933477ba9f:0xe440409e66bea08a!8m2!3d23.2391946!4d72.6385868" target="_blank"> gujarat</a></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="https://plus.google.com/+gujarattourism" target="_blank">support@gujarat_tourism.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the gujarat</span>
					<a href="https://en.wikipedia.org/wiki/Gujarat" style=" color: hotpink;" target="_blank" >click here </a>
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/gujtourism/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/GujaratTourism" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="https://www.youtube.com/user/tcglvideos" target="_blank"><i class="fa fa-youtube"></i></a>
					<a href="https://www.instagram.com/gujarattourism/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>