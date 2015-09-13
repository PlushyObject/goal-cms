<?php

	include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class User
{
	
	public function __construct($email, $password, $firstName, $lastName)
	{
		
		$this->email = $email;
		$this->password = $password;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		
	}
	
	public static function get_current_user_email()
	{
		
		if(isset($_SESSION['Email'])):
				$currentUser = $_SESSION['Email'];
				return $currentUser;
		endif;
		
	}

	public static function get_current_user_first_name()
	{

		if(isset($_SESSION['FirstName'])):
				$currentUserFirstName = $_SESSION['FirstName'];
				return $currentUserFirstName;
		endif;

	}

	public static function get_current_user_last_name()
	{

		if(isset($_SESSION['LastName'])):
				$currentUserLastName = $_SESSION['LastName'];
				return $currentUserLastName;
		endif;

	}
	
	public static function get_user_by_email($email)
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "SELECT * from users WHERE email='$email'";

		$User = $db->prepare($query);
		$User->execute();

		return $User;	

	}
	
	public function save_user($User)
	{

		$dbObject = new Database;
		$db = $dbObject->connect_to_database(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS);

		$query = "INSERT INTO users (email, password, firstName, lastName) VALUES ( :email, :password, :firstName, :lastName)";

		$addUser = $db->prepare($query);
		$addUser->bindParam (":email", $User->email, PDO::PARAM_STR);		
		$addUser->bindParam (":password", $User->password, PDO::PARAM_STR);
		$addUser->bindParam (":firstName", $User->firstName, PDO::PARAM_STR);	
		$addUser->bindParam (":lastName", $User->lastName, PDO::PARAM_STR);			
		$addUser->execute();
      
        $db = null;

	}
	
}



?>