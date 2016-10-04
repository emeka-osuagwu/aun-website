
<!doctype html>
<html class="no-js" lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>AUN | Application</title>
		<link rel="stylesheet" href="asset/css/foundation.css">
		<link rel="stylesheet" href="asset/css/app.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
		<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	</head>

	<body>

		<nav>
			<ul class="menu" style="" >
				<li>
					<a href="/">
						<img width="50px;" src="asset/image/logo.png">
					</a>
				</li>
			</ul>
		</nav>

		<header style="background-image: url('asset/image/bg2.png'); background-repeat: no-repeat;">
			<div class="row">
				<h1 class="info">
					University with <span>Best student</span> 
					<br>
					environment in <span>Nigeria</span>
				</h1>
			</div>
		</header>


		<section>
			<div class="row align-center form large-offset-3">
				<div class="column small-12 large-8">
					<div class="form-heading">
						<h1>kindly fill this form correctly</h1>
					</div>

					<form action="form.php" method="post">
					<div class="form-body">
						
						<div>
							<br><br><br>
							<div class="row">
								<div class="large-12 columns">
									<label>
										<input  type="text" name="name" placeholder="Full name" required />
									</label>
								</div>

								<div class="large-12 columns">
									<label>
										<input type="email" placeholder="Email" name="email" required>
									</label>
								</div>

								<div class="large-12 columns">
									<label>
										<input  type="tel" placeholder="Phone number" name="phone"  required />
									</label>
								</div>

								<div class="large-12 columns">
									<label>
										<input  type="text" placeholder="Secondary School /A-levels"   required name="credential" >
									</label>
								</div>

								<div class="large-12 columns">
									<label>
										<input  type="text" placeholder="Location of Residence *"   name="address" required />
									</label>
								</div>


								<div class="large-12 columns select-div">
									<label>
									Preferred AUN Admissions Events Location
										<select required name="location">
											<option value="">Select Location</option>
											<option value="lagos">Lagos</option>
											<option value="uyo">Uyo</option>
											<option value="yola">Yola</option>
											<option value="kaduna">Kaduna</option>
										</select>
									</label>
								</div>

								<div class="large-12 columns select-div">
									<label>
										how did you hear about AUN
										<select required name="reference">
											<option value="blog">Blog</option>
											<option value="social_media">Social Media</option>
											<option value="family_and_friends">Family and friends</option>
											<option value="open_day_event">Open day event</option>
											<option value="newspaper">Newspaper</option>
										</select>
									</label>
								</div>

							</div>
						</div>
					</div>
					<div class="form-heading">
						<button>
							submit
							<i style="margin-left: 20px;" class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</button>
					</div>
					</form>

				</div>
			</div>
		</section>

		<br><br><br><br>

		<footer>
			<div class="row">
			
				<div class="column small-12 large-4 hide-for-small-only">
					<img src="asset/image/logo.png">
				</div>

				<div class="column small-12 large-4 small-offset-4 show-for-small-only">
					<img src="asset/image/logo.png">
				</div>
				
				<div class="column small-12 large-4">
					<ul class="link-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Aun</a></li>
						<li><a href="#">academics</a></li>
						<li><a href="#">campus life</a></li>
						<li><a href="#">research</a></li>
						<li><a href="#">news</a></li>
						<li><a href="#">alunmi</a></li>
					</ul>
				</div>

				<div class="column small-12 large-4">
					<ul class="link-list">
						<li><a href="#">academic calender</a></li>
						<li><a href="#">open erm</a></li>
						<li><a href="#">aun mail</a></li>
						<li><a href="#">library</a></li>
						<li><a href="#">e-books</a></li>
						<li><a href="#">careers</a></li>
						<li><a href="#">canvas</a></li>
						<li><a href="#">cmms</a></li>
					</ul>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>

		<script>
			$(document).foundation();
		</script>
		<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
	</body>
</html>

<?php

 	$servername = "localhost";
 	$username = "database-username-here";
 	$password = "your-password-here";
 	
 	$db_name = "database-name-here";

	 try {
	     
	     $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
	     
	     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		     if (isset( $_REQUEST['name']) &&  $_REQUEST['name'] != '') 
		     {

		     	$name = $_REQUEST['name'];
		     	$email = $_REQUEST['email'];
		     	$phone = $_REQUEST['phone'];
		     	$credential = $_REQUEST['credential'];
		     	$location = $_REQUEST['location'];
		     	$reference = $_REQUEST['reference'];
		     	$address = $_REQUEST['address'];


				$sql = "INSERT INTO entries (name,email, phone, credential, location, reference, address)
				VALUES ('$name', '$email', '$phone', '$credential', '$location', '$reference', '$address')";
			  
			   	  $conn->exec($sql);
			     	echo '<script> swal("Awesome!", "Your entries has be received !", "success"); </script>';
		     }

	     }
	 catch(PDOException $e)
	     {
	     //echo $sql . "<br>" . $e->getMessage();
	     }

	 $conn = null;
 ?>