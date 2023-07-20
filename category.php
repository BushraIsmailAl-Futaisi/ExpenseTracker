<?php
if(isset($_POST['submit'])){

$gory=$_POST['Addcategory'];
echo"<br>";
echo "$gory";
$value=$_POST['Mony'];
echo"<br>";
echo "$value";
//$_SESSION['value']=$value;
//echo$_SESSION['value'];
echo"<br>";
$Soucer=$_POST['Soucer'];
echo"<br>";
echo "$Soucer";
$Note=$_POST['note'];
echo"<br>";
echo "$Note";
$TIME=$_POST['TIME'];
echo"<br>";
echo "$TIME";
$DATA=$_POST['DATE'];
echo"<br>";
echo"$DATA";

}
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
       echo' its connected';
    }
      
   session_start();
    $id=$_SESSION['Id_number'];
    $query = "INSERT INTO addcategory (user_id,category,mony,soucer_mony,Data,Time ,Write_a_note ) 
     VALUES ('$id','$gory','$value','$Soucer','$DATA','$TIME','$Note')";
       $result = $conn->query($query);
        //echo "$query";

    if ($result) {
        echo  "<p>inserted into the database.</p>";
           header("REFRESH:5;Home page.php");
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
          header("REFRESH:3;Add category.php");
    }   
  
       //close connection
       $conn -> close();
       

       

  ?>
</body>
</html>

