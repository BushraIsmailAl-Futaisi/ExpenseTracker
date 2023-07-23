<!--Bushra Ismail Al-Futaisi
    This page follows the login page(login.php) -->
    <!--This page has a condition that if the password and email are found in the database
     -->
  <?php
   
$email=$_POST['Email'];
$password=$_POST['password'];


if (!$email || !$password) {
   echo '<p>You have not entered search details.<br/>
   Please go back and try again.</p>';
   exit;
}



require_once 'database.php';
$connection = new mysqli($hn, $un, $pw, $db);

if ($connection->connect_error) {
   echo '<p>Error: Could not connect to database.<br/>
   Please try again later.<br/></p>';
   echo $connection -> error;
   exit;
}

$query = "SELECT Id_number,Email,password	 FROM username WHERE Email='$email' and password= '$password'";

$result=$connection->query($query);

if (!$result) 
{   
    echo "<p>Unable to execute the query.</p> ";
    echo $query;
    die ($connection -> error);
}
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<p>Number  found: ".$result->num_rows."</p>";
if($result->num_rows>0){
   session_start();
   $email=$_POST['Email'];
  $_SESSION['Email']=$email;
  $_SESSION['Id_number']=$row['Id_number'];

   header("REFRESH:3;Home page.php");


$connection->close();
}
header("REFRESH:3;Home page.php");
  ?>

