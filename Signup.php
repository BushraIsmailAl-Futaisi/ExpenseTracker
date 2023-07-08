<!--Bushra Ismail Al-Futaisi-->
<!--This is the account creation page on the Expense tracking website-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" Create an account" content="This is the account creation page on the Expense tracking website" / >
    <title>Expense tracke </title>
    <center align="left"> <img alt="user "src="../ExpenseTracker\icon\profile.png" style="width: 2%;" / >
    <?php
   session_start();
   if(empty($_SESSION['user']) ){

     echo' no_Username';
   }
   else{
   
     echo  $_SESSION['user'];
   }
   //action="sighup_page.php"  
    ?>
    
  </center>

</head>
<body     style="background-color:  rgba(250, 31, 31, 0.080)">
    <form    action="Try1.php"   method="post"   style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;" > 
     
       
       </div>
      
       <div> 
          <label>UserName </label>
         <p><input type="text"   name="UserName"   maxlength="15" minlength="5"  placeholder="Enter the username" required ></p> 
       </div>
      
        <div> 
             <label> E-mail address </label>
            <p><input type="email"    name="Email"  placeholder="Enter the Email" required></p>
        </div> 
       
        
       
       <div> 
          <label for="gf">password </label>
           	<p><input type="password" id="gf" name="password"  pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}"  placeholder="Enter the password" required  maxlength="14" minlength="10" ></p>
       </div> 
       
       <div> 
         <label>  confirm  password </label>
          <p><input type="password" name="agin" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}"  placeholder="Enter the  confirm  password" required  maxlength="14" minlength="10"></p>
     </div> 
     
      
        <p>  <div> 
             <input  id=" st"type="checkbox" name="sample linking agreement" value=" ample linking agreement">
             <label for="st"> agreement</label>
             <?php
                echo'<br>'; 
                echo __FILE__;
             ?>
          </div></p>
      
       <div> 
       
             <input type="submit" name="submit" value="creat">
             <input type="reset"  name="reset" value="Delete all">
      </div> 
      
      




</form>
</body>
</html>


          
         