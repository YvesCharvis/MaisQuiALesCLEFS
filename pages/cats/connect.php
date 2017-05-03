<?php
use Core\Auth\DBAuth;
$app2 = App::getInstance();
$auth2 = new DBAuth($app2->getDb());

if ($auth2->logged()){
	header("location: cats.php");
exit();
}


?>


<div class="login-page">
<h2 class="login-titre">Connexion</h2>
  <div class="form">
    <form class="login-form" method="Post" action="cats.php">
    <input class="form-control" type="text" name="name" placeholder="Pseudo">
	<input class="form-control" type="password" name="password" placeholder="mot de passe">
	<hr>
	<input id="breathing-button" class="btn btn-primary" type="submit" value="Connexion">      
    </form>
  </div>
</div>
