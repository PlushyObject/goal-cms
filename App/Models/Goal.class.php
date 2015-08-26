<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class Goal
	{

		public function __construct( $title, $description, $creator, $startDate, $endDate)
		{
				$this->title = $title;
				$this->description = $description;
				$this->creator = $creator;
				$this->startDate = $startDate;	
				$this->endDate = $endDate;
				$this->completed = false;

		}
	
		public static function get_all_goals()
		{

			$dbObject = new Database;
			$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

			$query = "SELECT * from goals ORDER BY goal_id DESC";

			$allGoals = $db->prepare($query);
			$allGoals->execute();

			return $allGoals;	

		}
	
		public static function get_goal_by_id($id)
		{

			$dbObject = new Database;
			$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

			$query = "SELECT * from goals WHERE goal_id='$id'";

			$Goal = $db->prepare($query);
			$Goal->execute();

			return $Goal;	

		}
	
		public static function get_current_user_goals()
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
	
		public static function print_goal_card($Goal)
		{
		
			if( $Goal->completed && $Goal->creator == $_SESSION['Email'] ):
				$goal_classes = 'goal-complete';
			else:
				$goal_classes = 'goal-incomplete';
			endif;
			
			include '../App/Templates/goal_card.php';	
			
		}

}

?>