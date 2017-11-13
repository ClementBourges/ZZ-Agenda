<?php 
	session_start();
?>
<html>
<meta charset="utf-8">
<body>

<br>

<?php 

	$_SESSION['U']=0;
	$_SESSION['A']=0;
	echo "Déconnexion réussie";
?>
<a href="./index.php"> <p>Retour à l'écran de connexion</p></a>
</body>
</html>
