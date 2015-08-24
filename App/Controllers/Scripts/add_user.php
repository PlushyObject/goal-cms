<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';
	include_once ROOT_PATH.'/App/Models/User.class.php';
	include_once ROOT_PATH.'/App/Controllers/UserController.class.php';


	$userUsername = $_POST['username'];
	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];


	$User = new User ($userUsername, $userPassword, $userEmail);

	$UserCtrl = new UserController;
	$UserCtrl->save_user($User);

	header('Location: /public_html/register?message=user_saved');

	

?>
