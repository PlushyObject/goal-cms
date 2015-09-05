<?php

	include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

	class Auth
	{
		
		public static function check_if_user_exists($User)
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
          header('Location: /public_html/login?message=user_does_not_exist');
        endif;
        
        $db = null;
    
    }
		
	}

?>