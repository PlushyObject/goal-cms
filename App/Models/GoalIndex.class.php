<?php

include_once '../config.php';
include_once 'Database.class.php';
include_once 'Goal.class.php';
include_once 'GoalIndex.class.php';

class GoalIndex
{

	public function get_all_goals()
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "SELECT * from goals ORDER BY id DESC";

		$allGoals = $db->prepare($query);
		$allGoals->execute();

		return $allGoals;	

	}
	
	public function print_all_goals()
	{

		$GoalIndex = new GoalIndex;

		$allGoals = $GoalIndex->get_all_goals();

		while ( $goal = $allGoals->fetchObject() ):

			$goalTitle = $goal->title;
			$goalDesc = $goal->description;
			$goalStart = $goal->startDate;
			$goalEnd = $goal->endDate;
		
			$goalStart = date("l, F j", strtotime($goalStart));	
			$goalEnd = date("l, F j", strtotime($goalEnd));	
			
		
		?>
			<div class="well" style="margin-top: 15px;">
				<h1><?php echo $goalTitle; ?></h1>
				<p><?php echo $goalDesc; ?></p>
				<h3><?php echo $goalStart; ?></h3>
				<h3><?php echo $goalEnd; ?></h3>
			</div>

		<?php
		endwhile;

	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}












?>