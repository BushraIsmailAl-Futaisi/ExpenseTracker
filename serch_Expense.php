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
     <?php
  
  ?>
     <body  style="background-color:  rgba(250, 31, 31, 0.0100)">
     <div> 
     
     <form method="POST"  action="view_Expense.php" style="background-color:  rgba(250, 31, 31, 0.080)">
      <center>
     <div>
       <p>
       <input type="date" name="Data" required>
       </p>
    </div>
 
    <div>
      <p>
       <input type="submit" name="serch" value="serch">
       <input type="reset"  name="reset" value="Delete all">
      </p>
    </div>
  </center>
     </form>
    </div> 
     </body>
      </head>
      </html>
