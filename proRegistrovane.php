<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proRegistrovane</title>
</head>
<body>
  <?php
    include "menu.php";
    echo menu();
  ?>
  <h1>Pro registrované</h1>
  <?php
    session_start();
    if($_SESSION["username"] == "")
    {
      die ("<a href='prihlaseni.php'>Prosím přihlašte se</a>");
    }
    else{
      echo "Jste přihlášeni";
    }
  ?>  
</body>
</html>