<!DOCTYPE html>
<html>
<head>
  <title>expensetracker</title>
  
</head>
<body>
  <h1>welcome to expensetracker</h1>
 
  
  <?php
  //Mony Soucer  Note  DATA  FILE
   $mony=$_POST['Mony'];
   $Soucer=$_POST['Soucer'];
   $Note=$_POST['Note'];
    $Data=$_POST['DATA'];
    $file=$_POST['FILE'];

    // create short variable names
    
    
require_once 'database.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
       echo' it`s connected';
    }
    
       
    
    $query = "INSERT INTO financial_amount ( expenses,soucer_mony,Write_anote,data,Add_image)  VALUES 
    ( $mony, $Soucer,$Note,$Data,$file)" ;
        $result = $conn->query($query);
       
  
    if ($result) {
        echo  "<p>you inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       //close connection
       $conn -> close();
       header("REFRESH:3;Home page.php");
  
     
  ?>
</body>
</html>