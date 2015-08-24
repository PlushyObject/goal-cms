<?php

	include_once $_SERVER["DOCUMENT_ROOT"] . '/config.php';
	include_once ROOT_PATH.'/App/Models/Database.class.php';

class User
{
	
	public function __construct($username, $password, $email)
	{
		
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		
	}
	
}



?>