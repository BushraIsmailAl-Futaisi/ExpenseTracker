<!--
  Bushra Ismail Al-Futaisi
  This page update  the bank from the database from a table(financial_amount)
  and update from a table (addcategory)
  The link to access it is(view_Expense.php)
-->
<!DOCTYPE html>
<html>
    <head>   <a href= "../ExpenseTracker/serch_Expense.php"><strong>Return</strong></a></head>
    <link rel="stylesheet"href="css\forall.css">
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

$number=$_GET['number'];
$num=$_GET['number_addcategory'];
$value=$_GET['expenses'];
require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$query = "SELECT username_id,number_addcategory,number,expenses,Write_anote,data FROM financial_amount WHERE number='$number'"; // select query

$result = $conn->query($query); // fetch data
if (!$result) {
   // echo "<p>Unable to execute the query.</p> ";
   // echo $query;
    die($conn->error);
}
$data = $result->fetch_array(MYSQLI_ASSOC);
/*****************************/ 
$qu= "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE number_category='$num'";
    $result2 = $conn->query($qu); // fetch data
     if (!$result2) {
   // echo "<p>Unable to execute the query.</p> ";
   // echo $query;
    die($conn->error);
     }
     //////////////
    $data1 = $result2->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['update'])) // when click on Update button
{      
    $mony=$_POST['Mony'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];

     echo"$query";
     echo"<br>";
    $query = "update financial_amount set expenses='$mony',Write_anote='$Note',data='$Data' where number='$number'";
     $edit = $conn->query($query);
     $value2=$data1['mony'];
     $value3=$value2+$value;
    $newMony=$value3-$mony;
     $updata="update addcategory set mony='$newMony' where number_category='$num'";
     $edit3 = $conn->query($updata);
     if ($edit3) {
      $conn->close(); // Close connection
      //header("location:Home page.php"); // redirects to all records page
      exit;}
   else {
      echo "<p>Unable to execute the query.</p> ";
      echo $query;
      die($conn->error);
  }
     
    
    }  
 
          
                



?>
 <center>
<h3>Update Data</h3>
<!-- style="background-color:  rgba(250, 31, 31, 0.080)-->
<form method="POST">

    <input type="text" id='no' name="Mony" value="<?php echo $data['expenses'] ?>" placeholder="Enter the mony" Required>
    <input type="text" id='no' name="Note" value="<?php echo $data['Write_anote'] ?>" placeholder="Enter data" Required>
    <input type="text"  id='no'name="DATA" value="<?php echo $data['data'] ?>" placeholder="Enter Time" Required>
   
    <input type="submit"  id='no'name="update" value="Update">
  </center>
</form>