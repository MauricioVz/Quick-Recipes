<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-ingredientes.php";
	require "../Model/model-receta.php";

	session_start();
	if ($_SESSION["rol"]!=1) {
		header("location: ctrLogin.php");
	}

		if (isset($_POST['cerrar'])) {
		session_start();
		session_destroy();
		header('location: ctrLogin.php');
	}
			
	 		$recetas_de_usuario="";
	 		$NumeroRecetasUsuario="";
	 		$modRecetas = new ModelReceta();
	 		$usuario=$_SESSION["usuario"];
            $modRecetas->__SET($usuario,"usuario");
            foreach($modRecetas->NumeroRecetasUsuario() as $value){
            $NumeroRecetasUsuario .= sprintf("<p>%s</p>",
            $value["recetas_de_usuario"]);
}
			$numero_ingredientes="";
			$NumeroIngredientes="";
			$modIngrediente = new ModelIngredientes();
		    foreach($modIngrediente->NumeroDeIngredientes() as $value){
            $NumeroIngredientes .= sprintf("<p>%s</p>",
            $value["numero_ingredientes"]);
        }

        	$numero_recetas="";
			$NumeroRecetas="";

		    foreach($modRecetas->NumeroDeRecetas() as $value){
            $NumeroRecetas .= sprintf("<p>%s</p>",
            $value["numero_recetas"]);
        }

	include "../View/index.php";
	
 ?>