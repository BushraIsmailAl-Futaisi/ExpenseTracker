<!--Bushra Ismail Al-Futaisi-->
<!--This page allows me to enter the financial value, choose the category, add notes, the photo, and the date and day-->
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="icon/add.png"/>
    <meta charset="UTF-8". />
    <meta name=" Add category" content="This page allows me to enter the financial value, choose the category, add notes, the photo, and the date and day" / >
    <title>Add category</title>
    <center align="left"> <img alt="user "src="../ExpenseTracker\icon\profile.png" style="width: 2%;" / >
    <link rel="stylesheet"href="css\forall.css">
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
<body  style="background-color:  rgba(250, 31, 31, 0.080)" >
<header>
  <p>   <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
  
</header>

<form  action='category.php'  class='y' method="post"   style="background-color:  rgba(250, 31, 31, 0.075);width: 100%; height: 10%;">
    <center>
     <div> 
        <label>Money value </label>
        <p><input type="text" id='no'  name="Mony" placeholder="Enter the number" ></p> 
     </div>
       
    
     <div> 
     <label for="st"> soucer_mony </label> 
           <select id="st"  name="Soucer" required>
             <p><option value="card" >card</option>
             <option value="salary">salary</option>
             <option value="savings">savings</option>
           </select> 
     </div>
     
      <div>  
        <br> 
            <label for="st">Add category</label> 
           <select id="st"  name="Addcategory" required>
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
           </select> 
            
          </p> 
    </div>
        
         <div>
              <label >Write a note</label>
       <p> <input type="text" name="note" id='no'  placeholder="Write a note"  > </p>
        
        </div>
     
     
      <div> 
        <label >Data</label>
         <input  type="date" id='no' name="DATE"  />
      </div>
       
        <br>
       <div>
        <label >Time</label>
       <input  type="time" id='no' name="TIME"  />
      </div>
       
       <p>
      <div>
      <input type="submit" id='no' name="submit" value="save">
      <input type="reset"  id='no' name="reset" value="Delete all">
     
      <center>
     
    </div> 
       </p>
</form>



</body>



</html>