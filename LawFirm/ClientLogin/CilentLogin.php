<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login Form</title>
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
	<h1> Login Form </h1>
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
					<i class="fa fa-envelope" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
								</div>
		</div>
			<!-- script for show password -->
			<script>
			 function validate() {
       password = document.getElementById('myInput').value;   
        var lowerCaseLetters = /[a-z]/g;
        if (!password.match(lowerCaseLetters)) {
          alert("Enter One Small Character");
          validate = false
        } 
        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (!password.match(upperCaseLetters)) {
          alert("Enter atleast one Captial Letter");
          validate = false
        }

        specialChar = /[^A-Za-z0-9]/g
        if(!password.match(specialChar)){
          alert("Enter one special Character");
          validate = false
        }

        // Validate length
        if (password.length <= 6) {
          alert("Password should have length atleast 6");
          validate = false
        }

        if(validate){
          alert("Validation Succesfully");
        }
      }
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
					<input type="submit" value="LOGIN" name="btn-login">
					<br><a href="http://localhost/LawFirm/CilentRegistration/CilentRegistration.php#">Don't have an Account? SignUp</a></br>
									</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© 2020 Login Form. All Rights Reserved | Design  Law Firm
					</p>
	</div>
	<!--//copyright-->
</body>
</html>
<?php
$con =mysqli_connect('localhost' , 'root', '', 'cilent');

if(isset($_POST['btn-login'])){
	$Username = $_POST['name'];
	$Password = $_POST['password'];
$query="SELECT `UserName`,  `Password` FROM `registration` WHERE UserName='$Username' AND Password='$Password' "  ;
  $result=mysqli_query($con,$query);
	if($row = mysqli_fetch_assoc($result))
{
		echo'<script type="text/javascript">alert ("Login Sucessfully")</script>';
	header('location:http://localhost/LawFirm/Cilent/index.php');
	}
else{
	echo' <script type="text/javascript">alert ("Login Failed")</script>';
}
}

 ?>
