<?php 
	require "../Config/config.php";
	require "../Library/database.php";
	require "../Model/model-clasificacion.php";
	require "../Model/model-receta.php";
    require "../Model/model-ingredientes.php";

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
            $_SESSION["id_receta"]=$id_receta;
		    $mensaje = "Registro satisfactorio";
		    print "<script>alert('$mensaje')</script>";
		    echo "Registro Exitoso";
		    header("location: ctrCrearReceta.php");
		}elseif ($_POST['id_receta']=$id_receta) {
		    print "<script>alert('Identificacion ya existe')</script>";

		}else{
		     print "<script>alert('Error de conexion')</script>";
		}
    }
        function AddIngrediente(){
            $id_receta=$_SESSION["id_receta"];
            $id_ingrediente=$_POST["id_ingredientes"];
            $cantidad=$_POST["cantidad"];
            $unidad_medida=$_POST["unidad_medida"];
            $modReceta = new ModelReceta();
            $modReceta->__SET($id_receta,"id_receta");
            $modReceta->__SET($id_ingrediente,"id_ingrediente");
            $modReceta->__SET($cantidad,"cantidad");
            $modReceta->__SET($unidad_medida,"unidad_medida");
            if ($modReceta->AgregarIngrediente()){
                echo "Agrego!!!";
                $mensaje="Registro Exitoso";
                 print "<script>alert('$mensaje')</script>";
            
            header("location: ctrCrearReceta.php");
            }else if ($_POST['id_receta']=$id_receta && $_POST["id_ingredientes"]=$id_ingrediente) {
            print "<script>alert('Identificacion ya existe')</script>";

        }else{
             print "<script>alert('Error de conexion')</script>";
             }
        }
//Listar Selects
	    $id_categoria="";
        $nombre_categoria="";
        $categoria="";
        $modClasificacion = new ModelClasificacion();
        foreach($modClasificacion->read() as $value){
            $categoria .= sprintf("<option value='%s'>%s</option>",
                $value["id_categoria"],
                $value["nombre_categoria"]);
        }

        $id_ingrediente="";
        $nombre_ingrediente="";
        $ingredientes="";
        $modIngrediente =new ModelIngredientes();
        foreach($modIngrediente->read() as $value){
            $ingredientes .=sprintf("<option value='%s'>%s</option>",
                $value["id_ingrediente"],
                $value["nombre_ingrediente"]);
        }

        $id_unidad_medida="";
        $nombre_unidad="";
        $unidades="";
        $modReceta =new ModelReceta();
        foreach($modReceta->LeerCantidades() as $value){
            $unidades .=sprintf("<option value='%s'>%s</option>",
                $value["id_unidad_medida"],
                $value["nombre_unidad"]);
        }
        
//Controlar Acciones
    if (isset($_POST["action"])) {
    $action = $_POST["action"];
    if ($action == "registrar") {
    if (isset($_POST['id_receta'])!=null && isset($_POST['nombre_receta'])!=null && isset($_POST['categoria'])!=null && isset($_POST['descripcion'])!=null && isset($_POST['preparacion'])!=null) {
            create();
        }else{

        	 $mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";
        }
    }else if ($action == "agregar") {
        if (isset($_SESSION['id_receta'])!=null && isset($_POST['id_ingredientes'])!=null) {
            AddIngrediente();
        }else{
            echo "receta: ".$_SESSION["id_receta"];
            echo "".$id_ingrediente;
            var_dump($_POST);
            
            /*$mensaje = "Llenar todos los campos por favor";
            print "<script>alert('$mensaje')</script>";*/
        }
	}
}

	include "../View/crear_receta.php";

 ?>