<!--Bushra Ismail Al-Futaisi-->
<!--This is the homepage of the Expense Tracking website in html-->
<!DOCTYPE html>
<html>
<head>
  
    <link rel="icon" href="C:\Users\DELL\Desktop\cs315\cs315(3)\Html\icon\wallet (2).png"/>
    <meta charset="UTF-8". />
    <meta name=" الصفحةالرئسية" content="هذه الصفحة الرئسية  الخاصة بي موقع تتبع النفقات Expense tracker" / >
    <title>Expense tracker </title>
   <link rel="stylesheet"  herf="C:\xampp\htdocs\php\css\home.css">
    <link rel="stylesheet"href="css\home.css">
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
  <hr/>
</head>
<body>

<header>
        <button> <a href="../ExpenseTracker/Signup.php" ><strong>signup </strong></a></button>
        <button><a href= "../ExpenseTracker/login.php"> <strong>logoin</strong></a></button>
         <button> <a href= "../ExpenseTracker/signout.php"><strong>signout</strong></a></button>
         <button> <a href= "../ExpenseTracker/About use.php"><strong>About use</strong></a></button>
        
       
         <button> <a href= "../ExpenseTracker/Add category.php"><strong>Add category</strong></a></button>
         <button> <a href= "../ExpenseTracker/Edit_username.php"><strong> Edit Username</strong></a></button>
         <button> <a href= "../ExpenseTracker/view_category.php"><strong> Edit category</strong></a></button>
        <center><label>Search</label>
        <input type="search"  placeholder="write the search"></center>
        <h2>Expense tracker</h2>
        <h5>At a Glance </h5>
        <h5>This is a simple money</h5>
        <h5> management website</h5>
   
     <div>
     <center> <img alt="picture"src= "../ExpenseTracker\pictures\Data report-pana.svg"style="width:50%;" / ></center>
    </div>
       
      <hr/>    
</header> 

<footer>
    <hr/>
    <center align="right">Expense traks@gmail.com</center>
    <center align="left" >contact information</center>
    <center align="left" ><p>call in 092-556-36  <img alt="telephone"src="../ExpenseTracker\icon\telephone-call.png"style="width:2%;" / ></p></center>
    <center align="left"><p>Copyright Notice</p></center>
    <center align="left"> &copy;</center>
    <center> <img alt="telegram"src= "../ExpenseTracker\icon\telegram.png"style="width:2%;" / ></center>
    <center><img alt="twitter "src="../ExpenseTracker\icon\twitter-sign.png" style="width: 2%;" / ></center>
    <center><img alt="pinterest "src= "../ExpenseTracker\icon\pinterest.png" style="width: 2%;" / ></center>
    <center> <img alt=" facebook"src="../ExpenseTracker\icon\facebook.png" style="width:2%;" / ></center>
    <center><img alt=" instagram"src="../ExpenseTracker\icon\instagram-symbol.png" style="width: 2%;" / ></center>
    <center><img alt=" telegram"src="../ExpenseTracker\icon\telegram.png" style="width: 2%;" / ></center>
    
</footer>


</body>
</html>