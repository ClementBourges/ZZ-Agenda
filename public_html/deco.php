<?php 
	session_start();
	extract($_GET);
?>
<html>
<meta charset="utf-8">
<body>

<br>

<?php 
	/* Close session */
	$_SESSION['U']=0;
	$_SESSION['A']=0;
?>
<?php include('./header.php'); ?>
<a href="./index.php?lang=<?php echo $lang; ?>"> <h2><?php echo $retour; ?></h2></a>

<?php
include("footer.php");
?>
</body>
</html>
