<?php
	ob_start();
	session_start();
	ob_end_clean();

	if (isset($_SESSION['id'])) {
		$session_user = $_SESSION['id'];
	}else{
		ob_start();
		header('location: login.php');
		ob_clean_end();
	}
	session_destroy();
	header('location: login.php');

?>