
<!--
  Bushra Ismail Al-Futaisi
  This page deletes the bank from the database from a table(financial_amount)
  and update from a table (addcategory)Let's return the value of many
  The link to access it is(view_Expense.php)
-->
<!DOCTYPE html>
<html>
    <head> <a href= "../ExpenseTracker/serch_Expense.php"><strong>Return</strong></a>
    <link rel="stylesheet"href="css\forall.css">
  </head>
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
$id=$_SESSION['Id_number'];
$number=$_GET['number'];
$num=$_GET['number_addcategory'];
$value=$_GET['expenses'];
require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$query = "SELECT username_id,number_addcategory,number,expenses,Write_anote,data FROM financial_amount WHERE number='$number'AND username_id='$id'"; // select query

$result = $conn->query($query); // fetch data
if (!$result) {
   echo "<p>Unable to execute the query.</p> ";
    echo $query;
    die($conn->error);
}
$data = $result->fetch_array(MYSQLI_ASSOC);
/*****************************/ 
$qu= "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE number_category='$num' AND user_id ='$id'";
    $result2 = $conn->query($qu); // fetch data
     if (!$result2) {
     echo "<p>Unable to execute the query.</p> ";
     echo $query;
    die($conn->error);
     }
     ////////////
    $data1 = $result2->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['delete'])) // when click on Update button
{      
    $mony=$_POST['Mony'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];

    // echo$data1['mony'];
     echo"<br>";
     $value2=$data1['mony'];
     $value3=$value2+$value;
     //echo$value;
     echo"<br>";
    // echo $value3;
     $updata="update addcategory set mony=' $value3' where number_category='$num'";
     $edit3 = $conn->query($updata);
     
  
     $query ="Delete from financial_amount where username_id='$id' AND  number='$number' ";
     $delete =  $conn->query($query);
     if($delete)
     {
         $conn->close();// Close connection
         header("location:Home page.php"); 
         exit;
     }
     else
     {
         echo "<p>Unable to execute the query.</p> ";
         echo $query;
         die ($conn -> error);
     }    	
    }  
     
          
                



?>
 <center>
<h3>Update Data</h3>
<!-- style="background-color:  rgba(250, 31, 31, 0.080)-->
<form method="POST">
  
    <input type="text" name="Mony"  id='no' value="<?php echo $data['expenses'] ?>" placeholder="Enter the mony" Required>
    <input type="text" name="Note"   id='no' value="<?php echo $data['Write_anote'] ?>" placeholder="Enter data" Required>
    <input type="text" name="DATA"   id='no' value="<?php echo $data['data'] ?>" placeholder="Enter Time" Required>
   
    <input type="submit" name="delete"  id='no' value="delete">
  </center>
</form>