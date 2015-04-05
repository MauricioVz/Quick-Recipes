<?php 

	class ModelUsuario{

		private $id_usuario;
		private $primer_nombre;
		private $segundo_nombre;
		private $primer_apellido;
		private $segundo_apellido;
		private $email;
		private $contraseña;
		private $rol;
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
			$sql ='INSERT INTO tbl_usuarios (id_usuario,primer_nombre,segundo_nombre,primer_apellido,
			segundo_apellido,email,password,rol) VALUES (:id_usuario,:primer_nombre,
				:segundo_nombre,:primer_apellido,:segundo_apellido,:email,md5(:password),:rol)';
			
			$sth = $this->db->prepare($sql);
			$sth->execute(array(':id_usuario' => $this->__GET("id_usuario"),
					':primer_nombre'=> $this->__GET("primer_nombre"), 
					':segundo_nombre'=>  $this->__GET("segundo_nombre"),
					':primer_apellido'=> $this->__GET("primer_apellido"),
					':segundo_apellido'=> $this->__GET("segundo_apellido"),
					':email'=> $this->__GET("email"),
					':password'=> $this->__GET("password"),
					':rol'=> $this->__GET("rol")));
		return $sth;
		}

		public function login($id_usuario,$contraseña){
				if (!empty($id_usuario) && !empty($contraseña)) {
						$sql = 'SELECT * FROM tbl_usuarios WHERE id_usuario = :id_usuario and password = md5(:password)';
						$sth = $this->db->prepare($sql);
						$sth->execute(array(':id_usuario' =>  $this->__GET("id_usuario"),
							':password' => $this->__GET("password")));
							
						if ($sth->rowCount()==1) {
							return $sth->fetchAll();
							/*if ($usuario['rol']==1) {
								header("location: ../Controller/ctrIndex.php");	
							}else if ($usuario['rol']==2) {
								header("location: ../Controller/ctrRegistrarse.php");	
							}else{
								echo"ERROR";
							}*/
										
				}else{
					echo"Usuario o contraseña incorrecta";
				}
			
		}

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