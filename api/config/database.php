<?php

	class Database{
	
		private $host = "localhost";
		private $db_name = "student";
		private $username = "student";
		private $password = "student";
		public $conn;
	
		// get the database connection
		public function getConnection(){
	
			$this->conn = null;
	
			try{
				$this->conn = new PDO("mysql:host=" . $this->host . ";charset=utf8;dbname=" . $this->db_name, $this->username, $this->password);
			}
			catch(PDOException $exception){
				echo "Connection error: " . $exception->getMessage();
			}
	
			return $this->conn;
		}
	}
?>