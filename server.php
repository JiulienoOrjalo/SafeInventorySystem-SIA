<?php 
	session_start();
	$id ="";
	$firstname = "";
	$lastname = "";
	$position = "";
	$password ="";
	$username ="";
	$edit_state = false;
	$errors = array();
	

	//connect to database
	$db = mysqli_connect('localhost','root',"",'inventory');

	//if the registration button is clicked
	if (isset($_POST['register'])) {
		$id =($_POST['id']);
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$position = ($_POST['position']);
		$u_type=($_POST['u_type']);
		

		$password= password_hash($_POST['id'], PASSWORD_DEFAULT);

	$check = "SELECT id FROM register WHERE id = '$id'";
	$result = mysqli_query($db, $check);
	$count = mysqli_num_rows($result);



	if ($count > 0)
	{
		echo '<script language="javascript">';
		echo 'alert("Username Already Exist!!")';
		echo '</script>';
		
	}
	else
	{


		$sql ="INSERT INTO register (id, firstname, lastname, position, password,u_type)
					 VALUES ('$id', '$firstname', '$lastname','$position', '$password','$u_type')";
			mysqli_query($db, $sql);



	echo '<script language="javascript">';
	echo 'alert("Registration Success!!")';
	echo '</script>';
	}

}



		// if (!ctype_alnum($id)) {
		// 	echo "<script>alert('Invalid Email'); location.href='users.php';</script>";
		
		// }
		// else
		// {
		// $sql ="INSERT INTO register (id, firstname, lastname, position, password,u_type)
		// VALUES ('$id', '$firstname', '$lastname','$position', '$password','$u_type')";
		// 	mysqli_query($db, $sql);

		// 	$_SESSION['id'] = $id;
		// 	$_SESSION['username']=$username;
		// 	$_SESSION['success'] = "You are now logged in";
		// 	header('location: users.php');
		// }

			
		// if there are no errors, save user to database

		// if (count($errors) == 0) {
				
		
		// 	$sql ="INSERT INTO register (id, firstname, lastname, position, password,u_type)
		// 			 VALUES ('$id', '$firstname', '$lastname','$position', '$password','$u_type')";
		// 	mysqli_query($db, $sql);

		// 	$_SESSION['id'] = $id;
		// 	$_SESSION['username']=$username;
		// 	$_SESSION['success'] = "You are now logged in";
		// 	header('location: users.php');
			
		// }
	

if(isset($_POST['login'])){



    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);


        $sql_query = "SELECT * FROM register WHERE id = '$username'";
        $result = mysqli_query($db,$sql_query);

   $row=mysqli_fetch_array($result);

                $passwordhashed = password_verify($password, $row['password']);
        if($passwordhashed){
                $_SESSION['id'] = $row['id'];
                $_SESSION['u_type'] = $row['u_type'];
                if($_SESSION['u_type'] == 'Admin'){
                 echo "<script>alert('Successfully logged in !');document.location='index.php'</script>";
                }
                if($_SESSION['u_type'] == 'User'){
                    echo "<script>alert('Successfully logged in!');document.location='index-user.php'</script>";
                }if($_SESSION['u_type'] == 'Super Admin'){
                    echo "<script>alert('Successfully logged in!');document.location='index_sd.php'</script>";
                }
                else{
                    echo "<script>alert('Incorrect username and password!');document.location='login.php'</script>";
                }
        }

        else{
            echo "<script>alert('Incorrect credentials!');document.location='login.php'</script>";
        }

                $_SESSION['id'] = $row['id'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['position'] = $row['position'];
                $_SESSION['u_type'] = $row['u_type'];
}

				if (isset($_GET['del'])) {
			 	$id = $_GET['del'];
			 	mysqli_query($db,"DELETE FROM register WHERE u_id=$id");
				header('location: users.php');
			 }

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$position = $_POST['position'];


	mysqli_query($db, "UPDATE register SET id='$id', firstname='$firstname', lastname='$lastname',position='$position' WHERE u_id = $id");
	header('location: users.php');
}



//LIIIIIIIIIIIIIIIIIIINEEE

           
			$result = mysqli_query($db, "SELECT * FROM register");
			


 ?>
