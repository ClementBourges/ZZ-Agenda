<?php
if($_SESSION['A']==1)
{
setcookie();
include('./header_deco.php'); 
$hm=explode(":",$_COOKIE['heure']);
$heurmin=$hm[0].$hm[1];
$datetab=explode("/",$_COOKIE['date']);
$dateformatee=$datetab[2]."-".$datetab[1]."-".$datetab[0];
echo $dateformatee;

?>

<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Modification de l'événement</h1> 
      <form action="ecriture.php" method="post" class="form-signin">
		 <label for="input" class="sr-only">Date</label>
        <input name="Date" class="form-control" placeholder="Date" type="date" value=<?php echo $dateformatee ?> required autofocus>
        <label for="input" class="sr-only" >Heure</label>
        <input name="Heure" class="form-control" placeholder="Heure" value=<?php echo $_COOKIE['heure'] ?> required autofocus>
        <label for="input" class="sr-only">Titre</label>
        <input name="Titre" class="form-control" placeholder="Titre" value=<?php echo $_COOKIE['titre'] ?> required autofocus>
        <label for="input" class="sr-only">Lieu</label>
        <input type="Lieu" name="Lieu" class="form-control" placeholder="Lieu" value=<?php echo $_COOKIE['lieu'] ?> required>
        <div class="checkbox">
        </div>
        <label for="input" class="sr-only">Speaker</label>
        <input name="Speaker" class="form-control" placeholder="Speaker" value=<?php echo $_COOKIE['speaker'] ?> required autofocus>
        <label for="input" class="sr-only">Sujet</label>
        <input type="Sujet" name="Sujet" id="inputPassword" class="form-control" placeholder="Action" value=<?php echo $_COOKIE['description'] ?> required>
	<div class="checkbox">
        </div>
	<label for="input" class="sr-only">Couleur</label>
	<input type="color" name="Couleur" id="inputPassword" value=<?php echo $_COOKIE['couleur'] ?> class="form-control" placeholder="Couleur" required>       
	<div class="checkbox">
        </div>
	<form action="supprimer.php" method="post" class="form-signin">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Supprimer</button>
	</form>
	<form action="ecriture.php" method="post" class="form-signin">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
      </form>
<?php
$_POST['Date'];
$_POST['Heure'];
$_POST['Titre'];
$_POST['Lieu'];
$_POST['Speaker'];
$_POST['Sujet'];
?>

  </div>
</div>

<?php

}
else
{
	echo"<h1>Accès refusé</h1>";
}
?>




<?php
include("footer.php");
?>
