<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registrace</title>
</head>
<body>
  <h1>Registrace</h1>
  <?php
  include "menu.php";  
  ?>
  <form action="registraceVlozeniDat.php" method="POST">
    <div>
      <label for="input1">Jméno: </label>
      <input id="input1" type="text" name="jmeno">
    </div>
    <div>
      <label for="input2">Příjmení:  </label>
      <input id="input2" type="text" name="prijmeni">
    </div>
    <div>
      <label for="input3">Login: </label>
      <input id="input3" type="text" name="prihl_jmeno">
    </div>
    <div>
      <label for="input4">Heslo: </label>
      <input id="input4" type="password" name="heslo">
    </div>
    <div>
      <input type="submit" value="Registrovat">
    </div>
  </form>  
</body>
</html>