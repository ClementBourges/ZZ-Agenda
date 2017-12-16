<?php 
	setcookie();
	session_start();
	extract($_GET);
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
	setcookie('ident',$_POST["login"],(time()+30*3600*24));
	$_COOKIE['ident']=$_POST["login"];
	header('Location: ./agenda.php?lang='.$lang);
  	exit();
}
else
{
	echo "Accès refusé";
}

?>

</body>
</html>
