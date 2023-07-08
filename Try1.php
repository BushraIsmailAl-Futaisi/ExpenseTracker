
<!DOCTYPE html>
<html>
<head>
  <title>expensetracker</title>
  <p> <button>  <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></button></p>
</head>
<body>
  <h1>welcom to expensetracker</h1>
 
  
  <?php

   

    // create short variable names
   
    if( $_SESSION['password']!=$_SESSION['Agin'])
    {
        echo'ereero';

    
    }
    else
     { session_start();
      $user=$_POST['UserName'];
       $email=$_POST['Email'];
       $password=$_POST['password'];
        $agin=$_POST['agin'];
        $_SESSION['user']=$user;
         $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        $_SESSION['Agin']=$Agin;

require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
       echo' its connection';
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
  }
     
  ?>
</body>
</html>


   
