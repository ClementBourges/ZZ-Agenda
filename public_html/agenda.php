<!DOCTYPE html>

<?php include('header.php'); ?>

<div class="panel-group">
<?php
$fich=fopen("./db/events.txt", "r");
$i=0;
while (!feof($fich))
	{
	$ligne=fgets($fich);
	if(strlen($ligne)>1)
	{
		$tableau=explode(";",$ligne);
	
		$i=$i+1;
		echo'
		<div class="panel panel default">
			<div class="panel-heading"><h2><i class="fa fa-clock-o" aria-hidden="true"></i> '.$tableau[1]."  ".$tableau[0].'</h2></div>
	 		<div class="panel-body"><h4>'.$tableau[2].'</h4></div>
			<div class="panel-footer">
				<ul class = "list-group">
      					<li class = "list-group-item"> <i class="fa fa-map-marker"></i>
					<a href="https://www.google.fr/maps/place/'.$tableau[3].'">'.$tableau[3].'</a></li>';
					
					if(strlen($tableau[4])>1)
					{
					echo'
					<li class = "list-group-item"> <i class="fa fa-microphone" aria-hidden="true"></i>
						<a href="https://www.google.fr/search?q='.$tableau[4].'">'.$tableau[4].'</li>
					';
					}
				echo'
				</ul>
			</div>
		</div>
			';
	}
	}
	fclose($fic);	
?>



<?php
include("footer.php");
?>

