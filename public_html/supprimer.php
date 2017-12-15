<?php
extract($_GET);
include('./fonctions.php');
Supprimer($_POST['Date']);
header('Location: ./agendadmin.php?lang='.$lang);
?>
