<?php
include("./header.php");
?>

<div class="container">

      <form action="res_auth_user.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Se connecter</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input name="login" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de Passe</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>
	
<?php

$_POST['login'];
$_POST['password'];

?>	
	
</div> <!-- /container -->


<?php
include("footer.php");
?>


