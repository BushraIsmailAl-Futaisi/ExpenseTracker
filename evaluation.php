<!--
  Bushra Ismail Al-Futaisi
  This page to evaluation username from the database from a table(evaluation)
  
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
<form  method="POST"   style="background-color:  rgba(250, 31, 31, 0.075);width: 100%; height: 10%;">
         
       <center>
       <div> 
          <label>number_evaluation</label>
         <p><input type="number"  id='no'  name="num"   min='1'  max='5'  required ></p> 
       </div>
       <div>
              <label >Write a note</label>
       <p> <input type="text" name="note" id='no'  placeholder="Write a note"  > </p>
        
        </div>
             <input type="submit"  id='no' name="send" value="send">
             <input type="reset"  id='no' name="reset" value="Delete all">
    </center>
</form>
  </body>
</html>

<?php
if (isset($_POST['send'])){
$number=$_POST['num'];
$note=$_POST['note'];


 
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
   echo "<p>Error: Could not connect to database.<br/>
   Please try again later.</p>";
     die($conn -> error);
 }
 else{
  echo'<br>';
   // echo' it`s connected';
 }
 $id=$_SESSION['Id_number'];
 $qurey2= "SELECT count_E,id_E,number,note FROM evaluation WHERE id_E='$id' ";
     $result3 = $conn->query($qurey2); // fetch data
      try{
     $data2 = $result3->fetch_array(MYSQLI_ASSOC);
    
   if(!empty($data2['id_E']))
     {
      echo'<br>';
      throw new Exception("I've done an appraisal before you only have once");
      
     
     }
     else{
 
 $query="INSERT INTO evaluation (id_E,number,note)  VALUES 
 ('$id','$number','$note')" ;
     $result = $conn->query($query);
     

 if ($result) {
     echo  "<p>you inserted into the database.</p>";
 } else {
     echo   $conn -> error ;
     echo   "<br/>.The item was not added.";
     echo    "<br/>$query ";
     header("REFRESH:3;Home page.php");
 }


    //close connection
    $conn -> close();
    header("REFRESH:3;Home page.php");
  }
}
catch (Exception $e) {
  echo 'Message: ' . $e->getMessage();
  header("REFRESH:3;Home page.php");

}
}
?>








