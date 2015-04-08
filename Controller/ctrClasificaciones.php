<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-clasificacion.php";
	include "../View/clasificaciones.php";

	function create(){

	$id_categoria=$_POST['id_categoria'];
    $nombre_categoria=$_POST['nombre_categoria'];
    $descripcion=$_POST['descripcion'];
   

    $modClasificacion = new ModelClasificacion();

     $modClasificacion->__SET($id_categoria,"id_categoria");
     $modClasificacion->__SET($nombre_categoria,"nombre_categoria");
     $modClasificacion->__SET($descripcion,"descripcion");
   
		 if ($modClasificacion->create()) {
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		    header("location: ctrLogin.php");
		}elseif ($_POST['id_usuario']=$id_usuario) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
	}

	 if (isset($_POST['id_categoria'])!=null && isset($_POST['nombre_categoria'])!=null && isset($_POST['descripcion'])!=null) {
            create();
        }else{
        	 $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
 ?>