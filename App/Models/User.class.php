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
	
	public static function get_current_user()
	{
		
		if(isset($_SESSION['Email'])):
				$currentUser = $_SESSION['Email'];
				return $currentUser;
		endif;
		
	}
	
}



?>