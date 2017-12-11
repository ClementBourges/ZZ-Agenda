<?php
function Supprimer($date)
{
	$fic=fopen("./db/events.txt","r");
	$fictemp=fopen("./db/temp.txt","w+");
	while (!feof($fic))
	{
		$ligne=fgets($fic);
		$tableau=explode(";",$ligne);
		if (strcmp($tableau[1],$date)!=0)
		{
		 fwrite($fictemp,$ligne);
		}
	}
	fclose($fic);
	fclose($fictemp);
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
Supprimer($_POST['Date']);
Reecriture();
header('Location: ./agendadmin.php');
?>
