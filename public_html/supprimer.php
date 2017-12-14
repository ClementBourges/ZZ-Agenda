<?php
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
	print_r($arr);
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

?>

<?php
Supprimer($_POST['Date']);
header('Location: ./agendadmin.php');
?>
