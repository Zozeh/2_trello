<!DOCTYPE html>
<html>
<head>
	<title>Nom et prenom</title>
</head>
<body>
	<form action="nomPrenom.php" method="POST">
		<input type="text" name="txt1" placeholder="Entrez votre nom"> <br>
		<input type="text" name="txt2" placeholder="Entrez votre prénom"> <br>
		<input type="submit" value="Afficher">
	</form>
</body>
</html>

<?php 
$var1=htmlspecialchars($_POST["txt1"]);
$var2=htmlspecialchars($_POST["txt2"]);
echo $var1 . ' ' . $var2;
 ?>