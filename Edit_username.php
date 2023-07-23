
<!--
  Bushra Ismail Al-Futaisi
  This page update  the all information about username from the database from a table(username)
  The link to access it is(Home page.php)
-->
<!DOCTYPE html>

<html>
    <head>
   
    <link rel="stylesheet"href="css\forall.css">
    </head>
    <body style="background-color:  rgba(250, 31, 31, 0.080)">
    <header>
     <p><a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a> </p>
     </header>
   </body>
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
</html>
<?php

require_once 'database.php'; // Using database connection file here
$conn = new mysqli($hn, $un, $pw, $db);

$id_number = $_SESSION['Id_number'];// get id through query string

$query = "SELECT Id_number,UsernName,Email,password FROM username WHERE Id_number ='$id_number'  "; // select query
//echo $query;

$result = $conn->query($query); // fetch data
if (!$result) {
    echo "<p>Unable to execute the query.</p> ";
    echo $query;
    die($conn->error);
}
$data = $result->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['update'])) // when click on Update button
{
    $uaer = $_POST['UsernName'];
    $Email = $_POST['Email'];
    $pass = $_POST['password'];

    $query = "update username set 	UsernName='$uaer', Email='$Email',password='$pass' where  Id_number='$id_number'";
    $edit = $conn->query($query);

    if ($edit) {
        $conn->close(); // Close connection
          header("location:Home page.php"); // redirects to all records page
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($conn->error);
    }
}
?>
<center>
<h3>Update Data</h3>

<form method="POST"   style="background-color:  rgba(250, 31, 31, 0.080)">

    <input type="text" id='no' name="UsernName" value="<?php echo $data['UsernName'] ?>" placeholder="Enter Author Name">
    <input type="text" id='no' name="Email" value="<?php echo $data['Email'] ?>" placeholder="Enter Title" >
    <input type="text" id='no' name="password" value="<?php echo $data['password'] ?>" placeholder="Enter Price" >

    <input type="submit" id='no' name="update" value="Update">
</center>
</form>