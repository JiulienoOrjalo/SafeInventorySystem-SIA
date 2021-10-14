<?php
	$id = $_GET['id'];


	   $conn = mysqli_connect('localhost','root','','inventory');
	   $query = mysqli_query($conn, "DELETE FROM info2 WHERE id ='$id'");


	   header('location: sweet.php?m=1');
?>