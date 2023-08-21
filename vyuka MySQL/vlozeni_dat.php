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
if (mysqli_query($con,
		"INSERT INTO produkt(nazev, cena, popis) VALUES('" .
		addslashes($_POST["nazev"]) . "', '" .
		addslashes($_POST["cena"]) . "', '" .
		addslashes($_POST["popis"]) . "')"))
{
	echo "Úspěšně vloženo.";
}
else
{
	echo "Nelze provést dotaz. " . mysqli_error($con);
}
mysqli_close($con); 
?>
</body>
</html>