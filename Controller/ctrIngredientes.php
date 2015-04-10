<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-ingredientes.php";


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

	$id_ingrediente=$_POST['id_ingrediente'];
    $nombre_ingrediente=$_POST['nombre_ingrediente'];
    $foto=$_POST['foto'];
    $descripcion=$_POST['descripcion'];
    $clasificacion=$_POST['clasificacion'];
   

    $modIngrediente = new ModelIngredientes();

     $modIngrediente->__SET($id_ingrediente,"id_ingrediente");
     $modIngrediente->__SET($nombre_ingrediente,"nombre_ingrediente");
     $modIngrediente->__SET($foto,"foto");
     $modIngrediente->__SET($descripcion,"descripcion");
     $modIngrediente->__SET($clasificacion,"clasificacion");


     		 if ($modIngrediente->create()) {
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		    header("location: ctrIngredientes.php");
		}elseif ($_POST['id_ingrediente']=$id_ingrediente) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
    }

    $tabla="";
    $id_ingrediente="";
    $nombre_ingrediente="";
    $descripcion="";
    $clasificacion="";
    $id_ingredientem="";

    $modIngrediente = new ModelIngredientes();
    foreach($modIngrediente->read() as $value){
    $tabla .= sprintf("<tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                        </tr>",
                    $value["id_ingrediente"],
                    $value["nombre_ingrediente"],
                    $value["descripcion"],
                    $value["clasificacion"],
                    "<a href='ctrIngredientes.php?id_ingrediente=".$value["id_ingrediente"]."'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o ' ></i></button></a>",
                    "<a href='ctrIngredientes.php?id_ingredientem=".$value["id_ingrediente"]."'><button class='btn btn btn-info btn-xs'><i class='fa fa-pencil-square-o ' ></i></button></a>"
                    );
        }

    function update()
{
    $id_ingrediente=$_POST['id_ingrediente'];
    $nombre_ingrediente=$_POST['nombre_ingrediente'];
    $descripcion=$_POST['descripcion'];
    $clasificacion=$_POST['clasificacion'];


    $modIngrediente = new ModelIngredientes();

    $modIngrediente->__SET($id_ingrediente,"id_ingrediente");
    $modIngrediente->__SET($nombre_ingrediente,"nombre_ingrediente");
    $modIngrediente->__SET($descripcion,"descripcion");
    $modIngrediente->__SET($clasificacion,"clasificacion");

 if ($modIngrediente->update()) {
    $mensaje = "Modificacion satisfactoria";
    print "<script>alert('$mensaje')</script>";
    header("location: ctrIngredientes.php");

}else{
     print "<script>alert('Error de conexion')</script>";
    }
}

    if (isset($_GET["id_ingrediente"])) {

    	$id_ingrediente=$_GET["id_ingrediente"];
    	$modIngrediente = new ModelIngredientes();
    	$modIngrediente->__SET($id_ingrediente,"id_ingrediente");
    	$modIngrediente->delete();
    	header("location: ctrIngredientes.php");
    }

            $btnedit="<input type='submit' name='action' value='Modificar' disabled='true'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' >";
	    if(isset($_GET["id_ingredientem"])!=NULL){
            $btnedit="<input type='submit' name='action' value='Modificar'>";
            $btnsave="<input type='submit' id='registra' name='action'  value='registrar' disabled='true'>";
            $id_ingrediente= $_GET["id_ingredientem"];

            $modIngrediente = new ModelIngredientes();
            $modIngrediente->__SET("id_ingrediente", $id_ingrediente);
            foreach($modIngrediente->find() as $value){
            $nombre_ingrediente = $value["nombre_ingrediente"];
            $descripcion = $value["descripcion"];
            $clasificacion = $value["clasificacion"];
            }
        }


   
	if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "registrar") {
    if (isset($_POST['id_ingrediente'])!=null && isset($_POST['nombre_ingrediente'])!=null && isset($_POST['descripcion'])!=null && isset($_POST['clasificacion'])!=null) {
            create();
        }else{
        	 $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }else if ($action == "Modificar") {
        if (isset($_POST['id_ingredientem'])!=null && isset($_POST['nombre_ingrediente'])!=null && isset($_POST['descripcion'])!=null && isset($_POST['clasificacion'])!=null) {
            update();
            $_GET["id_ingredientem"]="";
        }else{
            $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
	}
}




	include "../View/ingredientes.php";
 ?>