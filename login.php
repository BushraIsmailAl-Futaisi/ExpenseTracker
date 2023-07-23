
<!--Bushra Ismail Al-Futaisi-->
<!--This is the login page for the expense tracking website 
This html page calls another php page(condition.php)
-->
<!DOCTYPE html>
<html>
<head>
  
    
    <meta charset="UTF-8". />
    <meta name=" login page" content="This is the login page for the expense tracking website" / >
    <title>Expense tracke </title>
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
          ;
         echo$_SESSION['Email'];
       }

      }
    ?>

  </center>

</head>
<body    style="background-color:  rgba(250, 31, 31, 0.080)" >
 <header>
  <p><a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
 </header>
   

    <form action="condition.php"    style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;"  method="post" > 
        <center>
        <div> 
            <label> E-mail address </label>
            <p><input type="email"  id='no'  name="Email"     maxlength="15" minlength="5  placeholder="Enter the username"  required></p>
        </div> 
       


       <div> 
         <label>password </label> 
         <p><input type="password"    id='no' name="password"    placeholder="Enter the password"required  maxlength="14" minlength="5"></p>
       </div> 
       
      
       <div> 
                 <input type="reset"   id='no' name="reset" value="Delete all">
               <input type="submit"   id='no' name="submit" value="login">
             
      </div> 
      </center>
</form>
</body>
</html>
