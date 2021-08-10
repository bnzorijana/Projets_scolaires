<?php

class DB
{
	private $host='localhost';
	private $username='root';
	private $password='';
	private $database='panier';
	public $db;

	public function __construct($host= null,$username= null,$database= null)
	{
		if ($host!=null) {
			$this->host= $host;
			$this->username=$username;
			$this->password=$password;
			$this->database=$database;

echo "sdf";
		}
		try{
		$this->db = new PDO('msql:host'.$this->host.';dbname='.$this->database, $this->password);
		echo "sdf";
	}catch(PDOException $e){
		die('impossible de se connecter');
	}
	}
}
