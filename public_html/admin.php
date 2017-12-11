<?php include('./header_deco.php'); ?>


<?php
if($_SESSION['A']==1)
{}
else
{
	echo"<h1>Accès refusé</h1>";
}
?>
<?php
include("footer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="sticky-footer.css" rel="stylesheet">
	<link href="blog.css" rel="stylesheet">
	<link href="navbar.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Un évènement</h1> 
      <form action="ecriture.php" method="post" class="form-signin">
		 <label for="input" class="sr-only">Date</label>
        <input name="Date" class="form-control" placeholder="Date" type="date" required autofocus>
        <label for="input" class="sr-only">Heure</label>
        <input name="Heure" class="form-control" placeholder="Heure" required autofocus>
        <label for="input" class="sr-only">Titre</label>
        <input name="Titre" class="form-control" placeholder="Titre" required autofocus>
        <label for="input" class="sr-only">Lieu</label>
        <input type="Lieu" name="Lieu" id="inputPassword" class="form-control" placeholder="Lieu" required>
        <div class="checkbox">
        </div>
        <label for="input" class="sr-only">Speaker</label>
        <input name="Speaker" class="form-control" placeholder="Speaker" required autofocus>
        <label for="input" class="sr-only">Sujet</label>
        <input type="Sujet" name="Sujet" id="inputPassword" class="form-control" placeholder="Action" required>
        <div class="checkbox">
        </div>
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


<footer class="footer">
     <div class="container">
        	<div class="text-center center-block">
                	<a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x social"></i></a>
	            	<a href="https://maps.google.fr/"><i class="fa fa-map-marker fa-3x social"></i></a>
	            	<a href="https://www.isima.fr/~clbourges1/login.html"><i class="fa fa-lock fa-3x social"></i></a>
		</div>
	</div>
 </footer>


  </body>
</html>

</body>
</html>
