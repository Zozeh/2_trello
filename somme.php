<!DOCTYPE html>
<html>
<head>
	<title>Somme de deux nombres</title>
</head>
<body>
	<form action="somme.php" method="POST">
		<input type="number" name="nb1" placeholder="Entrez un nombre entier"> <br>
		<input type="number" name="nb2" placeholder="Entrez un deuxième nombre"> <br>
		<input type="submit" value="Résultat">
	</form>
</body>
</html>

<?php 
$var1=htmlspecialchars($_POST["nb1"]);
$var2=htmlspecialchars($_POST["nb2"]);
$somme= $var1 + $var2;
echo $somme;
 ?>