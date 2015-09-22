<?php 

class Comment
{

	public function __construct($cmmnt_body, $cmmnt_goal)
    {
      $this->cmmnt_body = $cmmnt_body;
      $this->cmmnt_goal = $cmmnt_goal;
      $this->cmmnt_createdOn = '';
      
    }
  
    public static function save_comment($Comment)
    {
      
      try
			{
					$dbObject = new Database;
					$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

					$query = "INSERT INTO comments (cmmnt_body, cmmnt_goal, cmmnt_createdOn) VALUES (:cmmnt_body, :cmmnt_goal, now())";

					$addGoal = $db->prepare($query);
					$addGoal->bindParam (":cmmnt_body", $Comment->cmmnt_body, PDO::PARAM_STR);
					$addGoal->bindParam (":cmmnt_goal", $Comment->cmmnt_goal, PDO::PARAM_STR);
					$addGoal->execute();
        
					$db = null;	
			}
			catch( PDOException $Exception )
			{

				die($Exception->getMessage());

			}
      
      
    }
  
    public static function get_comments_by_goal_id($goal_id)
    {
            $dbObject = new Database;
			$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

			$query = "SELECT * from comments WHERE cmmnt_goal=$goal_id";

			$goalComments = $db->prepare($query);
			$goalComments->execute();

			return $goalComments;
    }

}


?>