<?php

function Ecriture ($titre,$lieu,$speaker,$sujet)
{
	$fic=fopen("./db/events.txt", "a+");
	fputs($fic,"$titre;$lieu;$speaker;$sujet");
	fclose($fic);
}
?>
<?php
$fic=fopen("./db/events.txt", "a+");
Ecriture($_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet']);
header('Location: ./agenda.php');
?>
