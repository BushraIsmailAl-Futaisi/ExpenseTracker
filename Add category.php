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
   if(empty($_SESSION['Username'])){
    
    echo' no_Username';
   }
   else{
    echo $_SESSION['Username'];
   }

    ?>
  </center>

</head>
<body  style="background-color:  rgba(250, 31, 31, 0.080)" >
<header>
  <p> <button>  <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></button></p>
  
</header>

<form   style="background-color:  rgba(250, 31, 31, 0.075);width: 100%; height: 10%;">
    <div> 
        <label>Money value </label>
        <p><input type="text"   name="name" placeholder="Enter the number" ></p> 
     </div>
   
     <p><label>Add category</label></p> 
      <p> <div> 
             <input  id=" st"type="radio"  name="os" value="Food">
             <label for="st">Food </label>
          </div>

          <div> 
             <input  id=" em"type="radio" name="os"  value="Clothes" >
              <label for="em">Clothes </label>
         </div>

         <div> 
             <input  id=" fr"type="radio" name="os" value=" Car" >
             <label for="fr"> Car</label>
         </div> 

         <div> 
             <input  id=" fr"type="radio" name="os"  value="stady" >
             <label for="fr">stady </label>
         </div> 
          
         <div> 
             <input  id=" fr"type="radio" name="os" value="Hospital" >
             <label for="fr"> Hospital</label>
         </div> 

         <div> 
             <input  id=" fr"type="radio" name="os"  value="Wifi" >
             <label for="fr"> Wifi </label>
         </div> 

         <div> 
              <input  id=" fr"type="radio" name="os" value="Travel" >
              <label for="fr">Travel </label>
         </div> 
      </p> 

      <div> 
        <textarea   name="note" cols="40" rows="10" placeholder="Write a note"  ></textarea>
        
      </div> 
       <p>
      <div> 
        <label >Add image</label>
        <input  type="file" value="Add image"  />
      </div>
       </p>
      <p>
      <div> 
        <label >Data</label>
        <input  type="date"  />
      </div>
       </p>
        <p>
       <div>
        <label >Time</label>
        <input  type="time"  />
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