<?php

include_once ROOT_PATH.'/App/Models/Goal.class.php';

class GoalController
{
	
	public static function add_goal()
	{
		
		$userTitle = $_POST['title'];
		$userDescription = $_POST['description'];
		$userEmail = $_SESSION['Email'];
		$userStart = $_POST['startDate'];
		$userEnd = $_POST['endDate'];


		$Goal = new Goal ($userTitle, $userDescription, $userEmail, $userStart, $userEnd);
		
		Goal::save_goal($Goal);
		
		header('Location: /public_html/goals?message=goal_saved');
		
	}
	
	public static function update_goal_by_id()
	{
		
		$userTitle = $_POST['title'];
		$userDescription = $_POST['description'];
		$userEmail = $_SESSION['Email'];
		$userStart = $_POST['startDate'];
		$userEnd = $_POST['endDate'];
		$userCompleted = $_POST['completed'];


		$Goal = new Goal ($userTitle, $userDescription, $userEmail, $userStart, $userEnd);
		$Goal->goal_id = $_GET['goal_id'];
		
		if($userCompleted):
			$Goal->completed = 1;
		endif;
		
		Goal::update_goal($Goal);
		
		header('Location: /public_html/goals?message=goal_updated');
		
		
	}
}

?>