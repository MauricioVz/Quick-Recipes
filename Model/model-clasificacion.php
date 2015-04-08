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
		$sql = 'SELECT id_usuario, primer_nombre, segundo_nombre,
		primer_apellido, segundo_apellido, email, password FROM tbl_usuarios';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();	
	}

	public function delete(){
			$sql ='DELETE FROM tbl_usuarios WHERE id_usuario = :id_usuario';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_usuario' =>  $this->__GET("id_usuario")));
			return $sth;
	}

}

	

 ?>