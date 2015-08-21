<?php
	
	include_once 'config.php';
	include_once 'App/Models/Database.class.php';
	include_once 'App/Models/Goal.class.php';
	include_once 'App/Controllers/GoalController.class.php';


	$userTitle = $_POST['title'];
	$userDescription = $_POST['description'];
	$userStart = $_POST['startDate'];
	$userEnd = $_POST['endDate'];


	$Goal = new Goal ($userTitle, $userDescription, $userStart, $userEnd);

	$GoalCtrl = new GoalController;
	$GoalCtrl->save_goal($Goal);

?>
