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
		"INSERT INTO objednavka(jmeno, ulice, mesto, psc, id_produkt) VALUES('" .
		addslashes($_POST["jmeno"]) . "', '" .
		addslashes($_POST["ulice"]) . "', '" .
		addslashes($_POST["mesto"]) . "', '" .
		addslashes($_POST["psc"]) . "', '" .
		addslashes($_POST["produktId"]) . "')"))
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