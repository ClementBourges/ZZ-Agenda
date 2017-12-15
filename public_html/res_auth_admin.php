<?php 
	session_start();
?>
<html>
<meta charset="utf-8">
<body>

<br>
<?php 
include('./fonctions.php');

if (Auth($_POST["login"],$_POST["password"],"./db/adminpass.txt")==1)
{
	echo "Accès autorisé";
	$_SESSION['A']=1;
	header('Location: ./agendadmin.php');
  	exit();
}
else
{
	/*echo $passhash;*/
	echo "Accès refusé";
}

?>

</body>
</html>
