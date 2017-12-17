<?php 
session_start();
$_SESSION['ID'] = '22';
define('__ROOT__', dirname(__FILE__));
$lang="fr";
extract($_GET);
if(isset($lang)) /* Include the english or french file in order to change the language */
{
	if ($lang=='fr')
	{
		require_once(__ROOT__.'/fr.php'); /* include french file */
	}
	else
	{
		require_once(__ROOT__.'/eng.php'); /* include english file */
	}
}
?>
<!DOCTYPE html>
<head>
  <title>ZZAgenda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style/sticky-footer.css" rel="stylesheet">
	<link href="style/blog.css" rel="stylesheet">
	<link href="style/navbar.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="./index.php?lang=<?php echo $lang; ?>"><h2 class="en_blanc">ZZAgenda</h2></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <img src="img/lang.png" width = 40 px alt="@culture" />
                <span class="caret"></span>
            </a>
	
            <ul class="dropdown-menu" role="menu">
		<a href="?lang=en"><img src="img/angl.png" alt="Anglais" /></a>
		<a href="?lang=fr"><img src="img/France.png" alt="Français" /></a>
            </ul>
        </li>
    </ul>
 </div>
</nav>
