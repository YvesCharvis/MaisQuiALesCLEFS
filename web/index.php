<?php
use Core\Auth\DBAuth;
define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php'; // permet l'absolute
App::load();

if (isset($_GET['c'])) {
	$page = $_GET['c'];
}else{
	$page = "home";
}





//////////////bouton connect 
$app = App::getInstance();
$auth = new DBAuth($app->getDb());
if ($auth->logged()) {	
    $SignUp = "";
}else{
	$HomeCats = "<li><a href='cats.php?c=home''>Home</a></li>";
	$SignIn = "Sign In";
	
	
	
}

$connect = "Disconnect";


/////////////////////////

ob_start();
if ($page==='home') {  // Charge centre page (contente)
	require ROOT.'/pages/index.php';
}elseif ($page==='SignIn'){
	require ROOT.'/pages/cats/connect.php';
}elseif ($page==='PlanSite') {
	require ROOT.'/pages/presentation/PlanSite.php';
}elseif ($page==='SemiAccessKeys') {
	require ROOT.'/pages/SemiAccessKeys/SemiKey.php';
}elseif ($page==='403') {
	require ROOT.'/pages/errors/403.php';
}elseif ($page==='404') {
	require ROOT.'/pages/errors/404.php';
}

$content = ob_get_clean(); // Le template 
require ROOT.'/pages/templates/default.php'; 