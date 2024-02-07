<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>forRegistered</title>
</head>
<body>
  <?php
    include "menu.php";
    echo menu();
  ?>
  <h1>For registered only</h1>
  <?php
    session_start();
    if($_SESSION["username"] == "")
    {
      die ("<a href='prihlaseni.php'>Please sign in</a>");
    }
    else{
      echo "You are logged in";
    }
  ?>  
</body>
</html>