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
      
        if(isset($_POST['completed'])):
          $userCompleted = $_POST['completed'];
        endif;

		$Goal = new Goal ($userTitle, $userDescription, $userEmail, $userStart, $userEnd);
		$Goal->goal_id = $_GET['goal_id'];
		
		if(isset($_POST['completed'])):
			$Goal->completed = 1;
        else:
            $Goal->completed = 0;
		endif;
		
		Goal::update_goal($Goal);
		
		header("Location: /public_html/goal?goal_id=$Goal->goal_id&message=goal_updated");
		
		
	}
}

?>