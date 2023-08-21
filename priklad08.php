<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?<, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function kalkulacka(string $operace,int $prvni,int $druhy) : float {
    switch ($operace){
      case "+" : return $prvni + $druhy;
      case "-" : return $prvni - $druhy;
      case "*" : return $prvni - $druhy;
      case "/" :  if($druhy == 0)
        return 0; else return $prvni / $druhy;
    } 
  }  
  ?>
  <div>Výsledek = <?php echo kalkulacka("/", 1, 0) ?></div>
</body>
</html>