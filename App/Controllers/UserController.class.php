<?php

include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';

class UserController
{
	
	
	public function save_user($User)
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "INSERT INTO users (username, password) VALUES (:username, :password)";

		$addGoal = $db->prepare($query);
		$addGoal->bindParam (":username", $User->username, PDO::PARAM_STR);
		$addGoal->bindParam (":password", $User->password, PDO::PARAM_STR);
		$addGoal->execute();
		
	}
	
	
	
}


?>