
<!DOCTYPE html>

<html>
    <head></head>
    <body style="background-color:lavenderblush"></body>
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

<h3>Update Data</h3>

<form method="POST"   style="background-color:  rgba(250, 31, 31, 0.080)">
    <input type="text" name="UsernName" value="<?php echo $data['UsernName'] ?>" placeholder="Enter Author Name" Required>
    <input type="text" name="Email" value="<?php echo $data['Email'] ?>" placeholder="Enter Title" Required>
    <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter Price" Required>

    <input type="submit" name="update" value="Update">
</form>