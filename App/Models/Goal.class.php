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
	
		public static function save_goal($Goal)
		{
			try
			{
					$dbObject = new Database;
					$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

					$query = "INSERT INTO goals (title, description, creator, startDate, endDate, completed) VALUES (:title, :description, :creator, :startDate, :endDate, :completed)";

					$addGoal = $db->prepare($query);
					$addGoal->bindParam (":title", $Goal->title, PDO::PARAM_STR);
					$addGoal->bindParam (":description", $Goal->description, PDO::PARAM_STR);
					$addGoal->bindParam (":creator", $Goal->creator, PDO::PARAM_STR);
					$addGoal->bindParam (":startDate", $Goal->startDate, PDO::PARAM_STR);
					$addGoal->bindParam (":endDate", $Goal->endDate, PDO::PARAM_STR);
					$addGoal->bindParam (":completed", $Goal->completed, PDO::PARAM_BOOL);
					$addGoal->execute();

					$last_id = $db->lastInsertId();

					$query2 = "INSERT INTO users_goals (goal_email, goal_id ) VALUES (:goal_email, :goal_id)";

					$saveGoalToUser = $db->prepare($query2);
					$saveGoalToUser->bindParam (":goal_email", $Goal->creator, PDO::PARAM_STR);
					$saveGoalToUser->bindParam (":goal_id", $last_id, PDO::PARAM_STR);
					$saveGoalToUser->execute();

					$db = null;	
			}
			catch( PDOException $Exception )
			{

				die($Exception->getMessage());

			}
    
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

			return $Goal->fetchObject();	

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

}

?>