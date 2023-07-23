
<!--Bushra Ismail Al-Futaisi
This page is to log out the user
The link to access it is(Home page.php)
-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"href="css\forall.css">
</head>
<body   style="background-color: rgb(250, 215, 215);">
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