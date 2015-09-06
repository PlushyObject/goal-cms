<?php

include_once ROOT_PATH.'/App/Models/Goal.class.php';

class GoalController
{
	
	public static function add_goal(){
		
		$userTitle = $_POST['title'];
		$userDescription = $_POST['description'];
		$userEmail = $_SESSION['Email'];
		$userStart = $_POST['startDate'];
		$userEnd = $_POST['endDate'];


		$Goal = new Goal ($userTitle, $userDescription, $userEmail, $userStart, $userEnd);
		
		Goal::save_goal($Goal);
		
		header('Location: /public_html/goals?message=goal_saved');
		
	}
}

?>