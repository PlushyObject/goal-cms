<?php

include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/Goal.class.php';

class GoalController
{
	
	
	public function save_goal($Goal)
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
      
        $goalCreator = $_SESSION['Email'];

		$query = "INSERT INTO goals (title, description, creator, startDate, endDate) VALUES (:title, :description, :creator, :startDate, :endDate)";

		$addGoal = $db->prepare($query);
		$addGoal->bindParam (":title", $Goal->title, PDO::PARAM_STR);
		$addGoal->bindParam (":description", $Goal->description, PDO::PARAM_STR);
		$addGoal->bindParam (":creator", $Goal->creator, PDO::PARAM_STR);
		$addGoal->bindParam (":startDate", $Goal->startDate, PDO::PARAM_STR);
		$addGoal->bindParam (":endDate", $Goal->endDate, PDO::PARAM_STR);
		$addGoal->execute();
		
	}
	
	
	
}


?>