<?php

function Auth($log,$pass,$fichier)
{
	$boole=0;
	$i=0;
	$fic=fopen($fichier, "r");
	$passhash=hash('sha256',$pass);
	$logpass=$log.";".$passhash."";
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



function Supprimer($date)
{
	$fic=fopen("./db/events.txt", "r+");
	while (!feof($fic))
	{	
		$ligne=fgets($fic);
		$tableau=explode(";",$ligne);
		if ($tableau[0]!=$date)
		{
			$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";";
		}
	}
	ksort($arr);
	fclose($fic);
	$fic=fopen("./db/events.txt", "w+");
	foreach($arr as $key => $element)
	{
		if ($key != "" && $element!="")
		{
			fwrite($fic,$key.";".$element."\n");
		}
	}
	fclose($fic);
}

function format_date_heure(
$aaaammddhhhh)   // Transforme AAAAMMDDHHHH en un tableau -> 1er élém: AAAA/MM/DD  2ème élém:  HH:MM 
{
	
	$aaaammddhhhh=strval($aaaammddhhhh);
	$annee=substr($aaaammddhhhh,0,4);
	$mois=substr($aaaammddhhhh,4,2);
	$jour=substr($aaaammddhhhh,6,2);
	$heure=substr($aaaammddhhhh,8,2);
	$minute=substr($aaaammddhhhh,10,2);

	$retour=array($jour."/".$mois."/".$annee , $heure.":".$minute);

	return $retour;
	
}

function AjoutEvenement($date,$heure,$titre,$lieu,$speaker,$sujet,$couleur)
{
	if (file_exists("./db/events.txt"))
	{
		$fic=fopen("./db/events.txt", "r+");
	}
	else 
	{
		$fic=fopen("../tests/events.txt", "w+");		//fichier event pour les tests
	}
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
