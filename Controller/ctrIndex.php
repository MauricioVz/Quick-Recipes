<?php 

	session_start();
	if ($_SESSION["rol"]!=1) {
		header("location: ctrLogin.php");
	}


	include "../View/index.php";
	
 ?>