<?php

include 'dbh.php';
include 'product.php';

class AddProduct extends Dbh{

	
	public function insertData(){
		
		$Sku = $_POST['sku'];

		$name = $_POST['name'];
		$price = $_POST['price'];
		$size = $_POST['discSize'];
		$weight = $_POST['weight'];
		$width = $_POST['width'];
		$height = $_POST['height'];
		$length = $_POST['length'];


		$dvdObj = new Dvd($Sku, $name, $price, $size);
		$dvdSize = $dvdObj->getSize($size);

		$bookObj = new Book($Sku, $name, $price, $weight);
		$bookWeight = $bookObj->getWeight($weight);

		$furnObj = new Furniture($Sku, $name, $price, $width, $height, $length);
		$furnDimensions = $furnObj->getDimensions($width, $height, $length);

		$options = array('DVD', 'Furniture', 'Book');


		$desc = $_REQUEST['productType'] == $options[0] ? $dvdSize : ($_REQUEST['productType'] == $options[1] ? $furnDimensions : $bookWeight); 


		
		try{
			
			$this->insert($Sku, $name,$price, $desc);
			header('Location: form.php');
		}
		catch(PDOException $e){
			//header('Location: form.php');	
			echo "<h2>SKU already exists</h2>" ;
			echo "<a href ='form.php'>GO BACK TO FORM</a>";
		}
		
		
		

	}

	
	
}

	$addProduct = new AddProduct();
	$addProduct->insertData();
	

?>