<?php

include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';

class UserController
{
	
    public function check_if_user_exists($User)
    {
      
        $dbObject = new Database;
				$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);
      
        $query = "SELECT * FROM users WHERE email=:email";
        $checkUser = $db->prepare($query);
				$checkUser->bindParam (":email", $User->email, PDO::PARAM_STR);
        $checkUser->execute();
        $allRows = $checkUser->fetchAll();
        $rowCount = count($allRows);
        
        if($rowCount):
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

        $query = " SELECT * FROM users WHERE email='$User->email' ";
        $loginUser = $db->prepare($query);
        $loginUser->execute();

        $result = $loginUser->fetch(PDO::FETCH_ASSOC);
				$userEmail = $result['email'];
				$userPassword = $result['password'];
				
				if($userEmail == $User->email && $userPassword == $User->password):
					session_start();
					$_SESSION["Email"] = $userEmail;
					header('Location: /public_html/index?message=login_success');
				else:
					header('Location: /public_html/login?message=login_error');
				endif;
         
        $db = null;

      }
      catch(PDOException $e)
      {
        die($e->getMessage());

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