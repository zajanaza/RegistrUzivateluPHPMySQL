<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign out</title>
</head>
<body>
  <h1>Sign out</h1>
  <?php
  include "menu.php";
  ?>
  <!-- <div><?php echo menu() ?></div> -->
   <?php
   session_start();
   //echo $_SESSION["username"];
   $_SESSION["username"] = "";
   //echo $_SESSION["username"];
   echo "You have been signed out.";
   echo "<div><br /><a href='prihlaseni.php'>Login again</a></div>";
   echo menu();
   ?>
</body>
</html>