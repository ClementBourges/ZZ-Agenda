<!DOCTYPE html>
<?php
include("header.php");
?>


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
	

<?php
include("footer.php");
?>
