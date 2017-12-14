


<?php
if($_SESSION['A']==1 OR 1)
{
include('./header_deco.php');
?>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Un évènement</h1> 
      <form action="ecriture.php" method="post" class="form-signin">
		 <label for="input" class="sr-only">Date</label>
        <input name="Date" class="form-control" placeholder="Date" type="date" required autofocus>
        <label for="input" class="sr-only">Heure</label>
        <input name="Heure" class="form-control" placeholder="Heure" type="time" required autofocus>
        <label for="input" class="sr-only">Titre</label>
        <input name="Titre" class="form-control" placeholder="Titre" required autofocus>
        <label for="input" class="sr-only">Lieu</label>
        <input type="Lieu" name="Lieu" id="inputPassword" class="form-control" placeholder="Lieu" required>
        <div class="checkbox">
        </div>
        <label for="input" class="sr-only">Speaker</label>
        <input name="Speaker" class="form-control" placeholder="Speaker" required autofocus>
        <label for="input" class="sr-only">Sujet</label>
        <input type="Sujet" name="Sujet" id="inputPassword" class="form-control" placeholder="Sujet" required>
	<div class="checkbox">
        </div>
	<label for="input" class="sr-only">Couleur</label>
	<input type="color" name="Couleur" id="inputPassword" class="form-control" placeholder="Couleur" required>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
      </form>
<?php
}
else
{
	include('./header.php');
	echo"<h1>Accès refusé</h1>";
}
?>
<?php
include("footer.php");
?>


<?php
$_POST['Date'];
$_POST['Heure'];
$_POST['Titre'];
$_POST['Lieu'];
$_POST['Speaker'];
$_POST['Sujet'];
?>


