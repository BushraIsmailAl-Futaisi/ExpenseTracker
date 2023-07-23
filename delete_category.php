
<!--
  Bushra Ismail Al-Futaisi
  This page deletes the category from the database from a table(addcategory)
  and deletes  from a table (financial_amount)
  The link to access it is(view_category.php)
-->

<!DOCTYPE html>
<html>
    <head> <a href= "../ExpenseTracker/Serch_category.php"><strong>Return</strong></a>
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
       $id=$_SESSION['Id_number'];
      }
    ?>

    
  </center>
</html>
<?php

$num=$_GET['number_category'];
require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);
/*****************************/ 
$qu= "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE number_category='$num' AND user_id ='$id'";
    $result2 = $conn->query($qu); // fetch data
     if (!$result2) {
     echo "<p>Unable to execute the query.</p> ";
     echo $query;
    die($conn->error);
     }
     ////////////
    $data= $result2->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['delete'])) // when click on Update button
{       
    $Cate = $_POST['category'];
    $Mony = $_POST['mony'];
    $soucer= $_POST['soucer_mony'];
    $DATA = $_POST['Data'];
    $TIME = $_POST['Time'];
    $note = $_POST['Write_a_note'];
    $TIME = $_POST['Time'];
    
     
     $query2 ="Delete from financial_amount where username_id='$id'AND number_addcategory='$num' ";
     $delete2=  $conn->query($query2);
////////////////////////////////////////////////
     $query1 ="Delete from addcategory where user_id ='$id' AND number_category='$num'";
     $delete1 =  $conn->query($query1);
     if($delete1)
     {
         $conn->close();// Close connection
         header("location:Home page.php"); 
         exit;
     }
     else
     {
         echo "<p>Unable to execute the query.</p> ";
         echo $query1;
         die ($conn -> error);

     }   
     
    }

?>
 <center>
  <h1>delete data</h1>
 <form method="POST">
 
    <select  id='st' name="category"  value="">
            <p><option value="" ><?php echo $data['category']?></option>
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
             </p>
           </select>

           
           <select id="st"   name="soucer_mony" required>
            <option value="" ><?php echo $data['soucer_mony'] ?></option>
             <option value="card" >card</option>
             <option value="salary">salary</option>
             <option value="savings">savings</option>
           </select> 


    <input type="text" name="mony" id='no' value="<?php echo $data['mony'] ?>" placeholder="Enter the mony" Required>
    <input type="text" name="Data" id='no' value="<?php echo $data['Data'] ?>" placeholder="Enter data" Required>
    <input type="text" name="Time"  id='no' value="<?php echo $data['Time'] ?>" placeholder="Enter Time" Required>
    <input type="text" name="Write_a_note" value="<?php echo $data['Write_a_note'] ?>" placeholder="Enter note" Required>

    <input type="submit" name="delete" id='no' value="delete">
  </center>
  
</form>