<?php

function AjoutEvenement($date,$heure,$titre,$lieu,$speaker,$sujet,$couleur)
{
	$fic=fopen("./db/events.txt", "r+");
	$date2=explode("-",$date);
	$heure2=explode(":",$heure);
	$key=$date2[0].$date2[1].$date2[2].$heure2[0].$heure2[1];
	$evenement=$titre.";".$lieu.";".$speaker.";".$sujet.";".$couleur.";";
	$arr=array($key => $evenement);
	while (!feof($fic))
	{	
		$ligne=fgets($fic);
		$tableau=explode(";",$ligne); 
		$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";";
	}
	ksort($arr);
	rewind($fic);
	foreach($arr as $key => $element)
	{
		if ($key != "")
		{
			fwrite($fic,$key.";".$element."\n");
		}
	}
	fclose($fic);
}

?>
<?php
AjoutEvenement($_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet'],$_POST['Couleur']);
header('Location: ./agendadmin.php');
?>
