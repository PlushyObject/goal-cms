<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
include_once 'Database.class.php';
include_once 'Goal.class.php';
include_once 'GoalIndex.class.php';

class GoalIndex
{
	
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
				<h2><?php echo $goalTitle; ?></h2>
				<h3><?php echo $goalCreator; ?></h3>
				<p><?php echo $goalDesc; ?></p>
				<h4><?php echo $goalStart; ?></h4>
				<h4><?php echo $goalEnd; ?></h4>
			</div>

		<?php
		endwhile;

	}
	
}












?>