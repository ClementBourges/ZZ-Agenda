<?php
include("./header.php");
extract($_GET);
?>

<div class="container">
      <form action="res_auth_user.php?lang=<?php if ($lang!=""){echo $lang;}else{echo "fr";}?>" method="post" class="form-signin">
        <h2 class="form-signin-heading"> <?php echo $Seconnecter ?> </h2>
        <input name="login" class="form-control" placeholder='<?php echo $login ?>' required autofocus>
        <label for="inputPassword" class="sr-only"><?php echo $Motdepasse ?> </label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder='<?php echo $Motdepasse ?>' required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> <?php echo $Sesouvenirdemoi ?>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $Connexion ?></button>
      </form>
	
<?php

$_POST['login'];
$_POST['password'];

?>	
	
</div> <!-- /container -->


<?php
include("footer.php");
?>


