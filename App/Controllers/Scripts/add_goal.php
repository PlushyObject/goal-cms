<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';
	include_once ROOT_PATH.'/App/Models/Goal.class.php';
	include_once ROOT_PATH.'/App/Controllers/GoalController.class.php';


	$userTitle = $_POST['title'];
	$userDescription = $_POST['description'];
	$userStart = $_POST['startDate'];
	$userEnd = $_POST['endDate'];


	$Goal = new Goal ($userTitle, $userDescription, $userStart, $userEnd);

	$GoalCtrl = new GoalController;
	$GoalCtrl->save_goal($Goal);

	header('Location: /public_html/index.php?message=save_success');

?>
