<!--Bushra Ismail Al-Futaisi
    This page follows the login page(login.php)-->
<?php

//session_start();
$name=array("admin_2023","cs314_2023","system_admin");
$pass=array("Admin_2023","Cs314_2023","System_admin1" );

if($_SERVER['REQUEST_METHOD']=='POST'){
      $user=$_POST['username'];
      $numb=$_POST['password'];
       if((in_array($user,$name))&&(in_array($numb,$pass)))
              {  //$_SESSION['user']=$user;
                //$_SESSION['numb']=$numb;
                echo"Welcome to the Expense Tracking website";
                header('REFRESH:5;URL=Home page.html');
               
               }
        else
        {  
        echo"your are not creat account here error";
        }

}
else{
    echo" erero you cant open this page";
}


?>