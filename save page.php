
 <!--Bushra Ismail Al-Futaisi
 This page follows the account creation page(signup.php)-->
 <!DOCTYPE html>
<html>
<head>

  <p>  <button> <a href= "../ExpenseTracker/Home page.php"><strong>Home page</strong></a></button></p>
</head>
<body>
  <center>Expense tracke </center>
  <?php
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }

    if (!isset($_POST['UserName']) || !isset($_POST['Email']) 
         || !isset($_POST['password']) || !isset($_POST['agin']) ) {
       echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
       exit;
    }
     
    $query = "INSERT INTO 	username  (UsernName,Email,password	)  VALUES 
    ( '$_Username', ' $Email', '$password')" ;
        $result = $conn->query($query);

    if ($result) {
        echo  "<p>inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       //close connection
       $conn -> close();
  ?>
  <?php
$_Username=$_POST['UserName'];
$email=$_POST['Email'];
$password=$_POST['password'];
$password = doubleval( $password);
session_start();
$_SESSION['Username']= $_Username;
 $_SESSION['email']=$email;
$_SESSION['password']=$password;
//$_SESSION['passwordagin']=$passwordagin;
?>
 





</body>
</html>

  
 	
