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
  <p> <button>  <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></button></p>
  
</header>

<form  action='category.php'  method="post"   style="background-color:  rgba(250, 31, 31, 0.075);width: 100%; height: 10%;">
   <div> 
        <label>Money value </label>
        <p><input type="text"   name="Mony" placeholder="Enter the number" ></p> 
     </div>
       
    
     <div> 
        <label>soucer_mony </label>
        <p><input type="text"   name="Soucer" placeholder="Enter the soucer_mony" ></p> 
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
      <div>
      <p>
        <input type="text" name="note"  placeholder="Write a note"  >Write a note</textarea>
      </p>
      
      <p>
      <div> 
        <label >Data</label>
        <input  type="date"  name="DATE"  />
      </div>
       </p>
        <p>
       <div>
        <label >Time</label>
        <input  type="time" name="TIME"  />
      </div>
       </p>
       <p>
      <div>
      <input type="submit" name="submit" value="save">
      <input type="reset"  name="reset" value="Delete all">
     
    </div> 
       </p>
</form>



</body>



</html>