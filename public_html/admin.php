<?php
include('./fonctions.php');
?>

<?php
session_start();
extract($_GET); 
if($_SESSION['A']==1) /* Check if user is an administrator*/
{
	include('./header_deco.php');
	$hm=explode(":",$_POST['heure']);
	$heurmin=$hm[0].":".$hm[1];
	$datetab=explode("/",$_POST['date']);
	$dateformatee=$datetab[2]."-".$datetab[1]."-".$datetab[0];

?>
<body>
<div class="jumbotron">
  <div class="container text-center">

<?php if ($_POST['date']!="") /* Check it is a modification of an event or a new event */
{
echo "<h1>$modif</h1> ";

}
else { /* Add the event, fields are pre-filled if it is a modification */
	echo "<h1>$AjoutEve</h1>";
} ?>
      <form action="ecriture.php?lang=<?php echo $lang; ?>" method="post" class="form-signin">
	<label for="input" class="sr-only"></label>
        <input name="Date" class="form-control" placeholder="Date" type="date" value= '<?php echo $dateformatee; ?>' required autofocus>
																	
        <label for="input" class="sr-only"></label>
        <input name="Heure" class="form-control" placeholder="Heure" type="time" value= '<?php echo $heurmin; ?>' required autofocus>
        <label for="input" class="sr-only"></label>
        <input name="Titre" class="form-control" value= '<?php echo $_POST['titre']; ?>'  placeholder='<?php echo $Titre; ?>' required autofocus>
        <label for="input" class="sr-only"><?php echo $Lieu; ?></label>
        <input type="Lieu" name="Lieu" id="inputPassword" class="form-control" value= '<?php echo $_POST['lieu']; ?>' placeholder='<?php echo $Lieu; ?>' required>
        <div class="checkbox">
        </div>
        <label for="input" class="sr-only"></label>
        <input name="Speaker" class="form-control" placeholder='<?php echo $Speaker; ?>' value= '<?php echo $_POST['speaker']; ?>'required autofocus>
        <label for="input" class="sr-only"></label>
        <input type="Sujet" name="Sujet" id="inputPassword" class="form-control" value= '<?php echo $_POST['description']; ?>' placeholder="<?php echo $Sujet; ?>" required>
	<div class="checkbox">
        </div>
	<label for="input" class="sr-only"></label>
	<input type="color" name="Couleur" id="inputPassword" class="form-control" value= '<?php echo $_POST['couleur']; ?>' placeholder="Couleur" required>
        <div class="checkbox">

<?php 

if ($_POST['date']!="") /* If it is a modification, delete the previous event and add the new */
{
	Supprimer($datetab[2].$datetab[1].$datetab[0].$hm[0].$hm[1]);
	echo '
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">'.$modifier.'</button>
	      </form>' ;
}
else  /* Add the new event */
{
		echo '</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">'.$Ajouter.'</button>
	      	</form>';
	} 

?>
        
<?php
}
else
{
	include('./header.php');
	echo"<h1>$refus</h1>";
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


