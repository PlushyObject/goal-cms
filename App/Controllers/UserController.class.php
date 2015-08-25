<?php

include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';

class UserController
{
	
    public function check_if_user_exists($User)
    {
      
        $dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
      
        $query = "SELECT * FROM users WHERE username=:username";
        $checkUser = $db->prepare($query);
		$checkUser->bindParam (":username", $User->username, PDO::PARAM_STR);
        $checkUser->execute();
        $allRows = $checkUser->fetchAll();
        $rowCount = count($allRows);
        
        if($rowCount === 1):
          return true;
        else:
          return false;
        endif;
        
        $db = null;
    
    }
  
  
    public function login_user($User)
    {
      try 
      {
        $dbObject = new Database;
        $db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

        $query = "SELECT * FROM users WHERE email=:email";
        $loginUser = $db->prepare($query);
        $loginUser->bindParam (":email", $User->email, PDO::PARAM_STR);
        $loginUser->execute();

        $userRow = $loginUser->fetch(PDO::FETCH_ASSOC);

        if( $userRow->email = $User->email && $userRow->password = $User->password ):

          session_start();
          session_regenerate_id(true); 

          $_SESSION['Email'] = $userRow->email;

        endif;
        
        $db = null;

      }
      catch(PDOException $e)
      {
        echo $e->getMessage();

      }
    }
  
	public function save_user($User)
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "INSERT INTO users (email, password) VALUES ( :email, :password)";

		$addUser = $db->prepare($query);
		$addUser->bindParam (":email", $User->email, PDO::PARAM_STR);		
		$addUser->bindParam (":password", $User->password, PDO::PARAM_STR);		
		$addUser->execute();
      
        $db = null;

	}
	
	
	
}


?>