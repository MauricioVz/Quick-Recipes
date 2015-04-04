<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-usuario.php";

	
	function create(){

	$id_usuario=$_POST['id_usuario'];
    $primer_nombre=$_POST['primer_nombre'];
    $segundo_nombre=$_POST['segundo_nombre'];
    $primer_apellido=$_POST['primer_apellido'];
    $segundo_apellido=$_POST['segundo_apellido'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

    $modelUser = new ModelUsuario();

    $modelUser->__SET($id_usuario,"id_usuario");
    $modelUser->__SET($primer_nombre,"primer_nombre");
    $modelUser->__SET($segundo_nombre,"segundo_nombre");
    $modelUser->__SET($primer_apellido,"primer_apellido");
    $modelUser->__SET($segundo_apellido,"segundo_apellido");
    $modelUser->__SET($email,"email");
    $modelUser->__SET($password,"password");
    $modelUser->__SET($rol,"rol");

		 if ($modelUser->create()) {
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		}elseif ($_POST['id_usuario']=$id_usuario) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
	}

	if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "registrar") {
        if (isset($_POST['id_usuario'])!=null && isset($_POST['primer_nombre'])!=null && isset($_POST['segundo_nombre'])!=null) {
            create();
          

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
            
    }else if ($action == "Modificar") {
        if (isset($_POST['codigo'])!=null && isset($_POST['nombre'])!=null && isset($_POST['precio'])!=null) {
            update();
          
        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }
}

	include "../View/registrarse.php";
 ?>