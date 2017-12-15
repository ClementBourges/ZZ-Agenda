<?php include('./header_deco.php'); 
include('./fonctions.php');
?>

	<div class="container">
	<form action="admin.php" method="post" class="form-signin">
	<button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter un événement</button>
	</form>
	</br>
	</div>
<?php


if($_SESSION['A']==1)
{
	$fich=fopen("./db/events.txt", "r");
	$i=0;
	while (!feof($fich))
		{
		$ligne=fgets($fich);
		if(strlen($ligne)>1)
		{
			$tableau=explode(";",$ligne);
			$dateheure=format_date_heure($tableau[0]);
			$i=$i+1;
			echo'
			<style>
			.container {
			background-color: #'.$tableau[5].';
			margin: 0px auto;
			padding-right:24px;
			padding-left:24px;
			padding-top:24px;
			padding-bottom:24px;
			}
			</style>
			<div class="container" style= background-color:'.$tableau[5].';>
			<div class="panel panel default">
				<div class="panel-heading"><h3><i class="fa fa-calendar" aria-hidden="true"></i> '.$dateheure[0].'</h3><h3><i class="fa fa-clock-o" aria-hidden="true"></i> '.$dateheure[1].'</h3><h3>'.$tableau[1].'</h3></div>
				<div class="panel-footer">
					<ul class = "list-group">
	      					<li class = "list-group-item"> <i class="fa fa-map-marker"></i>
						<a href="https://www.google.fr/maps/place/'.$tableau[2].'">'.$tableau[2].'</a></li>
						<li class = "list-group-item"> <i class="fa fa-microphone" aria-hidden="true"></i>
							<a href="https://www.google.fr/search?q='.$tableau[3].'">'.$tableau[3].'</a></li>
					</ul>
				
			</div>
			</div>
				<form action="admin.php" method="post" class="form-signin">
					<input  type="hidden" id="Modification" name="date" value='.$dateheure[0].' >
					<input  type="hidden" id="Modification" name="heure" value='.$dateheure[1].' >
					<input  type="hidden" id="Modification" name="titre" value='.$tableau[1].'>
					<input  type="hidden" id="Modification" name="lieu" value='.$tableau[2].' >
					<input  type="hidden" id="Modification" name="speaker" value='.$tableau[3].' >
					<input  type="hidden" id="Modification" name="description" value='.$tableau[4].' >
					<input  type="hidden" id="Modification" name="couleur" value='.$tableau[5].' >
					<button class="btn btn-lg btn-primary btn-block" type="submit">Modifier cet événement</button>

				</form>
				</br>
				<form action="supprimer.php" method="post" class="form-signin">
					<input type="hidden" id="Date" name="Date" value='.$tableau[0].' >
					<button class="btn btn-lg btn-primary btn-block" type="submit">Supprimer cet événement</button>
				</form>
			</div>
			</div></br>
				';
		}
		}
		fclose($fic);
}
else
{
	echo"<p>Accès refusé</p>";
}
?>

<p>
        ID: <?php echo $_SESSION['ID']; ?> <br />
	A: <?php echo $_SESSION['A']; ?> <br />
	U: <?php echo $_SESSION['U']; ?> <br />
 </p>


<?php
include("footer.php");
?>


