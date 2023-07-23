<!--Bushra Ismail Al-Futaisi-->
<!--This is the account creation page on the Expense tracking website
This form page calls another php page(Try1.php)-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" Create an account" content="This is the account creation page on the Expense tracking website" / >
    
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
<body     style="background-color:  rgba(250, 31, 31, 0.080)">
<header>
  <p>
<a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
</header>
    <form    action="Try1.php"   method="post"   style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;" > 
     <center>
       
       </div>
        <br>
       <div> 
          <label>UserName </label>
         <p><input type="text"  id='no'  name="UserName"   maxlength="15" minlength="5"  placeholder="Enter the username" required ></p> 
       </div>
      
        <div> 
             <label> E-mail address </label>
            <p><input type="email" id='no'    name="Email"  placeholder="Enter the Email" required></p>
        </div> 
       
        
       
       <div> 
          <label for="gf">password </label>
           	<p><input type="password"   id='no' name="password"  pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}"  placeholder="Enter the password" required  maxlength="14" minlength="10" ></p>
       </div> 
       
       <div> 
         <label>  confirm  password </label>
          <p><input type="password"    id='no' name="agin" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}"  placeholder="Enter the  confirm  password" required  maxlength="14" minlength="10"></p>
     </div> 
     
      
        <p>  <div> 
             <input  id=" st"type="checkbox" id='no' name="sample linking agreement" value=" ample linking agreement">
             <label for="st"> agreement</label>
             
          </div></p>
      
       <div> 
       
             <input type="submit"  id='no' name="submit" value="creat">
             <input type="reset"  id='no' name="reset" value="Delete all">
      </div> 
      
      </center>  




</form>
</body>
</html>


          
         