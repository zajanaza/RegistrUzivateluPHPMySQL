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
      <li><a href='registrace.php'>Registration</a></li>
      <li><a href='proRegistrovane.php'>For registrated only</a></li>
      <li><a href='odhlaseni.php'>Sign out</a></li>
    </ul>"     
  ;}
  ?>  
</body>
</html>