
 <!--Bushra Ismail Al-Futaisi
 This page follows the account creation page(signup.php)-->
 <?php
 
 session_start();
 
 
      
            echo'A page has been created within the site';
              echo'<br>';
             echo $_SESSION['username'];
              echo'<br>';
             echo $_SESSION['email'];
             echo'<br>';
             echo $_SESSION['password'];
            header('REFRESH:3;URL=Home page.html');

 
 ?>
 
  
