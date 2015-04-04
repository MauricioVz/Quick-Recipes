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
				$modelUser->login($id_usuario,$password);
		}
 ?>