<?php 

	class ModelReceta{

		private $id_receta;
		private $nombre_receta;
		private $categoria;
		private $fec_registro;
		private $descripcion;
		private $preparacion;
		private $usuario;
		private $id_unidad_medida;
		private $nombre_unidad;
		private $abreviatura;
		private $db;


		function __construct()
		{
			$this->db= Database::getInstance();
		}

		public function __GET($atributo){
			return $this->$atributo;
		}

		public function __SET($valor, $atributo){
			return $this->$atributo= $valor;
		}

		public function create(){
			$sql ='INSERT INTO tbl_recetas (id_receta,nombre_receta,categoria,fec_registro,descripcion,preparacion,usuario) 
			VALUES (:id_receta,:nombre_receta,:categoria,:fec_registro,:descripcion,:preparacion,:usuario)';
			
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_receta' => $this->__GET("id_receta"),
					':nombre_receta'=> $this->__GET("nombre_receta"), 
					':categoria'=> $this->__GET("categoria"),
					':fec_registro'=>$this->__GET("fec_registro"),
					':descripcion'=>  $this->__GET("descripcion"),
					':preparacion'=>$this->__GET("preparacion"),
					':usuario'=>$this->__GET("usuario")));
		return $sth;
		}

		public function AgregarIngrediente(){
			$sql ='INSERT INTO tbl_ingredientes_recetas (id_receta,id_ingrediente,cantidad,unidad_medida)
			VALUES(:id_receta,:id_ingrediente,:cantidad,:unidad_medida)';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_receta' => $this->__GET("id_receta"),
				':id_ingrediente'=> $this->__GET("id_ingrediente"),
				':cantidad'=> $this->__GET("cantidad"),
				':unidad_medida'=> $this->__GET("unidad_medida")));
		}
		public function LeerCantidades(){
			$sql ='SELECT id_unidad_medida, nombre_unidad,abreviatura FROM tbl_unidades_medidas';
			$sth = $this->db->prepare($sql);
			$sth->execute();
			return $sth->fetchAll();
		}

	
	public function read(){
		$sql = 'SELECT id_clase, nombre_clase, descripcion FROM tbl_clasificacion_ingredientes';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();	
	}
		public function find(){
		$sql = 'SELECT id_clase, nombre_clase, descripcion FROM tbl_clasificacion_ingredientes WHERE id_clase = :id_clase';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':id_clase' =>  $this->__GET("id_clase")));
		return $sth->fetchAll();
	}

	public function delete(){
			$sql ='DELETE FROM tbl_clasificacion_ingredientes WHERE id_clase = :id_clase';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_clase' =>  $this->__GET("id_clase")));
			return $sth;
	}

	public function update(){
	$sql = 'UPDATE tbl_clasificacion_ingredientes SET nombre_clase= :nombre_clase, descripcion= :descripcion WHERE id_clase = :id_clase';
	$sth = $this->db->prepare($sql);
	$sth->execute(array(':id_clase' => $this->__GET("id_clase"),
					':nombre_clase'=> $this->__GET("nombre_clase"), 
					':descripcion'=>  $this->__GET("descripcion")));
		return $sth;
	}

}

	

 ?>