<!--Bushra Ismail Al-Futaisi-->
<!--This page is for me to add expenses to my categories
The link to access it is(view_category.php)-->
<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" mony" content="This is the Money page is for a User" / >
    <title>Expense tracke </title>
    <link rel="stylesheet"href="css\forall.css">
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
    $Mony1 = $_POST['mony'];
    $soucer= $_POST['soucer_mony'];
    $DATA = $_POST['Data'];
    $TIME = $_POST['Time'];
    $note = $_POST['Write_a_note'];
    $TIME = $_POST['Time'];
    /////////////////////////////////
    $mony2=$_POST['Mony'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];
    // echo"$query";
    // echo"<br>";
      try{
        if($mony2 >  $Mony1){ 
          throw new Exception("erorr the money more than in the mone in category ");
        } 

    else{
      
    $id=$_SESSION['Id_number'];
     $query = "INSERT INTO financial_amount(username_id,number_addcategory,expenses,Write_anote,data)  VALUES 
     ('$id','$num','$mony2','$Note','$Data')" ;
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
     
    // $_SESSION['mony']=$Mony; 
     $newMony=$Mony1-$mony2;
     
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
  }
  catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
}



?>
 </head>
 
<body     style="background-color:  rgba(250, 31, 31, 0.080)">
<header>
<p><a href= "../ExpenseTracker/Serch_category.php"><strong>Return</strong></a></p>
</header>
<br>
<form method="POST" style="background-color:  rgba(250, 31, 31, 0.080)">
<center>      <p> <label>name category</label>
             <select   id='st' name="category"  value="">
             <option value=""><?php echo $data['category']?></option>
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
             </p>
           </select>

               <label>soucer_mony</label>
           <select id="st"   name="soucer_mony" >
            <option value="" ><?php echo $data['soucer_mony'] ?></option>
             <option value="card" >card</option>
             <option value="salary">salary</option>
             <option value="savings">savings</option>
           </select> 
           <label>mony</label>
    <input type="text" name="mony" id='no' value="<?php echo $data['mony'] ?>" placeholder="Enter the mony">
           <label>Data</label>
    <input type="text" name="Data" id='no' value="<?php echo $data['Data'] ?>" placeholder="Enter data" ></p>
         <p> <label>Time</label>
    <input type="text" name="Time"  id='no' value="<?php echo $data['Time'] ?>" placeholder="Enter Time" >
       <label>Write_a_note</label>
    <input type="text" name="Write_a_note"  id='no' value="<?php echo $data['Write_a_note'] ?>" placeholder="Enter note" ></p>
</br>
       <br>
       <div> 
          <label>The mony </label>
          <p><input type="text"   name="Mony"  id='no' min="1"  placeholder="Enter the mony" required ></p> 
       </div>
      
           <label> note </label>
             <p><input type="text"    name="Note" id='no'  placeholder="Enter the commnt" ></p>
        </div> 
       
        <div> 
             <label> Data </label>
             <p><input type="date"    name="DATA" id='no' required  ></p>
        </div> 
       
       <div> 
       
             <input type="submit" name="submit" id='no' value="save">
             <input type="reset"  name="reset" id='no' value="Delete all">
      </div> 
      
</br>
      
</center> 

</form>
</body>
</html>


          
         