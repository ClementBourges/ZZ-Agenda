<?php 
	session_start();
?>
<html>
<meta charset="utf-8">
<body>

<br>
<?php 

function Auth ($log,$pass)
{
	$bool=0;
	$fic=fopen("./db/userpass.txt", "r");
	$logpass=$log.";".$pass."";
	while (!feof($fic) AND $bool==0)
	{
		$buffer=fgets($fic);
		$buffer=substr($buffer,0,strlen($buffer)-1);
		if(strcmp($logpass,$buffer)==0)
		{
			$bool=1;
		
		}
		$i=$i+1;
	}
	fclose($fic);
	return $bool;
}



if (Auth($_POST["login"],$_POST["password"])==1)
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