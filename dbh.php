<?php

class Dbh{
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $dbName = "products";

	public function connect(){
		$dsn = 'mysql:host=' .$this->host. ';dbname=' .$this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}

	/*public function createTable(){
		$sql = "CREATE DATABASE products";

		$stmt = $this->connect()->exec($sql);
		echo "Database created successfully";	
	}*/

	public function insert($Sku, $name, $price, $description){
		$sql = "INSERT INTO `products` (SKU, name, price, description) VALUES('$Sku','$name','$price','$description')";	
		$stmt = $this->connect()->exec($sql);
		//$stmt->execute();
		
		
	}

	public function getProducts(){
		$result = array();
		$sql = "SELECT * FROM `products`";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()){
			$result[] = $row;
		}
		return $result;
			
	}

	public function getSku(){
		$result = array();
		$sql  = "SELECT SKU FROM `products`";
		$stmt = $this->connect()->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
		return $result;
		
	}
	//public function removeData($Sku){
		
		//$stmt = $this->connect()->exec($sql);
	//}
}



?>


