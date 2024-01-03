<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Cilent Registration Form</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1><u> Cilent Registration Form</u> </h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="post">
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Username </label>
				<input type="text" name="name" placeholder="Enter your name " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i>Email</label>
				<input type="text" name="gmail" placeholder="Enter your Email " required="" />
			</div>
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
								</div>
		</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //script ends here -->
			<div class="w3ls-bot">
			<!--	<div class="switch-agileits">
					<label class="switch">
						<input type="checkbox">
						<span class="slider round"></span>
						keep me signed in
					</label>
				</div>-->
				<div class="form-end">
					<input type="submit" value="Submit" name="btn-login">
					<br><a href="http://localhost/LawFirm/CilentLogin/CilentLogin.php"> Have an Account ? Login </a></br>
									</div>
									</div>
									</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2020  Login Form. All Rights Reserved | Design  Law Firm
					</p>
	</div>
	<!--//copyright-->
</body>
</html>
<?php
$con =mysqli_connect('localhost' , 'root', '', 'cilent');

if(isset($_POST['btn-login'])){
	$Username = $_POST['name'];
		$mail = $_POST['gmail'];
	$Password = $_POST['password'];
$query="INSERT INTO `registration`(`UserName`, `Email`, `Password`) VALUES('$Username','$mail','$Password') "  ;
  $result=mysqli_query($con,$query);
	if($result)
{
	//  header("location:home.html");
	echo' <script type="text/javascript">alert ("Account Created Sucesfully ")</script>';
		}
else{
	echo' <script type="text/javascript">alert ("Failed to Create Account")</script>';
}
}
 ?>
