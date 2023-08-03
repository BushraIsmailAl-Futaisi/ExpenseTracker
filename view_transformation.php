<!--Bushra Ismail Al-Futaisi
To show all the  transfer money from one category to another
-->

<!DOCTYPE html>
<html>
<head>
  
    
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
<p><a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a></p>
<header>

<form  method="post"  style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;">
<center>
  <h1>transformation</h1>
  <table border="2"  style="background-color:  rgba(250, 31, 31, 0.080)">
    <tr style="background-color:ivory">
      
      <td>from_category</td>
      <td>mony1</td>
      <td>to_category</td>
      <td>mony2</td>
      <td>Write_a_note</td>
      <td>data </td>
      
    </tr>
    </center>
</header>
<?php
 require_once 'database.php';
 $conn = new mysqli($hn, $un, $pw, $db); // Using database connection file here
 if ($conn->connect_error) {
   echo '<p>Error: Could not connect to database.<br/>
Please try again later.<br/></p>';
   echo $conn->error;
   exit;
 }
$id=$_SESSION['Id_number'];
$query = "SELECT id_trans,count1,from_category,mony1,to_category,mony2,Write_a_note,data  FROM transformation WHERE id_trans='$id'";
 
 $result = $conn->query($query);
 if (!$result) {
    echo "<p>Unable to execute the query.</p> ";
     echo $query;
   die($conn->error);
 }
while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <tr>
          <td>
            <?php echo $data['from_category']; ?>
          </td>
          <td>
            <?php echo $data['mony1']; ?>
          </td>
          <td>
            <?php echo $data['to_category']; ?>
          </td>
          <td>
            <?php echo $data['mony2']; ?>  
          </td>
          <td>
            <?php echo $data['Write_a_note']; ?>
          </td>
          <td>
            <?php echo $data['data']; ?>
          </td>
        </tr>
        <?php
}
?>


