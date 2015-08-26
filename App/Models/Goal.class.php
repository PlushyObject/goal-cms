<?php

	include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class Goal
	{
	
		public $title = '';
		public $description = '';
		public $creator = '';
		public $startDate = '';
		public $endDate = '';

		public function __construct( $title, $description, $creator, $startDate, $endDate )
		{
				$this->title = $title;
				$this->description = $description;
				$this->creator = $creator;
				$this->startDate = $startDate;	
				$this->endDate = $endDate;	

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