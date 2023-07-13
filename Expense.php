<!--Bushra Ismail Al-Futaisi-->
<!--This is the Expense page on the Expense tracking website-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" mony" content="This is the Money page is for a User" / >
    <title>Expense tracke </title>
    <button>  <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></button>
    <center align="left"> <img alt="user "src="../ExpenseTracker\icon\profile.png" style="width: 2%;" / >
    <?php
   session_start();
   if(empty( $_SESSION['user']) && (empty( $_SESSION['Email']))){
    
    echo' no_Username';
   }
    
    else
      { if(!empty( $_SESSION['user']) )
       {
        echo$_SESSION['user'];
       }
       else
       {
         echo$_SESSION['Email'];
       }

      }
    ?>

     
  </center>

</head>
<body     style="background-color:  rgba(250, 31, 31, 0.080)">
    <form    action="Expens2.php"   method="post"   style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;" > 
     
       
       
    
       <div> 
          <label>The mony </label>
          <p><input type="text"   name="Mony"   maxlength="15" minlength="5"  placeholder="Enter the mony" required ></p> 
       </div>
       <div> 
         <label>soucer_mony </label>
         <p><input type="text"   name="Soucer" placeholder="Enter the soucer_mony" ></p> 
         </div>
         
        <div> 
             <label> note </label>
             <p><input type="text"    name="Note"  placeholder="Enter the commnt" ></p>
        </div> 
       
        <div> 
             <label> Data </label>
             <p><input type="date"    name="DATA"  required  ></p>
        </div> 
       
        <div> 
             <label> Add picture </label>
             <p><input type="file"    name="FILE"    ></p>
        </div> 
       
       
      
       <div> 
       
             <input type="submit" name="submit" value="save">
             <input type="reset"  name="reset" value="Delete all">
      </div> 
      
      




</form>
</body>
</html>


          
         