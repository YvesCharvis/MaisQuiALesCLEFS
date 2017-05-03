<?php
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['c'])) {
	$page = $_GET['c'];
}else{
	$page = "home";
}

$app = App::getInstance();
$catsconnect = new DBAuth($app->getDb());

//connexion utilisateur via login.php
if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($catsconnect->connect($_POST['username'], $_POST['password'])) {
			header('location: cats.php?c=logged');
			//prevoir un message flash	
}
}
}

//fin connexion utilisateur via login.php

if (!$catsconnect->logged()) {
	$app->forbidden();
}


$connect = "Disconnect";

ob_start();

if ($page==='home') {
	require ROOT.'/pages/cats/index.php';

}elseif ($page==='logged') {
	require ROOT.'/pages/cats/connect.php';

	
	/////suite pour post
}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 