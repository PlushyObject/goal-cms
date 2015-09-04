<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
include_once 'Database.class.php';
include_once 'Goal.class.php';
include_once 'GoalIndex.class.php';

class GoalIndex
{
	
	public function print_goals($Goals)
	{

		while ( $goalData = $Goals->fetchObject() ):

			$goalTitle = $goalData->title;
			$goalDesc = $goalData->description;
			$goalCreator = $goalData->creator;
			$goalStart = date("l, F j", strtotime($goalData->startDate));
			$goalEnd = date("l, F j", strtotime($goalData->endDate));
		
			$Goal = new Goal($goalTitle, $goalDesc, $goalCreator, $goalStart, $goalEnd);
		
			$Goal->goalId = $goalData->goal_id;
			$Goal->completed = $goalData->completed;
		
 			Goal::print_goal_card($Goal);
		
			endwhile;

	}
	
}

?>