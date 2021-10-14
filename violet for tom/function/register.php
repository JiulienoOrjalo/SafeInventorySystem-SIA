<?php include('server.php'); ?>

<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		p{
			text-align: justify;

		}
		img{
			height: auto;
		}
		a{
			color: #1b2107;
		}
		
		
		label{
			
			color: white;
		}
		body{
			margin-top: 1%;
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0)),url('form.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			
		}
		.jumbotron{
			background-color: rgba(0,0,0,0.5);
			border: 2px solid #f1f1f1;
		}
		h2,h1{
			color: white;
		}
		p{
			color: white;
		
		}
		#sign{
			color: gray;
		}

		

	</style>
</head>

<body>
	<div class="container">
	<section class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6 jumbotron" id="gilid">
				<form method="post" action="register.php">

					< Display validation errors here 
					<?php include('errors.php') ?>



					<center><h2>REGISTRATION FORM</h2></center>
					<br>
					<div class="form-group">
						<label for="username">Username</label> 
						<input type="text" required="" name="username" class="form-control" placeholder="Username" maxlength="100">
					</div>
					<div class="form-group">
						<label for="username">Email</label> 
						<input type="text" required="" name="email" class="form-control" placeholder="Username" maxlength="100">
					</div>

					<div class="form-group">
						<label for="password">password</label>
						<input type="password" required="" name="password_1" class="form-control" placeholder="Password" maxlength="100">
					</div>
						<div class="form-group">
						<label for="password">Confirm password</label>
						<input type="password" required="" name="password_2" class="form-control" placeholder="Password" maxlength="100">
					</div>

					<div class="form-group">
						<input type="submit" name="register" class="btn btn-primary btn-block" value="Register" >
					</div>
						<div class="form-group">
						<p>Already a member?<a href="login.php" id="sign" >Sign in here</hp>
					</div>
				</form>
			</div>
	</section>
	</div>
</body>
</html>