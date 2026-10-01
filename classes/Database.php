<?php

class Database
{
	private $dbName;
	private $dbUsername;
	private $dbHost;
	private $dbPassword;
	public $conn;


	public function __construct($name,$username,$host,$password){
		$this->dbName = $name;
		$this->dbUsername = $username;
		$this->dbHost = $host;
		$this->dbPassword = $password;

	}


	public function getConnection(){
		$this->conn = null;
		try {
			$dsn = "mysql:host=$this->dbHost;dbname=$this->dbName";
			$this->conn = new PDO($dsn,$this->dbUsername,$this->dbPassword);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $exception){
			die("Connection failed: " . $exception->getMessage());
		}
		return $this->conn;
	}

}
