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
   if(empty( $_SESSION['user'])){
    
    echo' no_Username';
   }
   else{
    echo  $_SESSION['user'];
   }

    ?>
  </center>

</head>
<body  style="background-color:  rgba(250, 31, 31, 0.080)" >
<header>
  <p> <button>  <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></button></p>
  
</header>

<form  action='category.php' style="background-color:  rgba(250, 31, 31, 0.075);width: 100%; height: 10%;">
    <div> 
        <label>Money value </label>
        <p><input type="text"   name="mony" placeholder="Enter the number" ></p> 
     </div>
       
     <div> 
        <label>soucer_mony </label>
        <p><input type="text"   name="soucer" placeholder="Enter the soucer_mony" ></p> 
     </div>
    
      <div> 
        <br>  
           <select id="st"  name="Addcategory" value="F">
            <p> <option disabled selected>Add category</option>
             <option >Clothes</option>
             <option>Car</option>
             <option>stady</option>
             <option> Hospital</option>
             <option> Wifi</option>
             <option>Travel</option>
           </select>
            
          </p> 
          <br>
          </div>
          <br>
      <div>
      <p>
        <br>
        <textarea   name="note" cols="40" rows="10" placeholder="Write a note"  >Write a note</textarea>
      </p>
      </div> 
       <p>
      <div> 
        <label >Add image</label>
        <input  type="file" name="file" value="Add image"  />
      </div>
       </p>
      <p>
      <div> 
        <label >Data</label>
        <input  type="date"  name="Data"  />
      </div>
       </p>
        <p>
       <div>
        <label >Time</label>
        <input  type="time" name="Time"  />
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