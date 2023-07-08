<?php
if(isset($_POST['submit']))
{$category=$_POST['Addcategory'];
$mony=$_POST['mony'];
$Soucer=$_POST['soucer'];
$Note=$_POST['note'];
$File=$_POST['file'];
$Data=$_POST['Data'];
$Time=$_POST['Time'];}
//mony soucer Addcategory Write a note  file Time Data
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
       echo' its connection';
    }
    
       
    
    $query = "INSERT INTO add category (category,soucer_mony,Data,Time,Write_a_note,Add_image)  VALUES 
    ('$category','$Soucer','$Data','$Time','$Note','$File')" ;
       // $result = $conn->query($query);
       
  
    if (!$query) {
        echo  "<p>you inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       //close connection
       $conn -> close();
  
      /* UserName Email  
       password
       agin */

  ?>
</body>
</html>


   





}





}






?>