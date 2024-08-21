<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="form.css">
    <title>Checkrquest</title>
</head>
<body>
<div class="container" style="height:845px;">



<header>Check Request Form </header>
<form action="datatrans.php" method="post">
<div class="form first">
             <div class="details personal">
                      <span class="title"> Personal details </span>

                      

        <div class="fields">
<br>
        <div class="input-field">
        <label for="">Request by.</label> 
        <input type="text" placeholder="Enter Name:" name="created_by" > 
        </div>

              
        <div class="input-field">
            <label for="">Checkpayee</label> 
            <input type="text" placeholder="" name="payee"> 
            </div>

                  
        <div class="input-field">
            <label for="">Purpose</label> 
            <input type="text" placeholder="State your Purpose" name="purpose" > 
            </div>

              
    <div class="input-field">
        <label for="">Date Needed</label> 
        <input type="date" placeholder="Enter Name:" name="Need" > 
        </div>

  

     <div class="input-field">
         <label for="">Noted by:</label> 
         <input type="text" placeholder="Enter Name" name="noted" > 
         </div>
 
       
         <div class="input-field">
        
         <input type="hidden" placeholder="Enter Name" name="check_id" > 
         </div>
 
</div>

<!---ITEMS-->




    <div class="details personal">
             <span class="title"> ADD Items </span>

             
 <div  class="fields">
    





 <div class="input-field" style="flex-wrap: wrap;">
                 <label for="">QTY</label> 
                 <input style="width: 80px;" type="text" placeholder="quanty" name="quanty"> 
                    </div>

               <div class="input-field">
               <label for="">Particular</label> 
               <input type="text" placeholder="Enter Particular" name="Particular" > 
               </div>

               <div class="input-field">
                <label for="">Price</label> 
                <input type="text" placeholder="Enter price" name="price" > 
                 </div>

    
                <div class="input-field">
              
                 <input style="width: 80px;" type="text" placeholder="quanty" name="quanty1"> 
                  </div>
 
                  <div class="input-field">
                  
                  <input type="text" placeholder="Enter Particular" name="Particular1" > 
                  </div>
 
                  <div class="input-field">
               
                   <input type="text" placeholder="Enter price" name="price1" > 
                    </div>  
    
    <div class="input-field">
    
        <input style="width: 80px;" type="text" placeholder="quanty" name="quanty2"> 
        </div>
     
     <div class="input-field">
    
     <input type="text" placeholder="Enter Particular" name="Particular2" > 
     </div>
     
     <div class="input-field">
   
        <input type="text" placeholder="Enter price" name="price2" > 
        </div>
 
   
    
        <div class="input-field">
           
            <input style="width: 80px;" type="text" placeholder="quanty   " name="quanty3"> 
            </div>
         
              <div class="input-field">
          
              <input type="text" placeholder="Enter Particular" name="Particular3" > 
               </div>
         
            <div class="input-field">
            
            <input type="text" placeholder="Enter price" name="price3" > 
            </div>

            <div class="input-field">
           
            <input style="width: 80px;" type="text" placeholder="quanty   " name="quanty4"> 
            </div>
         
              <div class="input-field">
          
              <input type="text" placeholder="Enter Particular" name="Particular4" > 
               </div>
         
            <div class="input-field">
            
            <input type="text" placeholder="Enter price" name="price4" > 
            </div>

            <div class="input-field">
           
            <input style="width: 80px;" type="text" placeholder="quanty   " name="quanty5"> 
            </div>
         
              <div class="input-field">
          
              <input type="text" placeholder="Enter Particular" name="Particular5" > 
               </div>
         
            <div class="input-field">
            
            <input type="text" placeholder="Enter price" name="price5" > 
            </div>

          
      
  

               <button class="nextBtn" name="submit">
                <span class="btnText" >SUBMIT</span>
                <i class="uil uil-navigator"></i>
                </button>

                </div>

           </div>
       
    </div>
    </div>  
    </form>
</div>

</div>

<script src="SCRIPT.js"></script>
</body>
</html>