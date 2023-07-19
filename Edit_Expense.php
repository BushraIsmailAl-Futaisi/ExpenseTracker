<!DOCTYPE html>
<html>
    <head> <button>  <a href= "../ExpenseTracker/view_Expense.php"><strong>Return</strong></a></button></head>
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

$num=$_GET['number'];

require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$query = "SELECT username_id,number_addcategory,number,expenses,soucer_mony,Write_anote,data FROM financial_amount WHERE number='$num'"; // select query

$result = $conn->query($query); // fetch data
if (!$result) {
   // echo "<p>Unable to execute the query.</p> ";
   // echo $query;
    die($conn->error);
}
$data = $result->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['update'])) // when click on Update button
{      
    $mony=$_POST['Mony'];
   $Soucer=$_POST['Soucer'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];

    // echo"$query";mony
    // echo"<br>";
    $query = "update financial_amount set expenses='$mony',soucer_mony='$Soucer',Write_anote='$Note',data='$Data' where  number='$num'";
     $edit = $conn->query($query);
    echo"$query";
   
    if ($edit) {
        $conn->close(); // Close connection
        header("location:Home page.php"); // redirects to all records page
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($conn->error);
    }
    /***************/
   
}


?>
 
<h3>Update Data</h3>
<!-- style="background-color:  rgba(250, 31, 31, 0.080)-->
<form method="POST">
    <input type="text" name="Mony" value="<?php echo $data['expenses'] ?>" placeholder="Enter the mony" Required>
    <input type="text" name="Soucer" value="<?php echo $data['soucer_mony'] ?>" placeholder="Enter the soucer_mony" Required>
    <input type="text" name="Note" value="<?php echo $data['Write_anote'] ?>" placeholder="Enter data" Required>
    <input type="text" name="DATA" value="<?php echo $data['data'] ?>" placeholder="Enter Time" Required>
   
    <input type="submit" name="update" value="Update">
</form>