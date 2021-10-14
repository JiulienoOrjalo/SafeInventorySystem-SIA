<?php include('server.php'); ?>

<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
.container{
			padding: 10px;	
		}
		#logo
		{
			width: 25%;
			height: 50%;
			margin-top:-16%;

		}
		.center {
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		  width: 50%;
		}
		#lbl{
			 display: block;
			 margin-left: 35%;
			  border-radius: 15px;
			  font-family: sans-serif; 	
			  font-size: 16.5px;
			  font-weight: bold; 
			  background-color: #5674b9;
			  border: none;
		}
		.form-control{
			 display: block;
			 width: 35%;
		}
		input[type=ID]{
			border-radius: 12px;
			width: 90%;
		}
		input[type=name]{
			border-radius: 12px;
			width: 90%;
		}
		input[type=password]{
			border-radius: 12px;
			width: 90%;
		}
		#grad {
			height: cover;
 			background: linear-gradient(rgb(163,194,224), rgb(57,48,111));
			margin-top: 8%;
			background-image: url('img/form.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
			opacity: 1;
		}
		h5{
			 color: white;
		}
		.form-group{
			margin-top: 5%;
			margin-left: 12%;
		}
		.jumbotron{
			background-color: rgba(0,0,0,0.1);
			border: 2px solid #f1f1f1;
			margin-left: 5%;
		}
		h3{
			text-align: center;
			color: paleturquoise;
		}



		


	</style>
</head>

<body id="grad">
	
<div class="container">
	<div class="lines">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
</div>

	<section class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-5 jumbotron" id="gilid"><div>
			<form method="post">
		
		
		<?php include('errors.php') ?>
			<div><h3>You have been successfully registered !</h3></div>
			<br>
			<section class="row">
				<div class="col-sm-9">	
			<a href="violet-users/login-user.php"><input type="button" name="but1" class="btn btn-primary" value="log in your account"></a>
			</div>
		

			
			<a href="users.php"><input type="button" name="but1" class="btn btn-success" value="back"></a>
				
			</section>
	</section>
				
			
</form>
</div>
</body>
</html>
		<?php
				
				$conn = mysqli_connect("localhost","root","","inventory");

					if (isset($_POST['login'])) 
					{
						$username=$_POST['username'];
						$password=$_POST['password'];

						
						$sql = mysqli_query($conn,"SELECT count(*) as total from register where id ='".$username."'and lastname ='".$password."'") or die(
							mysqli_error($conn));


						$rw = mysqli_fetch_array($sql);
					}
				

				?>