<!DOCTYPE html>
<html lang="en">
<head>
  <title>ZZAgenda</title>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
<a class="navbar-brand"><p class="en_blanc">ZZAgenda</p></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="./lang.png" width = 20 px alt="@culture" />
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a class="language" width =10 px ><img src="angl.png" alt="Anglais" /></a></li>
                <li role="presentation"><a class="language" width =10 px ><img src="France.png" alt="Français" /></a></li>
            </ul>
        </li>
    </ul>
  </div>
</nav>

<div class="container">

      <form action="resultat.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Administration</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input name="login" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de Passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrer dans l'espace admin</button>
      </form>
	
<?php


$_POST['login'];
$_POST['password'];



?>	
	
    </div> <!-- /container -->

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
