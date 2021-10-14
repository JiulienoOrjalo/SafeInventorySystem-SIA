<?php 
	session_start();
	$username ="";
	$email = "";
	$errors = array();
	

	//connect to database
	$db = mysqli_connect('localhost','root',"",'registration');

	//if the registration button is clicked
	if (isset($_POST['register'])) {
		$username =($_POST['username']);
		$email = ($_POST['email']);
		$password_1 = ($_POST['password_1']);
		$password_2 = ($_POST['password_2']);


		//ensure that form frields are filled properly

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// if there are no errors, save user to database

		if (count($errors) == 0) {
			$password = ($password_1); //encrypt password before storing in database (security)
			$sql ="INSERT INTO users (username, email, password)
					 VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: congrats.php');
			
		}
	}

		if (isset($_POST['login'])) {
			$username =($_POST['username']);
			$password = ($_POST['password']);

		if (count($errors) == 0) {
			$password =($password);
			$query = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); //redirect to homepage 
			}
			else {
				array_push($errors, "The username and password are incorrect");
				
			}
		}
		}

 ?>