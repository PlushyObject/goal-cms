<?php

include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/Goal.class.php';

class GoalController
{
	
	
	public function save_goal($Goal)
	{
		try
		{
				$dbObject = new Database;
				$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

				$query = "INSERT INTO goals (title, description, creator, startDate, endDate) VALUES (:title, :description, :creator, :startDate, :endDate)";

				$addGoal = $db->prepare($query);
				$addGoal->bindParam (":title", $Goal->title, PDO::PARAM_STR);
				$addGoal->bindParam (":description", $Goal->description, PDO::PARAM_STR);
				$addGoal->bindParam (":creator", $Goal->creator, PDO::PARAM_STR);
				$addGoal->bindParam (":startDate", $Goal->startDate, PDO::PARAM_STR);
				$addGoal->bindParam (":endDate", $Goal->endDate, PDO::PARAM_STR);
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
      
        
	}


?>