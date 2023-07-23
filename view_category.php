<!--Bushra Ismail Al-Futaisi-->
<!-- This page is to display a table that is located in the database(addcategory) is category 
It opens to other pages  to edit the category (edit_category.php),
to delete the category(delete_category.php) ,to  add expense to the category(Expense.php)-->


<!DOCTYPE html>
<html>

<head>
  <title>Display all books from Database</title>
  <link rel="stylesheet"href="css\forall.css">
</head>
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
<body  style="background-color:  rgba(250, 31, 31, 0.080)">
<header>
  <p><a href= "../ExpenseTracker/Serch_category.php"><strong>Return</strong></a></p>
</header>
<center>
  <h2>ExpenseTracker</h2>
  <form  method="post"  style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;">
  
    <table border="2"  style="background-color:  rgba(250, 31, 31, 0.080)">
      <tr style="background-color:ivory">
        <td>user_id</td>
        <td>number_category</td>
        <td>category</td>
        <td>mony</td>
        <td>soucer_mony</td>
        <td>Time</td>
        <td>Data</td>
        <td>Write_a_note </td>
        <td>Edit</td>
        <td>Delete</td>
        <td>Expense</td>
      </tr>
    </center>
      <?php
       if(isset($_POST['serch'])){
        $cate=$_POST['Addcategory'];
    
 
     if (!$cate) {
        echo '<p>You have not entered search details.<br/>
        Please go back and try again.</p>';
        exit;
     }
      
       $id=$_SESSION['Id_number'];
      
      require_once 'database.php';
      $conn = new mysqli($hn, $un, $pw, $db); // Using database connection file here
      if ($conn->connect_error) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.<br/></p>';
        echo $conn->error;
        exit;
      }
     
      $query = "SELECT user_id,number_category,category,mony,soucer_mony,Data,Time,Write_a_note FROM addcategory WHERE user_id='$id' AND category='$cate'";
     // echo'<br>';
     //echo "$query";
      
      $result = $conn->query($query);
      if (!$result) {
         echo "<p>Unable to execute the query.</p> ";
          echo $query;
        die($conn->error);
      }
      // fetch data from database
     
      while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <tr>
          <td>
            <?php echo $data['user_id']; ?>
          </td>
          <td>
            <?php echo $data['number_category']; ?>
          </td>
          <td>
            <?php echo $data['category']; ?>
          </td>
          <td>
            <?php echo $data['mony']; ?>  
          </td>
          <td>
            <?php echo $data['soucer_mony']; ?>
          </td>
          <td>
            <?php echo $data['Data']; ?>
          </td>
             <td>
            <?php echo $data['Time']; ?>
            </td>
           <td>
            <?php echo $data['Write_a_note']; ?>
           </td>
          <td><a href="edit_category.php?number_category=<?php echo $data['number_category'];?>">Edit</a></td>
          <td><a href="delete_category.php?number_category=<?php echo $data['number_category'];?>">Delete</a></td>
          <td><a href="Expense.php?number_category=<?php echo $data['number_category'];?>">Add Expense</a></td>
          </td>

        </tr>
        <?php
      }}
      ?>
    </table>
    

  </form>
</body>

</html>