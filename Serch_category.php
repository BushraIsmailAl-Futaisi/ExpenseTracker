<!--Bushra Ismail Al-Futaisi-->
<!--This the html  page to search for categories by  categories
This form page calls another php page(view_category.php)-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" mony" content="This is the Money page is for a User" / >
    <link rel="stylesheet"href="css\forall.css">
    <title>Expense tracke </title>
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
    <body   style="background-color:  rgba(250, 31, 31, 0.080)">
  <header>
    <p><a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
  </header>
          
    <form method="POST" class='y'  action="view_category.php" style="background-color:  rgba(250, 31, 31, 0.080)">
      <center>
      <div> 
        <br> 
            <label for="st">choose category</label> 
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

    <div>
      <p>
       <input type="submit" id='no' name="serch" value="serch">
       
      </p>
    </div>
  </center>
     </form>
    </div> 
    </body>
</html>
