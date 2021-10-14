<?php
	
		$db = mysqli_connect('localhost','root',"",'inventory');

	if (isset($_POST['save'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$position = $_POST['position'];
	$u_type = $_POST['u_type'];


	mysqli_query($db, "UPDATE register SET id='$username', firstname='$firstname', lastname='$lastname',position='$position',u_type=$u_type 
		WHERE u_id = $id");
	header('location: profile.php');

	}



?>