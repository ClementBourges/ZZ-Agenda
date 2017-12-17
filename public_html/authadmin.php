<?php
include("./header.php");
	extract($_GET);
?>

<div class="container">
      <form action="res_auth_admin.php?lang=<?php echo $lang; ?>" method="post" class="form-signin">
        <h2 class="form-signin-heading"><?php echo $Administration ?></h2>
        <label for="inputEmail" class="sr-only"><?php echo $login ?></label>
        <input name="login" class="form-control" value="<?php if (isset($_COOKIE['identadmin'])){echo $_COOKIE['identadmin'];}else{echo "";}?>" placeholder="<?php echo $login ?>" required autofocus>
        <label for="inputPassword" class="sr-only"><?php echo $Motdepasse ?></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="<?php echo $Motdepasse ?>" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $entreradm ?></button>
      </form>
</div>

<?php
$_POST['login'];
$_POST['password'];
?>
<?php
include("footer.php");
?>
