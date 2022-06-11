function toggleField(val){
         switch(val.value){
            case "DVD":
               document.getElementById("size").style.display ="block";
               document.getElementById("dimensions").style.display ="none";
               document.getElementById("book").style.display ="none";
               break;
            case "Furniture":
               document.getElementById("dimensions").style.display ='block';
               document.getElementById("size").style.display ="none";
               document.getElementById("book").style.display ="none";
               break;

               case "Book":
               document.getElementById("book").style.display ='block';
               document.getElementById("size").style.display ="none";
               document.getElementById("dimensions").style.display ="none";
               break;
            default:
               document.getElementById("size").style.display ="none";
               document.getElementById("dimensions").style.display ="none";
               document.getElementById("book").style.display ="none";

         }

         
}

function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm(){
      let Sku = document.productForm.sku.value;
      let name = document.productForm.name.value;
      let price = document.productForm.price.value;
      let productType = document.productForm.productType.value;
      let discSize = document.productForm.discSize.value;
      let width = document.productForm.width.value;
      let height = document.productForm.height.value;
      let length = document.productForm.length.value;
      let weight = document.productForm.weight.value;


      var skuError = nameError = priceError = selectError = discError = widthError = heightError =lengthError=weightError = true ;
      
      //validate SKU
      if(Sku == ""){
         printError("skuError","SKU cannot be empty");
         
      }
      else{
         var regex = /^([A-Z]{3}[0-9]{6})$/;
         if(regex.test(Sku) == false) {
            printError("skuError", "Please provide a valid SKU consists of 3 letters and 6 numbers");
         } else{
            printError("skuError","");
            skuError = false;   
         }
         
      }


      //validate name
      if(name == ""){
         printError("nameError","Name cannot be empty");
         
      }
      else{
         var regex = /^[a-zA-Z\s]+$/;
         if(regex.test(name) == false) {
            printError("nameError", "Please enter a valid name");
         } else{
            printError("nameError","");
            nameError = false;   
         }
         
      }

      //validate price
      if(price == ""){
         printError("priceError","Price cannot be empty");
         
      } else{
         var regex = /[0-9]/;
         if(regex.test(price) == false) {
            printError("priceError", "Please enter a valid number");
         }
         else{
            printError("priceError","");
            priceError = false; 
         }
      }


      if(productType == "Select productType"){
         printError("selectError", "Please select a value");

      }
      else{
         printError("selectError", "");
         selectError = false;
      }
      //validate disc size
      if(productType == "DVD"){
         if(discSize == ""){
            printError("discError","Please provide size");
         
         }
         else{
            var regex = /([0-9])?(mb)/;
            if(regex.test(discSize) == false) {
               printError("discError", "Please enter a valid disc size with MB");
            }
            else{
               printError("discError","");
               discError = false;
            }   

         }
      }

      //validate dimensions(width, height, length)
      
      if(productType == "Furniture"){
         if(height == ""){
            printError("heightError","Please provide height");
         
         }
         else{
            var regex = /[0-9]/;
            if(regex.test(height) == false) {
               printError("heightError", "Please enter a valid height");
            }
            else{
               printError("heightError","");
               heightError = false;   
            }
            
         }
         if(width == ""){
            printError("widthError","Please provide width");
         
         }
         else{
            var regex = /[0-9]/;
            if(regex.test(width) == false) {
               printError("widthError", "Please enter a valid width");
            }else{
               printError("widthError","");
               widthError = false;   
            }
            
         }
         if(length == ""){
            printError("lengthError","Please provide length");
         
         }
         else{
            var regex = /[0-9]/;
            if(regex.test(length) == false) {
               printError("lengthError", "Please enter a valid length");
            } else{
               printError("lengthError","");
               lengthError = false;   
            }
            
         }
      }   
      
      //validate book weight
      if(productType == "Book"){
         if(weight == ""){
            printError("weightError","Please provide weight");
         
         }
         else{
            var regex = /([0-9])?(kg)/;
            if(regex.test(weight) == false) {
               printError("weightError", "Please enter a valid weight");
            } else{
               printError("weightError","");
               weightError = false;   
            }
            
         }   
      }
      
      
      //prevent the form from being submitted if there are any errors
      if(skuError||nameError||priceError||selectError==true){
         return false;
      }
      
      if ((skuError || nameError || priceError || discError == true)
         &&(skuError||nameError||priceError||widthError||heightError||lengthError == true)
         &&(skuError || nameError || priceError || weightError == true)){
              return false;
         }  
        
      
      
      
   }   