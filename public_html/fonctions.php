<?php
/* Auth: Check if the login and password are in a file text*/
function Auth($log,$pass,$fichier)
{
	$boole=0;
	$i=0;
	$fic=fopen($fichier, "r");
	$passhash=hash('sha256',$pass); /* hash the password */
	$logpass=$log.";".$passhash."";
	while (!feof($fic) AND $boole==0) /* Search user in the file text */
	{
		$buffer=fgets($fic); /* Get a line in the file text */
		$buffer=substr($buffer,0,strlen($buffer)-1);
		if(strcmp($logpass,$buffer)==0) /* Compare the ligne and login/password */
		{
			$boole=1;
		
		}
		$i=$i+1;
	}
	fclose($fic);
	return $boole; /* bool=1 if the user exists, 0 if he doesn't */
}


/* Supprimer: Delete an event of the text file */
function Supprimer($date)
{
	$fic=fopen("./db/events.txt", "r+");
	while (!feof($fic)) /* Build an array of all the event */
	{	
		$ligne=fgets($fic); /* Get the line in the file text */
		$tableau=explode(";",$ligne);
		if ($tableau[0]!=$date) /* Don't add the event in the array if it is the event we want to delete */
		{
			/* Add the line in the array, date is the key */
			$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";";
		}
	}
	ksort($arr); /* Sort the array */
	fclose($fic);
	/* Writing the new file text */ 
	$fic=fopen("./db/events.txt", "w+");
	foreach($arr as $key => $element) /* For each element of the array */
	{
		if ($key != "" && $element!="")
		{
			/* Write the event in the text file */
			fwrite($fic,$key.";".$element."\n");
		}
	}
	fclose($fic);
}


/* format_date_heure: transform date YYYYMMDDHHHH in an array of 2 elements: 
							-YYYY/MM/DD
							-HH:MM*/
function format_date_heure($aaaammddhhhh)
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
/* AjoutEvenement: Add an event to file text file */ 
function AjoutEvenement($fichier,$date,$heure,$titre,$lieu,$speaker,$sujet,$couleur)
{
	$fic=fopen($fichier, "r+");
	/* put the date in the correct format in order to use it as a key */
	$date2=explode("-",$date);
	$heure2=explode(":",$heure);
	$key=$date2[0].$date2[1].$date2[2].$heure2[0].$heure2[1];
	$evenement=$titre.";".$lieu.";".$speaker.";".$sujet.";".$couleur.";";
	$arr=array($key => $evenement);
	while (!feof($fic)) /* Build an array of all the event */
	{	
		$ligne=fgets($fic); /* Get a line in the file text */
		$tableau=explode(";",$ligne); 
		/* Add the line in the array, date is the key */
		$arr[$tableau[0]]=$tableau[1].";".$tableau[2].";".$tableau[3].";".$tableau[4].";".$tableau[5].";";
	}
	ksort($arr);
	rewind($fic);
	/* Writing the new file text */ 
	foreach($arr as $key => $element) /* For each element of the array */
	{
		if ($key != "")
		{
			/* Write the event in the text file */
			fwrite($fic,$key.";".$element."\n");
		}
	}
	fclose($fic);
}



?>
