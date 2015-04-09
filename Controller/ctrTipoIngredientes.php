<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-tipo-ingredientes.php";


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

	$id_clase=$_POST['id_clase'];
    $nombre_clase=$_POST['nombre_clase'];
    $descripcion=$_POST['descripcion'];
   

    $modTipoIngrediente = new ModelTipoIngredientes();

     $modTipoIngrediente->__SET($id_clase,"id_clase");
     $modTipoIngrediente->__SET($nombre_clase,"nombre_clase");
     $modTipoIngrediente->__SET($descripcion,"descripcion");


     		 if ($modTipoIngrediente->create()) {
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		    header("location: ctrTipoIngredientes.php");
		}elseif ($_POST['id_categoria']=$id_categoria) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
    }

    $tabla="";
    $id_clase="";
    $nombre_clase="";
    $descripcion="";

    $modTipoIngrediente = new ModelTipoIngredientes();
    foreach($modTipoIngrediente->read() as $value){
    $tabla .= sprintf("<tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                        </tr>",
                    $value["id_clase"],
                    $value["nombre_clase"],
                    $value["descripcion"],
                    "<a href='ctrTipoIngredientes.php?id_clase=".$value["id_clase"]."'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o ' ></i></button></a>",
                    "<a href='ctrTipoIngredientes.php?id_clasem=".$value["id_clase"]."'><button class='btn btn btn-info btn-xs'><i class='fa fa-pencil-square-o ' ></i></button></a>"
                    );
        }

    function update()
{
    $id_clase=$_POST['id_clase'];
    $nombre_clase=$_POST['nombre_clase'];
    $descripcion=$_POST['descripcion'];


    $modTipoIngrediente = new ModelTipoIngredientes();

     $modTipoIngrediente->__SET($id_clase,"id_clase");
     $modTipoIngrediente->__SET($nombre_clase,"nombre_clase");
     $modTipoIngrediente->__SET($descripcion,"descripcion");


 if ($modTipoIngrediente->update()) {
    $mensaje = "Modificacion satisfactoria";
    print "<script>alert('$mensaje')</script>";

}else{
     print "<script>alert('Error de conexion')</script>";
    }
}

    if (isset($_GET["id_clase"])) {

    	$id_clase=$_GET["id_clase"];
    	$modTipoIngrediente = new ModelTipoIngredientes();
    	$modTipoIngrediente->__SET($id_clase,"id_clase");
    	$modTipoIngrediente->delete();
    	header("location: ctrTipoIngredientes.php");
    }

            $btnedit="<input type='submit' name='action' value='Modificar' disabled='true'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' >";
	    if(isset($_GET["id_clasem"])!=NULL){
            $btnedit="<input type='submit' name='action' value='Modificar'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' disabled='true'>";
            $id_clase= $_GET["id_clasem"];

            $modTipoIngrediente = new ModelTipoIngredientes();
            $modTipoIngrediente->__SET("id_clase", $id_clase);
            foreach($modTipoIngrediente->find() as $value){
            $nombre_clase = $value["nombre_clase"];
            $descripcion = $value["descripcion"];
            }
        }


   
	if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "registrar") {
    if (isset($_POST['id_clase'])!=null && isset($_POST['nombre_clase'])!=null && isset($_POST['descripcion'])!=null) {
            create();
        }else{
        	 $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }else if ($action == "Modificar") {
        if (isset($_POST['id_clase'])!=null && isset($_POST['nombre_clase'])!=null && isset($_POST['descripcion'])!=null) {
            update();

        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
	}
}






	include "../View/tipo_ingredientes.php";

 ?>