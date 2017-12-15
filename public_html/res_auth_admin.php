<?php 
	session_start();
	extract($_GET);
	echo $lang;
?>
<html>
<meta charset="utf-8">
<body>

<br>
<?php 
include('./fonctions.php');

if (Auth($_POST["login"],$_POST["password"],"./db/adminpass.txt")==1)
{
	$_SESSION['A']=1;
	header('Location: ./agendadmin.php?lang='.$lang);
  	exit();
}
else
{
	echo "Accès refusé";
}

?>

</body>
</html>
