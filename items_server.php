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
    $inventory="";
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
	$inventory = $_POST['limit'];
	$supplier_code= $_POST['supplier_code'];
	$storedFile="img/.".basename($_FILES['file']["name"]);
     move_uploaded_file($_FILES["file"]["tmp_name"],$storedFile);

     $total=($start_quan-$end_quan);

     if ($total < $inventory){
     	$query = "INSERT INTO tbl_stocks (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan,inventory, supplier_code,limitt)
     VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$start_quan', '$end_quan','$total','$supplier_code','$inventory')";
	mysqli_query($db, $query);
	header('location: item-user.php');

	$query = "INSERT INTO tbl_items (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan,inventory, supplier_code,limitt)
     VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$start_quan', '$end_quan','$total','$supplier_code','$inventory')";
	mysqli_query($db, $query);
	header('location: item-user.php');
    }elseif ($total == $inventory) {
    		$query = "INSERT INTO tbl_items (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan,inventory, supplier_code,limitt)
     VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$start_quan', '$end_quan','$total','$supplier_code','$inventory')";
	mysqli_query($db, $query);
	header('location: item-user.php');

	mysqli_query($db,"DELETE FROM tbl_stocks WHERE id");
	header('location: item-user.php');
    }

    else{
    	  	$query = "INSERT INTO tbl_items (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan,inventory, supplier_code,limitt)
     VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$start_quan', '$end_quan','$total','$supplier_code','$inventory')";
	mysqli_query($db, $query);
	header('location: item-user.php');
    }


}

if (isset($_POST['update'])) {
	$photo="img/.".basename($_FILES['file']["name"]);
     move_uploaded_file($_FILES["file"]["tmp_name"],$photo);
    $product_code = $_POST['product_code'];
	$product_name = $_POST['product_name'];
	$product_color= $_POST['product_color'];
	$product_size = $_POST['product_size'];
    $product_price = $_POST['product_price'];
    $start_quan = $_POST['start_quan'];
	$end_quan = $_POST['end_quan'];
	$inventory=$_POST['limit'];
	$supplier_code= $_POST['supplier_code'];
	$id = ($_POST['id']);
	$add = ($_POST['add']);
	$deduct = ($_POST['deduct']);

	$total=($start_quan-$end_quan);

	$total1=($add+$start_quan);

	$total2=($deduct+$end_quan);

	$total3=($total1-$total2);

	mysqli_query($db, "UPDATE tbl_items
     SET photo='$photo',product_code='$product_code', product_name='$product_name', product_color='$product_color',
     product_size='$product_size', product_price='$product_price', start_quan='$total1', end_quan='$total2',inventory=$total3,
     supplier_code='$supplier_code' ,limitt='$inventory', adding='$add', deduct='$deduct' WHERE id = $id");
	header('location: item-user.php');

	if ($total3 < $inventory) {
		mysqli_query($db, "UPDATE tbl_items
     SET photo='$photo',product_code='$product_code', product_name='$product_name', product_color='$product_color',
     product_size='$product_size', product_price='$product_price', start_quan='$total1', end_quan='$total2',inventory=$total3,
     supplier_code='$supplier_code' ,limitt='$inventory', adding='$add', deduct='$deduct' WHERE id = $id");
	header('location: item-user.php');

	mysqli_query($db, "UPDATE tbl_stocks
     SET photo='$photo',product_code='$product_code', product_name='$product_name', product_color='$product_color',
     product_size='$product_size', product_price='$product_price', start_quan='$total1', end_quan='$total2',inventory=$total3,
     supplier_code='$supplier_code' ,limitt='$inventory', adding='$add', deduct='$deduct' WHERE id = $id");
	header('location: item-user.php');

			if ($total3 < $inventory) {
					 $query = "INSERT INTO tbl_stocks (photo, product_code, product_name, product_color, product_size, product_price,start_quan, end_quan,inventory, supplier_code,limitt)
	     				VALUES ('$storedFile','$product_code', '$product_name', '$product_color', '$product_size', '$product_price', '$total1', '$total2','$total3','$supplier_code','$inventory')";
						mysqli_query($db, $query);
						header('location: item-user.php');
			}
				elseif ($total3 > $inventory) {
						mysqli_query($db,"DELETE FROM tbl_stocks WHERE id");
						header('location: item-user.php');
			}elseif ($total3 == $inventory) {
				mysqli_query($db,"DELETE FROM tbl_stocks WHERE id");
						header('location: item-user.php');
			}
				else{
						mysqli_query($db, "UPDATE tbl_items
    					SET photo='$photo',product_code='$product_code', product_name='$product_name', product_color='$product_color',
     					product_size='$product_size', product_price='$product_price', start_quan='$total1', end_quan='$total2',inventory=$total3,
     					supplier_code='$supplier_code' ,limitt='$inventory', adding='$add', deduct='$deduct' WHERE id = $id");
						header('location: item-user.php');
	}
	

	}elseif ($total3 == $inventory) {
			mysqli_query($db,"DELETE FROM tbl_stocks WHERE id");
	header('location: item-user.php');
	}
	elseif ($total3 > $inventory) {
			mysqli_query($db,"DELETE FROM tbl_stocks WHERE id");
	header('location: item-user.php');
	}

}


 if (isset($_GET['del'])) {
 	$id = $_GET['del'];
 	mysqli_query($db,"DELETE FROM tbl_items WHERE id=$id");
	header('location: item-user.php');
 }

  if (isset($_GET['del'])) {
 	$id = $_GET['del'];
 	mysqli_query($db,"DELETE FROM tbl_stocks WHERE id=$id");
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

		$result2 = mysqli_query($db, "SELECT * FROM tbl_stocks");

	$result1 = mysqli_query($db, "SELECT * FROM info2");


	
?>

