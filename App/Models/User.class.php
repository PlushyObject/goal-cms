<?php

	include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class User
{
	
	public function __construct($email, $password)
	{
		
		$this->email = $email;
		$this->password = $password;
		
	}
	
	public static function get_current_user_email()
	{
		
		$currentUserEmail = $_SESSION['Email'];
		return $currentUserEmail;
		
	}
	
}



?>