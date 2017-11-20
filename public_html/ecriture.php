<?php

function Ecriture ($titre,$lieu,$speaker,$sujet)
{
	$fic=fopen("./db/events.txt", "a+");
	fputs($fic,"$titre;$lieu;$speaker;$sujet");
	fputs("/n");
	fclose($fic);
}
?>
<?php
$fic=fopen("./db/events.txt", "a+");
Ecriture($_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet']);
header('Location: https://www.isima.fr/~cllaneres/agenda.php');
?>
