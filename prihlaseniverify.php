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
  $priJm = addslashes($_POST["prihl_jmeno"]);
  $heslo = addslashes($_POST["heslo"]);
  //echo "$priJm"."$heslo";
  if (!($con = mysqli_connect($host,$user,$password,$db)))
  {
  die("Connection to DB server not posible!</body></html>");
  }
  mysqli_query($con,"SET NAMES 'utf8'");
  if (!($vysledek = mysqli_query($con, "SELECT jmeno, prihl_jmeno, heslo FROM uzivatele WHERE uzivatele.prihl_jmeno='$priJm'"
  )))
  {
    die ("Nelze provést dotaz.</body></html>");
  };
  //while ($prihlaseni = mysqli_fetch_array($vysledek))
  $prihlaseni = mysqli_fetch_array($vysledek);
  if($prihlaseni == 0)
  {
    echo "Incorrect login";
    echo menu(); 
  }
  else
  {
    //echo $prihlaseni["prihl_jmeno"];
    //echo $prihlaseni["heslo"];
    //echo $prihlaseni["jmeno"];  
    if($prihlaseni['prihl_jmeno'] == $priJm && $prihlaseni['heslo'] == $heslo) 
    {
      echo "<a href='proRegistrovane.php'>You are logged in</a>";
      session_start();
      $_SESSION["username"]=$priJm;
      //echo $_SESSION["username"];      
      echo menu();
    }
    else
    {
      echo "Incorrect password";
      echo menu();
    };
  };     
  mysqli_free_result($vysledek);
  mysqli_close($con);
  ?>

</body>
</html>