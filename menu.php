<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
</head>
<body>  
  <?php
  function menu () {
    echo "
    <ul>
      <li><a href='registrace.php'>Registrace</a></li>
      <li><a href='proRegistrovane.php'>Pro registrované</a></li>
      <li><a href='odhlaseni.php'>Odhlásit se</a></li>
    </ul>"     
  ;}
  ?>
  <div><?php echo menu() ?></div>  
</body>
</html>