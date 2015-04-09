<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-clasificacion.php";


	     session_start();
	if ($_SESSION["rol"]!=1) {
		header("location: ctrLogin.php");
	}

		if (isset($_POST['cerrar'])) {
		session_start();
		session_destroy();
		header('location: ctrLogin.php');
	}


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
		    header("location: ctrClasificaciones.php");
		}elseif ($_POST['id_categoria']=$id_categoria) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
    }

    $tabla="";
    $id_categoria="";
    $nombre_categoria="";
    $descripcion="";

    $modClasificacion = new ModelClasificacion();
    foreach($modClasificacion->read() as $value){
    $tabla .= sprintf("<tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                        </tr>",
                    $value["id_categoria"],
                    $value["nombre_categoria"],
                    $value["descripcion"],
                    "<a href='ctrClasificaciones.php?id_categoria=".$value["id_categoria"]."'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o ' ></i></button></a>",
                    "<a href='ctrClasificaciones.php?id_categoriam=".$value["id_categoria"]."'><button class='btn btn btn-info btn-xs'><i class='fa fa-pencil-square-o ' ></i></button></a>"
                    );
        }

    function update()
{
    $id_categoria=$_POST['id_categoria'];
    $nombre_categoria=$_POST['nombre_categoria'];
    $descripcion=$_POST['descripcion'];


    $modClasificacion = new ModelClasificacion();

    $modClasificacion->__SET($id_categoria,"id_categoria");
    $modClasificacion->__SET($nombre_categoria,"nombre_categoria");
    $modClasificacion->__SET($descripcion,"descripcion");


 if ($modClasificacion->update()) {
    $mensaje = "Modificacion satisfactoria";
    print "<script>alert('$mensaje')</script>";

}else{
     print "<script>alert('Error de conexion')</script>";
    }
}

    if (isset($_GET["id_categoria"])) {

    	$id_categoria=$_GET["id_categoria"];
    	$modClasificacion = new ModelClasificacion();
    	$modClasificacion->__SET($id_categoria,"id_categoria");
    	$modClasificacion->delete();
    	header("location: ctrClasificaciones.php");
    }

            $btnedit="<input type='submit' name='action' value='Modificar' disabled='true'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' >";
	    if(isset($_GET["id_categoriam"])!=NULL){
            $btnedit="<input type='submit' name='action' value='Modificar'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' disabled='true'>";
            $id_categoria= $_GET["id_categoriam"];

            $modClasificacion = new ModelClasificacion();
            $modClasificacion->__SET("id_categoria", $id_categoria);
            foreach($modClasificacion->find() as $value){
            $nombre_categoria = $value["nombre_categoria"];
            $descripcion = $value["descripcion"];
            }
        }


   
	if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "registrar") {
    if (isset($_POST['id_categoria'])!=null && isset($_POST['nombre_categoria'])!=null && isset($_POST['descripcion'])!=null) {
            create();
        }else{
        	 $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }else if ($action == "Modificar") {
        if (isset($_POST['id_categoria'])!=null && isset($_POST['nombre_categoria'])!=null && isset($_POST['descripcion'])!=null) {
            update();
            $_GET["id_categoriam"]="";
        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
	}
}




	include "../View/clasificaciones.php";
 ?>