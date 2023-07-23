<!--Bushra Ismail Al-Futaisi-->
<!-- This page is to display a table that is located in the database(financial_amount) 
is expense with the category 
It opens to other pages  to edit the category (Edit_Expense.php),
to delete the category(delete Expense.php) -->
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
  <p><a href= "../ExpenseTracker/serch_Expense.php"><strong>Return</strong></a></p>
</header>
<center>
  <h2>ExpenseTracker </h2>
  <form  method="post"  style="background-color:  rgba(250, 31, 31, 0.075); width: 100%; height: 10%;">

    <table border="2"  style="background-color:  rgba(250, 31, 31, 0.080)">
      <tr style="background-color:ivory">
        <td>user_id</td>
        <td>number_category</td>
        <td>number</td>
        <td>category</td>
        <td>expenses</td>
        <td>Write_anote</td>
        <td>Data</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
    </center>
      <?php
       if(isset($_POST['serch'])){
        $data1=$_POST['Data1'];
        $data2=$_POST['Data2'];
         $namec=$_POST['soon'];
     if (!$data1 || !$data2|| !$namec) {
        echo '<p>You have not entered search details.<br/>
        Please go back and try again.</p>';
        exit;
     }
     //////////////////////////
      
       $id=$_SESSION['Id_number'];
      
      require_once 'database.php';
      $conn = new mysqli($hn, $un, $pw, $db); // Using database connection file here
      if ($conn->connect_error) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.<br/></p>';
        echo $conn->error;
        exit;
      }
      $query ="SELECT financial_amount.username_id,financial_amount.number_addcategory,financial_amount.number,financial_amount.expenses,financial_amount.Write_anote,financial_amount.data,addcategory.category FROM financial_amount JOIN addcategory ON addcategory.number_category=financial_amount.number_addcategory WHERE financial_amount.username_id='$id' AND financial_amount.data BETWEEN '$data1' AND '$data2'AND addcategory.category ='$namec'";
      /*"SELECT username_id,number_addcategory,number,expenses,Write_anote,data FROM financial_amount WHERE username_id='$id' AND data  BETWEEN '$data1' AND '$data2'";
     // echo'<br>';*/
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
            <?php echo $data['username_id']; ?>
          </td>
          <td>
            <?php echo $data['number_addcategory']; ?>
          </td>
          <td>
            <?php echo $data['number']; ?>
          </td>
          <td>
            <?php echo $data['category']; ?>
          </td>
          <td>
            <?php echo $data['expenses']; ?>
          </td>
          <td>
            <?php echo $data['Write_anote']; ?>
          </td>
            <td>
            <?php echo $data['data']; ?>
           </td>

           <td><a href="Edit_Expense.php?number_addcategory=<?php echo $data['number_addcategory'];?>& number=<?php echo $data['number'];?>& expenses=<?php echo $data['expenses'];?>">Edit</a></td>
           <td><a href="delete Expense.php?number_addcategory=<?php echo $data['number_addcategory'];?>& number=<?php echo $data['number'];?>& expenses=<?php echo $data['expenses'];?>">Delete</a></td>
          </td>

        </tr>
        <?php
      }}
      ?>
    </table>
    

  </form>
</body>

</html>