<?php 

	class ModelClasificacion{

		private $id_categoria;
		private $nombre_categoria;
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
			$sql ='INSERT INTO tbl_categorias_recetas (id_categoria,nombre_categoria,descripcion) VALUES (:id_categoria,:nombre_categoria,:descripcion)';
			
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_categoria' => $this->__GET("id_categoria"),
					':nombre_categoria'=> $this->__GET("nombre_categoria"), 
					':descripcion'=>  $this->__GET("descripcion")));
		return $sth;
		}

	
	public function read(){
		$sql = 'SELECT id_categoria, nombre_categoria, descripcion FROM tbl_categorias_recetas';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();	
	}
		public function find(){
		$sql = 'SELECT id_categoria, nombre_categoria, descripcion FROM tbl_categorias_recetas WHERE id_categoria = :id_categoria';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':id_categoria' =>  $this->__GET("id_categoria")));
		return $sth->fetchAll();
	}

	public function delete(){
			$sql ='DELETE FROM tbl_categorias_recetas WHERE id_categoria = :id_categoria';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_categoria' =>  $this->__GET("id_categoria")));
			return $sth;
	}

	public function update(){
	$sql = 'UPDATE tbl_categorias_recetas SET nombre_categoria= :nombre_categoria, descripcion= :descripcion WHERE id_categoria = :id_categoria';
	$sth = $this->db->prepare($sql);
	$sth->execute(array(':id_categoria' => $this->__GET("id_categoria"),
					':nombre_categoria'=> $this->__GET("nombre_categoria"), 
					':descripcion'=>  $this->__GET("descripcion")));
		return $sth;
	}

}

	

 ?>