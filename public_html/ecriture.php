<?php
/* Add event in the text file */
extract($_GET);
include('./fonctions.php');
AjoutEvenement("./db/events.txt",$_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet'],$_POST['Couleur']);
header('Location: ./agendadmin.php?lang='.$lang);
?>
