<?php

function Auth($log,$pass,$fichier) /* Auth() function return 1 if the combination login/hash(pass) is found in the file text specified ine the last parameter, 0 else */
{
	$boole=0;
	$i=0;
	$fic=fopen($fichier, "r");
	$passhash=hash('sha256',$pass); /* We use sha256 encryption */
	$logpass=$log.";".$passhash."";	
	while (!feof($fic) AND $boole==0) /* Browse the file text */
	{
		$buffer=fgets($fic);
		$buffer=substr($buffer,0,strlen($buffer)-1);
		if(strcmp($logpass,$buffer)==0) /* Compare var and line of the file text */
		{
			$boole=1;
		
		}
		$i=$i+1;
	}
	fclose($fic);
	return $boole;
}



function Supprimer($fichier,$date) /* Delete an event in the file text whose path is specified in the first parameter, we only need its date which stand for a key*/
{
	$fic=fopen($fichier, "r+");
	while (($ligne = fgets($fic)) !== false)
	{	
		$tableau=explode(";",$ligne);
		if ($tableau[0]!=$date)
		{
			$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";"; /* Keep only the events we dont want to delete and save them into an array */
		}
	}
	ksort($arr);
	fclose($fic);
	$fic=fopen($fichier, "w+"); /* Erase the file */
	foreach($arr as $key => $element)
	{
		if ($key != "" && $element!="")
		{
			fwrite($fic,$key.";".$element."\n");  /* Re-write the events minus the one we wanted to delete */
		}
	}
	fclose($fic);
}

function format_date_heure($aaaammddhhhh)   /* format_date_heure() turn "AAAAMMDDHHHH" into an array: 1st item: "AAAA/MM/DD"  2nd item:  "HH:MM"  */
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

function AjoutEvenement($fichier,$date,$heure,$titre,$lieu,$speaker,$sujet,$couleur) /* Add an event in the file text whose path is specified in the first parameter */
{

	$fic=fopen($fichier, "r+");
	$date2=explode("-",$date);
	$heure2=explode(":",$heure);
	$key=$date2[0].$date2[1].$date2[2].$heure2[0].$heure2[1];
	$evenement=$titre.";".$lieu.";".$speaker.";".$sujet.";".$couleur.";";
	$arr=array($key => $evenement);			/* Save the element we want to add in an array */
	while (($ligne = fgets($fic)) !== false)
	{						/* Save all the pre-existing events into this array */
		$tableau=explode(";",$ligne); 
		$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";";
	}
	ksort($arr);
	rewind($fic);				/* sort this array using the key AAAAMMDDHHMM */
	foreach($arr as $key => $element)
	{
		if ($key != "")
		{
			fwrite($fic,$key.";".$element."\n");	/* re-write the file using the sorted array */
		}
	}
	fclose($fic);
}



?>
