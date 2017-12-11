<?php

function AjoutEvenement($date,$heure,$titre,$lieu,$speaker,$sujet)
{
	$fic=fopen("./db/events.txt", "r+");
	$date2=explode("-",$date);
	$key=$date2[0].$date2[1].$date2[2].$heure;
	$evenement=$titre.";".$lieu.";".$speaker.";".$sujet."#848484".";";
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
AjoutEvenement($_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet']);
header('Location: ./agendadmin.php');
?>
