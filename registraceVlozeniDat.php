<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
include "dblogin.php";
include "menu.php";
?>
<?php
  if (!($con = mysqli_connect($host,$user,$password,$db)))
  {
    die("Connection to DB server not possible!</body></html>");
  }
  mysqli_query($con,"SET NAMES 'utf8'");
  if (mysqli_query($con,
      "INSERT INTO uzivatele(jmeno, prijmeni, prihl_jmeno, heslo) VALUES('" .
      addslashes($_POST["jmeno"]) . "', '" .
      addslashes($_POST["prijmeni"]) . "', '" .
      addslashes($_POST["prihl_jmeno"]) . "', '" .
      addslashes($_POST["heslo"]) . "')"))
  {
    echo "Successcully added";
    session_start();
    $_SESSION["username"]=$_POST["prihl_jmeno"];
    echo menu();
  }
  else
  {
    echo "Not possible to process! " . mysqli_error($con);
  }
  mysqli_close($con); 
?>
</body>
</html>