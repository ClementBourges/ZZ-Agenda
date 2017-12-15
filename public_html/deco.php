<?php 
	session_start();
	extract($_GET);
?>
<html>
<meta charset="utf-8">
<body>

<br>

<?php 

	$_SESSION['U']=0;
	$_SESSION['A']=0;
?>
<?php include('./header.php'); ?>
<a href="./index.php?lang=<?php echo $lang; ?>"> <h2>Retour à l'écran de connexion</h2></a>

<?php
include("footer.php");
?>
</body>
</html>
