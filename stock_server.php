<?php
	
	session_start();

	
    $product_code = "";
    $product_name = "";
    $product_color = "";
    $product_size = "";
    $product_price = "";
    $start_quan = "";
    $end_quan = "";
    $supplier_code = "";
	$id = 0;
	$edit_state = false;
	$storedFile = "";



	//connect

$db = mysqli_connect('localhost','root','','inventory');


// if save button is clicked
if (isset($_POST['save'])) {
	$product_code = $_POST['product_code'];
	$product_name = $_POST['product_name'];
	$product_color= $_POST['product_color'];
	$product_size = $_POST['product_size'];
    $product_price = $_POST['product_price'];
    $start_quan = $_POST['start_quan'];
	$end_quan = $_POST['end_quan'];
	$supplier_code= $_POST['supplier_code'];
	$storedFile="img/".basename($_FILES['file']["name"]);
     move_uploaded_file($_FILES["file"]["tmp_name"],$storedFile);


	$query = "INSERT INTO tbl_items (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan, supplier_code)
     VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$start_quan', '$end_quan', '$supplier_code')";
	mysqli_query($db, $query);
	
	header('location: item-user.php');
}


if (isset($_POST['update'])) {
    $product_code = $_POST['product_code'];
	$product_name = $_POST['product_name'];
	$product_color= $_POST['product_color'];
	$product_size = $_POST['product_size'];
    $product_price = $_POST['product_price'];
    $start_quan = $_POST['start_quan'];
	$end_quan = $_POST['end_quan'];
	$supplier_code= $_POST['supplier_code'];
	$id = ($_POST['id']);


	mysqli_query($db, "UPDATE tbl_items
     SET product_code='$product_code', product_name='$product_name', product_color='$product_color',
     product_size='$product_size', product_price='$product_price', start_quan='$start_quan', end_quan='$end_quan',
     supplier_code='$supplier_code' WHERE id = $id");
	header('location: item-user.php');
}
 if (isset($_GET['del'])) {
 	$id = $_GET['del'];
 	mysqli_query($db,"DELETE FROM tbl_items WHERE id=$id");
	header('location: item-user.php');
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



//retrieve record
	$results = mysqli_query($db, "SELECT * FROM tbl_items");



	$result1 = mysqli_query($db, "SELECT * FROM info2");
?>

