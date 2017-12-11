<?php

function Ecriture($date,$heure,$titre,$lieu,$speaker,$sujet)
{
	$fic=fopen("./db/events.txt", "r+");
	$fictemp=fopen("./db/temp.txt","w+");
	$temp=$date."-".$heure;
	$e=0;
	while (!feof($fic))
	{	
		$ligne=fgets($fic);
		fwrite($fictemp,$ligne);
		$tableau=explode(";",$ligne);
		echo "tableau==";
		echo $tableau[1];
		echo " - ";
		echo "temp===";
		echo $temp;
		echo " - ";
		echo strcmp($tableau[1],$temp);
		echo "--------------";
		if (strcmp($tableau[1],$temp)>0 &&!$e)
		{
			fwrite($fictemp,"$titre;$temp;$lieu;$speaker;$sujet;\n");
			$e=1;
		}
		fwrite($fictemp,$ligne);
	}
	fclose($fictemp);
	fclose($fic);
}

function Reecriture()
{
	$fictemp=fopen("./db/events.txt","w+");
	$fic=fopen("./db/temp.txt","r");
	while (!feof($fic))
	{
		$ligne=fgets($fic);
		$tableau=explode(";",$ligne);
		fwrite($fictemp,$ligne);
	}
	fclose($fic);
	fclose($fictemp);
}
?>
<?php
Ecriture($_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet']);
Reecriture();
header('Location: ./agendadmin.php');
?>
