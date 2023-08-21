<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="vlozeniDoObjednavky.php">
	Jméno:
	<input name="jmeno" type="text" ><br>
	Ulice:
	<input name="ulice" type="text" ><br>
	Město:
	<input name="mesto" type="text" ><br>
	PSČ:
	<input name="psc" type="text" ><br>
	<input name="produktId" type="hidden" value="<?php echo htmlspecialchars($_POST["produktId"]);?>"><br>
	<input type="submit" value="Objednat" >
</form>
</body>
</html>