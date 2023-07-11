<!DOCTYPE html>
<html>
<head>
  <!--<p><button> <a href= "../ExpenseTracker/Home page.php"><strong>Home page</strong></a></button></p>-->
</head>
<body>
    <h1><center> You are now not registered in the site</center></h1>
    <h1><center> You have been logged out of a page</center></h1>
   
</body>
</html>
<?Php
session_start();
session_unset();
session_destroy();
 header("REFRESH:3;Home page.php");
?>