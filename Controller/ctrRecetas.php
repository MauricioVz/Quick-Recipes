<?php 
	
	session_start();
	if ($_SESSION["rol"]>0) {
		
	}else{
		header("location: ctrLogin.php");



	}


	if (isset($_POST['cerrar'])) {
		session_start();
		session_destroy();
		header('location: ctrLogin.php');
	}
	include "../View/recetas.php";


 ?>