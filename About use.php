
<!--Bushra Ismail Al-Futaisi-->
<!-- This page contains information about the Expense Tracking website-->

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="C:\xampp\htdocs\php\icon\search.png"/>
    <meta charset="UTF-8". />
    <meta name=" About use" content="هذه صفحة تحتوي علي معلومات عن تتبع النفقات "/ >
    <title>About use </title>
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


</head>


<body>
    <header>
      <br>
         <a href= "../ExpenseTracker/Home page.php"><strong>Return</strong></a>
<center><h1>information about expense track </h1></center>
      
    </header>
<main>
    <div style="background-color: rgb(250, 215, 215);">
   <h2> Stop losing receipts</h2>
   <h3> Upload all receipts directly into the expense record.</h3>
   <h3> Employees can easily attach copies of their receipts directly to an </h3>
   <h3> expense record to avoid losing them. Add attachments on the go with </h3>
    <h3>any mobile device by taking a picture of the receipt and sending to a  </h3>
    <h3>designated email address. Save time and increase efficiency by  </h3>
    <h3> keeping a clean and complete record of all expenses.</h3>
    <hr/>
</div>
     <div style="background-color: rgb(255, 193, 193);">
    <h2>Manage expenses per team</h2>
    <h3> Have a clear overview of a team's expenditures.</h3>
    <h3>As a manager, easily follow expense records across the entire team </h3>
    <h3> to keep an eye on costs and ensure they keep on target and within  </h3>
     <h3>budget.  </h3>
     <hr/>
    </div>
<div style="background-color: rgb(250, 142, 142);">
     <h2>About this site</h2>
     <h3>It is a simple money management website to manage money and  </h3>
     <h3>keep track of your daily spending and expenses. Learning where you</h3>
     <h3>spend money the most with the help of our budgeting system can</h3>
     <h3>help you control spending and save more money.</h3>
       </div>
    </main>

</body>


</html>