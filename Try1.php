<!--Bushra Ismail Al-Futaisi-->
<!-- This page follows the login page(Signup.php)
  This page is for me to create an account and make sure that
 the password and password confirmation are the same as for 
 me to register in the database
-->
<!DOCTYPE html>
<html>
<head>
  <title>expensetracker</title>
  <link rel="stylesheet"href="css\forall.css">
  
</head>
<body style="background-color:  rgba(250, 31, 31, 0.080)">
  <h1>welcome to expensetracker</h1>
 
  
  <?php
   $user=$_POST['UserName'];
   $email=$_POST['Email'];
   $password=$_POST['password'];
    $agin=$_POST['agin'];
   

    // create short variable names
    
    if( $password!=$agin)
    {
        echo'Error Confirmation code is wrong';
        echo'Please try again';
        header("REFRESH:3;Signup.php"); 
    
    }
    else
     { session_start();
      
        $_SESSION['user']=$user;
         $_SESSION['email']=$email;
        $_SESSION['password']=$password;
       
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
       echo' it`s connected';
    }
    
       
    
    $query = "INSERT INTO username ( UsernName, Email	, password	)  VALUES 
    ( '$user', '$email', '$password')" ;
        $result = $conn->query($query);
       
  
    if ($result) {
        echo  "<p>you inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       //close connection
       $conn -> close();
       header("REFRESH:3;Home page.php");
  }
     
  ?>
</body>
</html>


   
