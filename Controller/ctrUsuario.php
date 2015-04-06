<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-usuario.php";
	
	session_start();
	if ($_SESSION["rol"]!=1) {
		header("location: ctrLogin.php");
	}

		if (isset($_POST['cerrar'])) {
		session_start();
		session_destroy();
		header('location: ctrLogin.php');
	}

	$tabla="";
	$id_usuario="";
	$primer_nombre="";

	$primer_apellido="";
	$segundo_apellido="";
	$email="";
	$password="";

    $modelUser= new modelUsuario();
    foreach($modelUser->read() as $value){
    $tabla .= sprintf("<tr>
    						<td>%s</td>
	    					<td>%s</td>

	    					<td>%s</td>
	    					<td>%s</td>
	    					<td>%s</td>
	    					<td>%s</td>
	    					<td>%s</td>
	    				</tr>",
                    $value["id_usuario"],
                    $value["primer_nombre"],
                    
                    $value["primer_apellido"],
                    $value["segundo_apellido"],
                    $value["email"],
                    $value["password"],
                    "<a href='ctrUsuario.php?id_usuario=".$value["id_usuario"]."'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o ' ></i></button></a>"
                    );
}

	if(isset($_GET["id_usuario"])!=NULL){
          
			$id_usuario=$_GET["id_usuario"];
            $modelUser = new modelUsuario();
            $modelUser->__SET($id_usuario,"id_usuario");
          	$modelUser->delete();
          	header("location: ctrUsuario.php");
          	
           
        }

	include "../View/usuario.php";

 ?>