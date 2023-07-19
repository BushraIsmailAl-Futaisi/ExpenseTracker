<!--Bushra Ismail Al-Futaisi-->
<!--This is the Expense page on the Expense tracking website-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" mony" content="This is the Money page is for a User" / >
    <title>Expense tracke </title>
    <button>  <a href= "../ExpenseTracker/view_category.php"><strong>Return</strong></a></button>
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
   
  <?php

$num=$_GET['number_category'];

require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
  echo "<p>Error: Could not connect to database.<br/>
  Please try again later.</p>";
    die($conn -> error);
}

$quer1 = "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE number_category='$num'"; // select query

$SHOW = $conn->query($quer1); // fetch data
if (!$SHOW) {
   // echo "<p>Unable to execute the query.</p> ";
   // echo $query;
    die($conn->error);
}
$data = $SHOW->fetch_array(MYSQLI_ASSOC);
if (isset($_POST['submit'])) // when click on Update button
{
    $Cate = $_POST['category'];
    $Mony = $_POST['mony'];
    $soucer= $_POST['soucer_mony'];
    $DATA = $_POST['Data'];
    $TIME = $_POST['Time'];
    $note = $_POST['Write_a_note'];
    $TIME = $_POST['Time'];
    /////////////////////////////////
    $mony=$_POST['Mony'];
   $Soucer=$_POST['Soucer'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];
    // echo"$query";
    // echo"<br>";
    $id=$_SESSION['Id_number'];
     $query = "INSERT INTO financial_amount(username_id,number_addcategory,expenses,soucer_mony,Write_anote,data)  VALUES 
     ('$id','$num','$mony','$Soucer','$Note','$Data')" ;
     //echo'<br>';
    // echo $query;
     //echo'<br>';
         $result = $conn->query($query);
        
   
     if ($result) {
         echo  "<p>you inserted into the database.</p>";
     } else {
         echo   $conn -> error ;
         echo   "<br/>.The item was not added.";
         echo    "<br/>$query ";
     }
     
     $_SESSION['mony']=$Mony; 
     $newMony=$Mony-$mony;
     $updata="update addcategory set mony='$newMony' where  number_category='$num'";
     $edit = $conn->query($updata);
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
        //close connection
        $conn -> close();
    
}


?>
 </head>

<body     style="background-color:  rgba(250, 31, 31, 0.080)">
<br>
<form method="POST"  style="background-color:  rgba(250, 31, 31, 0.080)">
    <select  name="category"  value="<?php echo $data['category']?>">
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
             </p>
           </select>

    <input type="text" name="mony" value="<?php echo $data['mony'] ?>" placeholder="Enter the mony" Required>
    <input type="text" name="soucer_mony" value="<?php echo $data['soucer_mony'] ?>" placeholder="Enter the soucer_mony" Required>
    <input type="text" name="Data" value="<?php echo $data['Data'] ?>" placeholder="Enter data" Required>
    <input type="text" name="Time" value="<?php echo $data['Time'] ?>" placeholder="Enter Time" Required>
    <input type="text" name="Write_a_note" value="<?php echo $data['Write_a_note'] ?>" placeholder="Enter note" Required>
</br>
       <br>
       <div> 
          <label>The mony </label>
          <p><input type="text"   name="Mony"  placeholder="Enter the mony" required ></p> 
       </div>
       <div> 
         <label>soucer_mony </label>
         <p><input type="text"   name="Soucer" placeholder="Enter the soucer_mony" ></p> 
         </div>
         
        <div> 
             <label> note </label>
             <p><input type="text"    name="Note"  placeholder="Enter the commnt" ></p>
        </div> 
       
        <div> 
             <label> Data </label>
             <p><input type="date"    name="DATA"  required  ></p>
        </div> 
       
       <div> 
       
             <input type="submit" name="submit" value="save">
             <input type="reset"  name="reset" value="Delete all">
      </div> 
      
</br>
      
      

</form>
</body>
</html>


          
         