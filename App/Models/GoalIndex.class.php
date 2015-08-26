<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
include_once 'Database.class.php';
include_once 'Goal.class.php';
include_once 'GoalIndex.class.php';

class GoalIndex
{

	public function get_all_goals()
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "SELECT * from goals ORDER BY goal_id DESC";

		$allGoals = $db->prepare($query);
		$allGoals->execute();

		return $allGoals;	

	}
	
	public function get_current_user_goals()
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
		
		if(!isset($_SESSION)):
			session_start();
		endif;
		
		$userEmail = $_SESSION["Email"];

		$query = "SELECT * from goals WHERE creator='$userEmail' ORDER BY goal_id DESC";

		$userGoals = $db->prepare($query);
		$userGoals->execute();

		return $userGoals;	

	}
	
	public function print_goals($Goals)
	{

		while ( $goal = $Goals->fetchObject() ):

			$goalTitle = $goal->title;
			$goalDesc = $goal->description;
			$goalCreator = $goal->creator;
			$goalStart = $goal->startDate;
			$goalEnd = $goal->endDate;
		
			$goalStart = date("l, F j", strtotime($goalStart));	
			$goalEnd = date("l, F j", strtotime($goalEnd));	
			
		
		?>
			<div class="well" style="margin-top: 15px;">
				<h1><?php echo $goalTitle; ?></h1>
				<p><?php echo $goalDesc; ?></p>
				<h3><?php echo $goalCreator; ?></h3>
				<h3><?php echo $goalStart; ?></h3>
				<h3><?php echo $goalEnd; ?></h3>
			</div>

		<?php
		endwhile;

	}
	
}












?>