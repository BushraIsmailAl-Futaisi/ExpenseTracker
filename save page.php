
 <!--Bushra Ismail Al-Futaisi
 This page follows the account creation page(signup.php)-->
 <?php
 /*
 session_start();
 
 
      
            echo'A page has been created within the site';
              echo'<br>';
             echo $_SESSION['username'];
              echo'<br>';
             echo $_SESSION['email'];
             echo'<br>';
             echo $_SESSION['password'];
            header('REFRESH:3;URL=Home page.html');

 */

 if(isset($_POST['submit'])){
  // session_start();

   $Fusername=$_POST['FristName'];
   $Lusername=$_POST['lastName'];
   $email=$_POST['Email'];
   $password=$_POST['password'];
     $passwordagin=$_POST['agin'];

     //$username="root";
     //$password="";
     $database=new mysqli("localhost","root","","expense tracker");
     $addData = $database->prepare("INSERT INTO username (FristName,lastName,Email, password) VALUES('$Fusername',,'$Lusername','$email','$password')"); 
     $addData->execute();
    }
 ?>
 
  
