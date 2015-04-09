<?php 

	class ModelTipoIngredientes{

		private $id_clase;
		private $nombre_clase;
		private $descripcion;
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
			$sql ='INSERT INTO tbl_clasificacion_ingredientes (id_clase,nombre_clase,descripcion) VALUES (:id_clase,:nombre_clase,:descripcion)';
			
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_clase' => $this->__GET("id_clase"),
					':nombre_clase'=> $this->__GET("nombre_clase"), 
					':descripcion'=>  $this->__GET("descripcion")));
		return $sth;
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