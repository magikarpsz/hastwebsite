<?php

			$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

			$server = $url["host"];
			$username = $url["user"];
			$password = $url["pass"];
			$db = substr($url["path"], 1);

			$conn = new mysqli($server, $username, $password, $db);

			if ($conn->connect_error) {
		    	die("Connection failed: " . $conn->connect_error);
			}

			if (isset($_POST["submit"]){
				$name = $_POST['name'];
				$email = $_POST['email'];

				$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
				if($conn->query($sql) === TRUE){
					echo "Success";
				}
				else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			
			$conn->close();
		
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hast App</title>
	<meta name="description" content="Hast App">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assets/vender/intl-tel-input/css/intlTelInput.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" ></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
	<script>
		function show(shown, hidden) {
		  document.getElementById(shown).style.display='block';
		  document.getElementById(hidden).style.display='none';
		  return false;
		}
	</script>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="color:red">Hast</a>
			</div> <!-- Navbar header -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
			<a href="" class="btn btn-info navbar-btn navbar-right">Download</a>
				<ul class="nav navbar-nav">
					<li><a href="#features" style="color:red">Features</a></li>
					<li><a href="#about" style="color:red">About Us</a></li>
					<li><a href="#signup" style="color:red">Sign Up</a></li>
				</ul>
			</div>
		</div><!--	End container -->
	</nav> <!-- End navbar -->

	<!-- Jumbotron -->
	<div class="jumbotron" style="background-color:brown">
			<div class="container text-center">
				<h1 style="color:white">HEALTH. SUPPORT. YOUR FAMILY</h1>
				<p style="color:white">Hast, the easiest way to connect and view the health of your family every day.</p>
				<div class="btn-group">
					<a href="" class="btn btn-lg btn-info">Download App</a>
					<a href="#signup" class="btn btn-lg btn-default">Sign Up</a>
				</div>
			</div> <!-- End container-->
	</div> <!-- End Jumbotron -->


	<div class="container">
		<section>
			<div class="page-header text-center" style="color:#CD5555">
				<h2><em>What</em> is HAST?</h2>
			</div>
				<p class="text-center">Hast is a unique platform for iOS that enables families to connect even when they are not physically together. By using the power of wearable devices, we have created an automated system for viewing the health and wellness of each of your family members. Hast has one goal: to connect and provide families a peace of mind of knowing that their loved ones are safe. Join us in creating a safer tomorrow. Stay connected, with Hast.</p>
		</section>
	</div>

	<!-- Features -->
	<div class="container">
		<section>

		<div class="page-header" id="features">
			<h2>Features</h2>
		</div> <!-- End of page header-->

		<div class="row">
			<div class="col-sm-3 col-sm-offset-1">
				<img src="login.jpg" class="img-responsive" alt="image" width="80%">
			</div>

			<div class="col-sm-3 col-sm-offset-1">
				<img src="registerfam.jpg" class="img-responsive" alt="image" width="80%">
			</div>

			<div class="col-sm-3 col-sm-offset-1" style="display: block">
				<img src="successreg.jpg" class="img-responsive" alt="image" width="80%">
			</div>
		</div><!-- End of row -->

		<div class="row">
			<div class="col-sm-5 col-sm-offset-2" style="display:block">
				<img src="contact.jpg" class="img-responsive" alt="img" width="50%">
			</div>
			<div class="col-sm-5" style="display:block">
				<img src="summary.jpeg" class="img-responsive" alt="img" width="50%">
			</div>
		</div>
	</section>
	</div> <!-- End of features -->

	<!-- About Us -->
	<div class="container">
		<section>
			<div class="page-header" id="about">
				<h2>About Us</h2>
			</div>

			<div>
				<div class="row text-center">
					<div class="col-sm-4">
						<img src="blank.jpg" class="img-circle"/>
						<br></br>
						<p><strong>Ni Yao</strong><br>Chief Executive Officer</br></p>
					</div>

					<div class="col-sm-4">
						<img src="blank.jpg" class="img-circle"/>
						<br></br>
						<p><strong>Xue Bin Zhao</strong><br>Chief Technology Officer</br></p>
					</div>

					<div class="col-sm-4">
						<img src="blank.jpg" class="img-circle"/>
						<br></br>
						<p><strong>Bin Xu</strong><br>President</br></p>
					</div>
				</div>
				<br><br>
				<div class="row text-center">
					<div class="col-sm-6">
						<img src="blank.jpg" class="img-circle"/>
						<br></br>
						<p><strong>Benny Tan</strong><br>Technical Advisor</br></p>
					</div>

					<div class="col-sm-6">
						<img src="blank.jpg" class="img-circle"/>
						<br></br>
						<p><strong>Karla Parraga</strong><br>Outreach Specialist</br></p>
					</div>
				</div>
			</div>
		</section>
	</div> <!-- End About Us -->

	<!-- Sign up -->
	<div class="container">
		<section>
			<div class="page-header text-center" id="signup">
				<h3>Sign up for more updates!</h3>
				<p>Enter your name and email.</p>

				<form action="" class="form-inline centered" id="form" role="form" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
					</div>

					<input type="submit" value="Sign up" class="btn btn-danger" id="submit" name="submit">
				</form>

				<div class="" id="submitform" style="display:none">
					<p>Thank you for signing up with us!</p>
				</div>

			</div>
		</section>
	</div>
	<!-- Sign Up -->
	

	<!-- Footer -->
	<footer>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-text pull-left">
					<p>&copy; HastApp 2014-2015</p>
				</div>	
				<div class="navbar-text pull-right heroku-footer-links">
					<a class="heroku-footer-icon-facebook" href="https://www.facebook.com/pages/HAST-Lab/1816766945216043?fref=ts" target="_blank">Facebook</a>
					<a class="heroku-footer-icon-twitter" href="https://twitter.com/HASTLab" target="_blank">Twitter</a>
					<a class="heroku-footer-icon-instagram" href="#"><i class="fa fa-instagram fa-2x"></i>Instagram</a>
					<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
					<!-- <i class="fa fa-facebook-square fa-2x"></i> 
						<i class="fa fa-twitter fa-2x"></i>-->

				</div>
			</div>
		</nav>
	</footer>
</body>

</html>

 