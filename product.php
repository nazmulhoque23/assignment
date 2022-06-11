<!--FIRST TASK: have to insert several records and show them on the page.-->


<?php  
	class Product{
		public $SKU;
		public $name;
		public $price;

		public function __construct($SKU, $name, $price){
			$this->SKU = $SKU;
			$this->name = $name;
			$this->price = $price;


		}
		public function get_product(){
			return $this->SKU."<br/>".$this->name."<br/>".$this->price; //$this->name, $this->price;
		}
		/*public function get_productName(){
			return $this->name; //$this->name, $this->price;
		}
		public function get_productPrice(){
			return $this->price; //$this->name, $this->price;
		}*/
	}

	class Dvd extends Product{
		public $size;
		public function __construct($SKU, $name, $price, $size){
			parent::__construct($SKU, $name, $price);
			$this->size = $size;
		}

		public function getSize($size){
			return $this->size;
		}
	}

	class Book extends Product{
		public $weight;
		public function __construct($SKU, $name, $price, $weight){
			parent::__construct($SKU, $name, $price);
			$this->weight = $weight;
		}

		public function getWeight($weight){
			return $this->weight;
		}
	}
	class Furniture extends Product{
		public $height;
		public $width;
		public $length;
		
		
		public function __construct($SKU, $name, $price, $width, $height, $length ){
			parent::__construct($SKU, $name, $price);
			
			$this->width = $width;
			$this->height = $height;
			$this->length = $length;	
			
			
			
		}

		
		public function getDimensions($width, $height, $length){
			 
			return $this->width."x". $this->height."x".$this->length;
			
		}
	}	



?>
