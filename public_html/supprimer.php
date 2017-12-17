<?php
extract($_GET);
include('./fonctions.php');
/* Use function Supprimer to delete the event */
Supprimer("./db/events.txt",$_POST['Date']);
header('Location: ./agendadmin.php?lang='.$lang);
?>
