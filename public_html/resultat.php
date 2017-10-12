<html>
<meta charset="utf-8">
<body>

<br>
<?php 

function Auth ($log,$pass)
{
	$bool=0;
	$fic=fopen("./logpass.txt", "r");
	$logpass=$log.";".$pass." ";
	while ($i<5 AND $bool==0)
	{
	$buffer=fgets($fic);
	echo "logpass:  " ;
	echo $logpass;
	echo "<br>";
	echo "buffer:  ";
	echo $buffer;
	echo "<br>";
	echo "strcmp:  ";
	echo strcmp($logpass,$buffer);
	echo "<br>";

	if(strcmp($logpass,$buffer)==0)
	{
	
		$bool=1;
		
	}
	$i=$i+1;
	}
	return $bool;
}



if (Auth($_POST["login"],$_POST["password"])==1)
{
	echo "Accès autorisé";
	
}
else
{
	echo "Accès refusé";
}

?>

</body>
</html>
