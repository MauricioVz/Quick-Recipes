<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-clasificacion.php";
	require "../Model/model-receta.php";

	     session_start();
	if ($_SESSION["rol"]!=1 && $_SESSION["rol"]!=2) {
		header("location: ctrLogin.php");
	}

		if (isset($_POST['cerrar'])) {
		session_start();
		session_destroy();
		header('location: ctrLogin.php');
	}

		function create(){

	$id_receta=$_POST['id_receta'];
    $nombre_receta=$_POST['nombre_receta'];
    $categoria=$_POST['categoria'];
    $fec_registro=$_POST['fec_registro'];
    $descripcion=$_POST['descripcion'];
    $preparacion=$_POST['preparacion'];
    $usuario=$_SESSION["usuario"];

    $modReceta = new ModelReceta();

     $modReceta->__SET($id_receta,"id_receta");
     $modReceta->__SET($nombre_receta,"nombre_receta");
     $modReceta->__SET($categoria,"categoria");
     $modReceta->__SET($fec_registro,"fec_registro");
     $modReceta->__SET($descripcion,"descripcion");
     $modReceta->__SET($preparacion,"preparacion");   
     $modReceta->__SET($usuario,"usuario");

     		 if ($modReceta->create()) {
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		    header("location: ctrClasificaciones.php");
		}elseif ($_POST['id_receta']=$id_receta) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
    }

	    $id_categoria="";
        $nombre_categoria="";
        $categoria="";
        $modClasificacion = new ModelClasificacion();
        foreach($modClasificacion->read() as $value){
            $categoria .= sprintf("<option value='%s'>%s</option>",
                $value["id_categoria"],
                $value["nombre_categoria"]);
        }

	include "../View/crear_receta.php";

 ?>