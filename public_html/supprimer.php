<?php
extract($_GET);
include('./fonctions.php');
/* Use function Supprimer to delete the event */
Supprimer($_POST['Date']);
header('Location: ./agendadmin.php?lang='.$lang);
?>
