<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Product Form</title>
      <link rel = "stylesheet" href = "style.css">
      <script src = "util.js"></script>
      
   </head>
   
   
   <body>

      <center>
         <h1>Product Form</h1>
         <form name = "productForm" action="add_product.php" onsubmit = "return validateForm()" method="post">
             
            <p>
               <label for="SKU">SKU:</label>
               <input type="text" name="sku" id="SKU">
               <div class = "error" id = "skuError"></div>
                  
            </p>
 
             
            <p>
               <label for="Name">Name:</label>
               <input type="text" name="name" id="Name">
               <div class = "error" id = "nameError"></div>
            </p>
 
             
            <p>
               <label for="price">Price:</label>
               <input type="text" name="price" id="Price">
               <div class = "error" id = "priceError"></div>
            </p>
            
            
            <p>
               <label for ="typeSwitcher">Type Switcher: </label>
               <div><select name="productType" id="productType" onchange='toggleField(this);'>
                  <option value="type" selected>Select productType
                  </option>
                  <option value="DVD" id = "discSize">DVD
                  </option>

                  <option value="Furniture" id ="furniture">Furniture
                  </option>

                  <option value="Book" id ="bookW">Book
                  </option>
               </select>
               <div class = "error" id ="selectError"></div>
            </div>
               <div id = "size" style ="display: none;">
                  <label for = "discSize"> Size:</label> 
                  <input type = "text" name = "discSize" id = "size">
                  <div class = "error" id = "discError"></div>
               </div>
               
               <div id = "dimensions" style ="display: none;">
                  <label for = "height"> height: </label>
                  <input type = "text" name = "height" id = "Height">
                  <div class = "error" id = "heightError"></div>

                  <label for = "width"> width: </label>
                  <input type = "text" name = "width" id = "Width">
                  <div class = "error" id = "widthError"></div>

                  <label for = "length"> length: </label>
                  <input type = "text" name = "length" id = "Length">
                  <div class = "error" id = "lengthError"></div>
               </div>
               
               <div id = "book" style ="display: none;">
                  <label id = "bookWeight" type ="text" name="weight">Weight:</label>
                  <input type = "text" name = "weight" id = "Weight">
                  <div class = "error" id = "weightError"></div>
               </div>


            </p>
 
             

 
            <input type="submit" value="Submit" name = "submit">
            <input type="submit" value="Cancel" name = "Cancel" onclick="window.location.href='home.php';">

         </form>
      </center>
   </body>
</html>
  