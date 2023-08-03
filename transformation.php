<!--Bushra Ismail Al-Futaisi
To transfer money from one category to another
-->

<!DOCTYPE html>
<html>
<head>
  
    <meta charset="UTF-8". />
    <meta name=" Create an account" content="This is the account creation page on the Expense tracking website" / >
    
    <link rel="stylesheet"href="css\forall.css">
    <title>Expense tracke </title>
    
     
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
</head>
<body     style="background-color:  rgba(250, 31, 31, 0.080)">
<header>
  <p>
<a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
</header>

<?php
$cate=$_GET['category'];
$num=$_GET['number_category'];
$id=$_SESSION['Id_number'];

require_once 'database.php'; 
$conn = new mysqli($hn, $un, $pw, $db);
$qu= "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE number_category='$num'AND category='$cate' ";
    $result2 = $conn->query($qu); // fetch data
     if (!$result2) {
   // echo "<p>Unable to execute the query.</p> ";
   // echo $query;
    die($conn->error);
     }
    
    $data1 = $result2->fetch_array(MYSQLI_ASSOC);
    
    $frist=$data1['mony'];
   // echo"<br>";
     //echo$frist;
   //////////////
    if (isset($_POST['transformation'])){
      $data=$_POST['date'];
      $note=$_POST['Write'];
     $transcate=$_POST['tocategory'];
      $Mony5=$_POST['Mony2'];
      //echo"<br>";
      //echo$Mony5;
      
     $qurey= "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE category='$transcate' AND user_id='$id' ";
     $result3 = $conn->query($qurey); // fetch data
     if (!$result3) {
     // echo "<p>Unable to execute the query.</p> ";
      // echo $query;
     die($conn->error);
     }
     //////////////
              
      
    $data2 = $result3->fetch_array(MYSQLI_ASSOC);
    
   
    try{
      if($Mony5 >  $frist ){ 
        throw new Exception("erorr the money more than in the mone in category ");
      } 

  else{
   // echo"<br>";
    //echo$new;
    if( $Mony5 < 0 ){ 
        echo "the mony cant be negtive-";
       } 
       else{
         $new=$data2['mony'];
    $frist1=$frist-$Mony5;
    //echo"<br>";
   // echo $frist1;
    $new_one=$new+$Mony5;
    //echo"<br>";
    //echo$new_one;
    $query6 = "INSERT INTO transformation (id_trans,from_category,mony1,to_category,mony2,Write_a_note,data)  VALUES 
    ('$id','$cate','$frist','$transcate','$Mony5','$note','$data')";
        $result6 = $conn->query($query6);
  
    
    $query = "update addcategory set mony='$new_one' where  category='$transcate' AND user_id='$id'";
    $edit1 = $conn->query($query);
       
    
    $query4 = "update addcategory set mony='$frist1' where category='$cate' AND user_id='$id'";
    $edit2 = $conn->query($query4);
     if($edit2)
     {
       header("REFRESH:3;Home page.php");
   
     }
       }
  }
  }
    catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();}

  
    }
 
?>
<form method="POST" >
<center>
       
       </div>
        <h3>transformation</h3>
       <div> 
          <label>from category </label>
    <select  id='st' name="category"  value="">
            <p><option value="" ><?php echo $data1['category']?></option>
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
             
           </select>
       </div>
        <div> 
             <label> mony </label>
            <p><input type="text" id='no'  min='1'  name="Mony"  value="<?php echo   $data1['mony'] ?>" required></p>

        </div> 
       
       <div> 
        <p>
          <label> to the category </label>
          <select  id='st' name="tocategory"  value="tocategory">
             <p><option value="Clothes" >Clothes</option>
             <option value="Car">Car</option>
             <option value="stady">stady</option>
             <option  value="Hospital"> Hospital</option>
             <option value=" Wifi"> Wifi</option>
             <option  value="Travel">Travel</option>
             
           </select> </p>
       </div>
      
        <div> 
             <label> transformation mony </label>
            <p><input type="text" id='no'   min='1'  name="Mony2"  placeholder="Enter the mony" required></p>
            
        </div>
        <div> 
             <label> Write_a-note </label>
            <p><input type="text" id='no'    name="Write"  placeholder="Enter the Write_a-note " required></p>
            
        </div>  
        <div> 
             <label> date</label>
            <p><input  type="date" id='no'    name="date"   required></p>
            
        </div>  
        <div> 
       
             <input type="submit"  id='no' name="transformation" value="transformation">
             <input type="reset"  id='no' name="reset" value="Delete all">
      </div> 
        
</center>
</form>
</html>