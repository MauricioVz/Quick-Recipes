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

	         if(isset($_GET["id_receta"])){
        $id_receta=$_GET["id_receta"];
       }
        $nombre_ingrediente="";
        $cantidad="";
        $abreviatura="";

        $ingredientes="";
        $modReceta =new ModelReceta();
         if (isset($id_receta)){
            $modReceta->__SET($id_receta,"id_receta");
        }
        foreach ($modReceta->ListarIngredienteXReceta() as $value) {
            $ingredientes.= sprintf("<tr>
                                        <td>%s</td>
                                        <td>%s</td>
                                        <td>%s</td>
 
                                    </tr>",
                    $value["nombre_ingrediente"],
                    $value["cantidad"],
                    $value["abreviatura"]);
        }
        $preparacion="";
        foreach ($modReceta->find() as $value) {
            $preparacion.= sprintf($value["preparacion"]);
        }
        echo var_dump($preparacion);
	include "../View/ingredientes_de_receta.php";


 ?>