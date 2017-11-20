<?php

function Ecriture ($date,$heure,$titre,$lieu,$speaker,$sujet)
{
	$fic=fopen("./db/events.txt", "r+");
	$temp="./db/fictemp.txt";
	$fic2=fopen($temp,"x+");
	echo $date;
	echo "......";
	$temp=$date."-".$heure;
	$e=0;
	while (!feof($fic))
	{
		$ligne=fgets($fic);
		$tableau=explode(";",$ligne);
		if (strcmp($tableau[1],$temp)<0 &&!$e)
		{
			echo $temp;
			fwrite($fic2,"$titre;$temp;$lieu;$speaker;$sujet;\n");
			fwrite($fic2,$ligne);
			$e=1;
			echo "zrgojsgjjlid";
		}
		fwrite($fic2,$ligne);
	}
	fclose($fic2);
	fclose($fic);
	rename($temp,"events.txt");
}

?>
<?php
Ecriture($_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet']);
/*header('Location: ./agenda.php');*/
?>
