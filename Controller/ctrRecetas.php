<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-receta.php";
	
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

	$id_receta="";
	$nombre_receta="";
	$nombre_categoria="";
	$descripcion="";
	$primer_nombre="";
	$recetas="";
	$ModReceta = new ModelReceta();

	foreach ($ModReceta->read() as $value) {
		$recetas .= sprintf("<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>  
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>  
                             </tr>",
                    $value["id_receta"],
                    $value["nombre_receta"],
                    $value["nombre_categoria"],
                    $value["descripcion"],
                    $value["primer_nombre"],
                    "<center><a href='ctrIngredienteDeReceta.php?id_receta=".$value["id_receta"]."''><i class='fa fa-eye'></i></a></center>");
	}

	include "../View/recetas.php";


 ?>