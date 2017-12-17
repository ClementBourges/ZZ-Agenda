<?php 
	setcookie();
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
/* Check if the login and password are in a text file */
if (Auth($_POST["login"],$_POST["password"],"./db/adminpass.txt")==1)
{
 	/* If the administrator exists, start a session */
	$_SESSION['A']=1;
	setcookie('identadmin',$_POST["login"],(time()+30*3600*24));
	$_COOKIE['identadmin']=$_POST["login"];
	header('Location: ./agendadmin.php?lang='.$lang);
  	exit();
}
else
{	/* If the administrator doesn't exist deny acess */
	echo "Accès refusé";
}

?>

</body>
</html>
