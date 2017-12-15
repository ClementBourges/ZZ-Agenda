<?php
include('./fonctions.php');
AjoutEvenement($_POST['Date'],$_POST['Heure'],$_POST['Titre'],$_POST['Lieu'],$_POST['Speaker'],$_POST['Sujet'],$_POST['Couleur']);
header('Location: ./agendadmin.php');
?>
