<?php 
	session_start();
	$id ="";
	$firstname = "";
	$lastname = "";
	$position = "";
	$password ="";
	$errors = array();
	

	//connect to database
	$db = mysqli_connect('localhost','root',"",'inventory');

	//if the registration button is clicked
	if (isset($_POST['register'])) {
		$id =($_POST['id']);
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$position = ($_POST['position']);
		$password =($_POST['id']);




		// if there are no errors, save user to database

		if (count($errors) === 0) {
			
			$sql ="INSERT INTO register (id, firstname, lastname, position, password)
					 VALUES ('$id', '$firstname', '$lastname','$position', '$password')";
			mysqli_query($db, $sql);


			
			$_SESSION['id'] = $id;
			$_SESSION['success'] = "You are now logged in";
			header('location: congrats2.php');
			
		}
	}

			if (isset($_POST['login'])) {
		
			$id =($_POST['username']);
			$password = ($_POST['password']);

		if (count($errors) === 0) {
			$query = "SELECT * FROM register WHERE id ='$id' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

			$_SESSION['username']=$_POST['username'];
			header('location: index-user.php'); //redirect to homepage 
			}
			else {
				array_push($errors, "The username and password are incorrect");
				
			}
		}
		}

			$results = mysqli_query($db, "SELECT * FROM register");
 ?>