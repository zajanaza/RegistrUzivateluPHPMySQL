<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  include "menu.php";
  ?> 
  <form action="prihlaseniverify.php" method="POST">
    <div>
      <label for="login">Login: </label>
      <input type="text" name="prihl_jmeno">
    </div>
    <div>
      <label for="heslo">Password: </label>
      <input type="password" name="heslo">
    </div>
    <div>
      <input type="submit" value="Sign in">
    </div>
  </form>
  <div><?php echo menu() ?></div> 
</body>
</html>