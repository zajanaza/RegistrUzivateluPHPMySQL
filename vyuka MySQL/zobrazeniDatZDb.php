<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<?php
if (!($con = mysqli_connect("localhost","eshop","heslo","eshop")))
{
  die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT p.id_produkt, nazev, popis, cena, COUNT(id_objednavka) AS pocet " .
"FROM produkt AS p LEFT JOIN objednavka AS o ON o.id_produkt = p.id_produkt " . 
"GROUP BY p.id_produkt, nazev, popis, cena"
)))
{
  die("Nelze provést dotaz.</body></html>");
}
?>
<h1>Nabídka</h1>
<?php
while ($radek = mysqli_fetch_array($vysledek))
{
?>
<h2><?php echo $radek["nazev"];?></h2>
<dl>
	<dt>Cena:</dt>
	<dd><?php echo $radek["cena"];?> Kč</dd>
</dl>
<p><?php echo $radek["popis"];?></p>
<form method="POST" action="objednat.php">
	<input type="hidden" name="produktId" value="<?php echo $radek["id_produkt"];?>">
	<input type="submit" value="Objednat">  
    <?php 
    if (!($con = mysqli_connect("localhost","eshop","heslo","eshop")))
    {
    die("Nelze se připojit k databázovému serveru!</body></html>");
    }
    mysqli_query($con,"SET NAMES 'utf8'");
    if (!($vysledek2 = mysqli_query($con,"SELECT COUNT(id_objednavka) AS pocet FROM objednavka")))
    {
      die("Nelze provést dotaz.</body></html>");
    }    
    ?>
    <p>Množství objednávek: </p>
    <?php echo $radek["pocet"];?>
</form>
<?php   
}
mysqli_free_result($vysledek);
mysqli_close($con);
?>
</body>
</head>