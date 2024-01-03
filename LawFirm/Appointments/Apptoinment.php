<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Appointment Form</title>
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
	<h1><u> Appointment Form</u> </h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="post">
			<div class="agile-field-txt">
						<input type="text" name="no" placeholder="Enter your meeting no " required="" />
			</div>
			<div class="agile-field-txt">
						<input type="text" name="name" placeholder="Enter your name " required="" />
			</div>
			<div class="agile-field-txt">
								<input type="text" name="phoneno" placeholder="Enter your phoneno " required="" />
			</div>
			<div class="agile-field-txt">
								<input type="text" name="gmail" placeholder="Enter your Email " required="" />
			</div>
			<div class="agile-field-txt">
              <input type="text" name="consult" placeholder="Enter your Consultation Areas " required="" />
      </div>
			<div class="agile-field-txt">
							<input type="text" name="date" placeholder="Enter your  Date" required="" />
			</div>
			<!-- script for show password -->
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
													</div>
									</div>
									</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
</body>
</html>
<?php
$con =mysqli_connect('localhost' , 'root', '', 'cilent');
if(isset($_POST['btn-login'])){
$mid=$_POST['no'];
$name=$_POST['name'];
$phoneno= $_POST['phoneno'];
$gmail = $_POST['gmail'];
$areas=$_POST['consult'];
$date=$_POST['date'];
$query="INSERT INTO `appointments`(`ID`, `Name`, `phoneno`, `Email`, `interest`, `Date`) VALUES ('$mid','$name','$phoneno','$gmail','$areas','$date') "  ;
  $result=mysqli_query($con,$query);
	if($result)
{
	//  header("location:home.html");
	echo' <script type="text/javascript">alert ("Appointment has been  Sucesfully fixed ")</script>';
	}
else{
	echo' <script type="text/javascript">alert ("failed to fix your appointments ")</script>';
}

}
 ?>
