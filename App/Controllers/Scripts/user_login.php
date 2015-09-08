<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';
	include_once ROOT_PATH.'/App/Models/User.class.php';
	include_once ROOT_PATH.'/App/Controllers/UserController.class.php';


	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];

	$User = new User ($userEmail, $userPassword);

	if(Auth::check_if_user_exists($User)):
		Auth::login_user($User);
	endif;

?>