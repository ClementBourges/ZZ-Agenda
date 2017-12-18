<?php 
include('./header_deco.php'); 
include('./fonctions.php');
?>

<div class="panel-group">
<?php
if($_SESSION['U']==1) /* If user is logged in, display events */
{
	$fich=fopen("./db/events.txt", "r");
	$i=0;
	while (!feof($fich)) /* get each line in the text file and display the event */
		{
		$ligne=fgets($fich);
		if(strlen($ligne)>1)
		{
			/* Separate informations of the event in order to display them */
			$tableau=explode(";",$ligne);
			$dateheure=format_date_heure($tableau[0]);
			$i=$i+1;
			echo'
			<style>
			.container {
			background-color: #'.$tableau[5].';
			margin: 0px auto;
			padding-top:24px;
			padding-right:24px;
			padding-left:24px;
			padding-bottom:24px;
			}
			</style>
			<div class="container" style= background-color:'.$tableau[5].';>
			<div class="panel panel default">
				<div class="panel-heading"><h3><i class="fa fa-calendar" aria-hidden="true"></i> '.$dateheure[0].'</h3><h3><i class="fa fa-clock-o" aria-hidden="true"></i> '.$dateheure[1].'</h3><h3>'.$tableau[1].'</h3><h4>'.$tableau[4].'</h4></div>
				<div class="panel-footer">
					<ul class = "list-group">
	      					<li class = "list-group-item"> <i class="fa fa-map-marker"></i>
						<a href="https://www.google.fr/maps/place/'.$tableau[2].'">'.$tableau[2].'</a></li>
						<li class = "list-group-item"> <i class="fa fa-microphone" aria-hidden="true"></i>
							<a href="https://www.google.fr/search?q='.$tableau[3].'">'.$tableau[3].'</a></li>
					</ul>
				</div>
			</div></div></br>
				';
		}
		}
		fclose($fic);
}
else
{
	/* Deny acess if the user isn't logged in*/
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

