    <!DOCTYPE html>
<html lang="fr">
  <head>
  		<title><?= App::getInstance()->titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">   
    						<!-- Bootstrap core CSS -->
    	<link type="text/css" rel="stylesheet" href="frameworks/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/style.css">   
  </head>
<body>
  <div class="header">
  <img src="img/header.jpg">
  </div>

    <div class="navbar col-lg-4 col-md-3 col-xs-4">
      <ul>
          <li><a href="index.php"> Accueil</a></li>
          <li><a href="?c=SignIn"> Sign In</a> | <a href="?c=SignUp">Sign Up</a></li>
          <li><a href="?c=PlanSite">Plan Site</a></li>
          <li><a href="?c=SemiAccessKeys">Clef Access</a></li>
      </ul>
    </div>
<div class="contenaire col-lg-8 col-md-9 col-xs-8">
    <?= $content ?>
</div>
</body>

								<!-- SCRIPTS LOADS -->
	<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
		 <script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->

</html>
