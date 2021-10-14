<?php
	
	session_start();

	
	 $u_id = "";
	 $firstname = "";
	 $lastname = "";
	 $position= "";
	$id = 0;
	$edit_state = false;



	//connect

$db = mysqli_connect('localhost','root','','inventory');


// if save button is clicked
if (isset($_POST['save'])) {
	$supplier = $_POST['supplier'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];


	$query = "INSERT INTO info2 (supplier, company, email, address, mobile) VALUES ('$supplier', '$company', '$email', '$address', '$mobile')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Address saved";
	header('location: users.php');
}


if (isset($_POST['update'])) {
	$supplier = $_POST['supplier'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$mobile = $_POST['mobile'];
	$id = ($_POST['id']);


	mysqli_query($db, "UPDATE info2 SET supplier='$supplier', company='$company', email='$email',address='$address', mobile='$mobile' WHERE id = $id");
	header('location: supplier.php');
}
 if (isset($_GET['del'])) {
 	$id = $_GET['del'];
 	mysqli_query($db,"DELETE FROM info2 WHERE id=$id");
	header('location: users.php');
 }
 if (isset($_POST['login'])) {
			$id =($_POST['username']);
			$password = ($_POST['password']);

		if (count($errors) === 0) {
			$query = "SELECT * FROM register WHERE id ='$id' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {

			$_SESSION['username']=$_POST['username'];
			header('location: index.php'); //redirect to homepage 
			}
			else {
				array_push($errors, "The username and password are incorrect");
				
			}
		}
		}



//retrieve record
	$results = mysqli_query($db, "SELECT * FROM info2");

?>

