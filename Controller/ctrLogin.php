<?php 
		require "../Config/config.php";
		require "../Library/database.php";
		require "../Model/model-usuario.php";
		include "../View/login.php";

	

		if (isset($_POST['action'])) {
				$id_usuario=$_POST['user'];
				$password=$_POST['pass'];

				$modelUser = new ModelUsuario();
				$modelUser->__SET($id_usuario,"id_usuario");
				$modelUser->__SET($password,"password");
				//$modelUser->login($id_usuario,$password);
				 foreach($modelUser->login($id_usuario,$password) as $value){
            	$user = $value["id_usuario"];
            	$pass = $value["password"];
            	$rol = $value["rol"];

            }
            session_start();
            $_SESSION["usuario"]=$user;
            $_SESSION["contraseña"]=$pass;
            $_SESSION["rol"]=$rol;
            if ($rol ==1) {
            	header("location: ctrIndex.php");
            }elseif ($rol ==2) {
            	header("location: ctrRecetas.php");
            }

		}
 ?>