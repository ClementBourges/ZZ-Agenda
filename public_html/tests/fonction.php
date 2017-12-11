<?php

function Auth_user ($log,$pass,$fichier)
{
	$boole=0;
	$i=0;
	$fic=fopen($fichier, "r");
	$logpass=$log.";".$pass."";
	while (!feof($fic) AND $boole==0)
	{
		$buffer=fgets($fic);
		$buffer=substr($buffer,0,strlen($buffer)-1);
		if(strcmp($logpass,$buffer)==0)
		{
			$boole=1;
		
		}
		$i=$i+1;
	}
	fclose($fic);
	return $boole;
}



?>
