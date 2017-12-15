<?php 
	session_start();
?>
<html>
<meta charset="utf-8">
<body>

<br>
<?php 
include('./fonctions.php');

if (Auth($_POST["login"],$_POST["password"],"./db/userpass.txt")==1)
{
	echo "Accès autorisé";
	$_SESSION['U']=1;
	header('Location: ./agenda.php');
  	exit();
}
else
{
	echo "Accès refusé";
}

?>

</body>
</html>
