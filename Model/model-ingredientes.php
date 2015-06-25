<?php 

	class ModelIngredientes{

		private $id_ingrediente;
		private $nombre_ingrediente;
		private $foto;
		private $descripcion;
		private $clasificacion;
		private $numero_ingredientes;
	

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
			$sql ='INSERT INTO tbl_ingredientes (id_ingrediente,nombre_ingrediente,foto,descripcion,clasificacion) VALUES (:id_ingrediente,:nombre_ingrediente,:foto,:descripcion,:clasificacion)';
			
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_ingrediente' => $this->__GET("id_ingrediente"),
					':nombre_ingrediente'=> $this->__GET("nombre_ingrediente"),
					':foto'=> $this->__GET("foto"), 
					':descripcion'=>  $this->__GET("descripcion"),
					':clasificacion'=> $this->__GET("clasificacion")));
		return $sth;
		}

		public function NumeroDeIngredientes()
		{
			$sql = 'SELECT count(*) AS numero_ingredientes FROM tbl_ingredientes';
			$sth = $this->db->prepare($sql);
			$sth->execute();
			return $sth->fetchAll();
	    }

		public function read(){
			$sql = 'SELECT id_ingrediente, nombre_ingrediente, descripcion, clasificacion FROM tbl_ingredientes';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':numero_ingredientes' => $this->__GET("numero_ingredientes")));
			return $sth->fetchAll();	
		}
			public function find(){
			$sql = 'SELECT id_ingrediente, nombre_ingrediente,descripcion, clasificacion FROM tbl_ingredientes WHERE id_ingrediente = :id_ingrediente';
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_ingrediente' =>  $this->__GET("id_ingrediente")));
			return $sth->fetchAll();
		}

		public function delete(){
				$sql ='DELETE FROM tbl_ingredientes WHERE id_ingrediente = :id_ingrediente';
				$sth = $this->db->prepare($sql);
				$sth->execute(array(':id_ingrediente' =>  $this->__GET("id_ingrediente")));
				return $sth;
		}

		public function update(){
		$sql = 'UPDATE tbl_ingredientes SET nombre_ingrediente= :nombre_ingrediente, descripcion= :descripcion WHERE id_ingrediente = :id_ingredientes';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':id_ingrediente' => $this->__GET("id_ingrediente"),
						':nombre_ingrediente'=> $this->__GET("nombre_ingrediente"), 
						':descripcion'=>  $this->__GET("descripcion")));
			return $sth;
		}

}

	

 ?>