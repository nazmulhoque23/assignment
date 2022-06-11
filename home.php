
<!DOCTYPE html>
<html>
	<head>
		<meta name = "viewport" content = "width=device-width, initial-scale = 1">
    	<title>Product List</title>
    	<link rel="stylesheet" type="text/css" href="homeCss.css">
	</head>
	
	<body>
		
		
		<?php include 'dbh.php';?>
		<?php $dbTable = new Dbh();
			  $data = array();
			  $data = $dbTable->getProducts();	
			  	//$row = $dbTable->getProducts();
			  //$skuData = array();
			  $skuData = $dbTable->getSku();
			  // count($skuData);
			  $i = 0;?>
			   <form class = "checkClass" method="post" action = "">	
			  		<div class = "header">
					<h1>Product List</h1>
					<button >Add</button>
					<button type="submit"  name = "save" id = "delete" value="delete" >Delete</button>
					</div>
			  		<?php foreach($data as $data1):?>
			  			<div class = "column">
                			<div class="card">
               
			   		
                			<input type="checkbox" class= "flat" id="myCheck" name = "myCheck[]"  value ="<?php echo $data1['SKU'];?>" >
                			<?php echo $data1['SKU'];?><br/>
                			<?php echo $data1['name'];?><br/>
                			<?php echo $data1['price'];?><br/>
                			<?php echo $data1['description'];?><br/>
                		
			   			
        					</div>
               			</div>
			   	

					<?php endforeach;

		 		$i++;?>
		 		
		 			
          		</form>
			   	
    	
		
		<?php 
		//$checked = array();
		$checked = (isset($_POST['myCheck']))?array($_POST['myCheck']):" "; 
		
		$valCount = count($checked); 
		
		for($i = 0; $i<$valCount; $i++){
			//$del_id = $valCount[$i];
			$sql = "DELETE FROM `products` WHERE SKU = '" . $_POST['myCheck'][$i] . "'";
		
			$deleteData = $dbTable->connect()->exec($sql);	
			
		}
		header("location:home.php");
		
			
			

		
		
		
		
		?>
	
	</body>
</html>