<?php
	ob_start();
	session_start();
	if(isset($_SESION["email"])){
		session_destroy();
		header('location: index.php');
	}
	else header('location:index.php');
?>