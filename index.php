<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Vilbrequin/communauté </title>
		<link rel="stylesheet"  href="style.css">
	</head>
<body>
<center>
<?php
			$pseudo=$_POST["pseudo"];
			$password=$_POST["mdp"];
			$moto=$_POST["moto"];
			echo "Hey ".$pseudo.", ta ".$moto." a l'air incroyable ! ";
			echo "ton mot de passe est ".$password." retiens le et viens sur notre serveur!"
		?>
</center>
</body>
</html>