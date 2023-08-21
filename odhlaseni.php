<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>odhlaseni</title>
</head>
<body>
  <h1>Odhlášení</h1>
  <?php
  include "menu.php";
  ?>
  <!-- <div><?php echo menu() ?></div> -->
   <?php
   session_start();
   //echo $_SESSION["username"];
   $_SESSION["username"] = "";
   //echo $_SESSION["username"];
   echo "Byl jste odhlášen";
   echo "<div><br /><a href='prihlaseni.php'>Znovu přihlásit</a></div>";
   echo menu();
   ?>
</body>
</html>