<?php

$route = $_GET['route'];

if(empty($route)) {
	$route = 'home';
}

switch ($route) {

	case 'home':
		include("views/homeView.php");
		break;
	
	default:
		include("controllers/".$route."Controller.php");
		break;
}

?>