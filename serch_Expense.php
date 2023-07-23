<!--Bushra Ismail Al-Futaisi-->
<!--This the html  page to search for Expense by date and categories
This form page calls another php page(view_Expense.php)-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" mony" content="This is the Money page is for a User" / >
    <link rel="stylesheet"href="css\forall.css">
    <title>Expense tracke </title>
     <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a>
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
     <?php
  
  ?>
     <body  style="background-color:  rgba(250, 31, 31, 0.0100)">
     <div> 
     
     <form method="POST"  class="y" action="view_Expense.php" style="background-color:  rgba(250, 31, 31, 0.080)">
      <center>
     <div>
       <p>
       <input type="date" id='no' name="Data1" required>
       </p>
    </div>
    <div>
       <p>
       <input type="date" id='no' name="Data2" required>
       </p>
    </div>
  
    <div>
       <p> <label>name category</label> </p>    
       <input type="text" id='no' name="soon" required>
       
    </div>
    <div>
      <p>
       <input type="submit" id='no' name="serch" value="serch">
      
      </p>
    </div>
  </center>
     </form>
    </div> 
     </body>
      </head>
      </html>
