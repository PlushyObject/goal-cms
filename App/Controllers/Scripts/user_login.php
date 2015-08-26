<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';
	include_once ROOT_PATH.'/App/Models/User.class.php';
	include_once ROOT_PATH.'/App/Controllers/UserController.class.php';


	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];


	$User = new User ($userEmail, $userPassword);

	$UserCtrl = new UserController;

    if($UserCtrl->check_if_user_exists($User)):

      $UserCtrl->login_user($User);

      if(!isset( $_SESSION)):
        session_start();
      endif;

      $_SESSION['Email'] = $User->email;

      header('Location: /public_html/index?message=login_success');

    else:
      header('Location: /public_html/login?message=user_not_registered');
    endif;
?>