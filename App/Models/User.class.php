<?php

	include_once 'config.php';
	include_once 'Database.class.php';

class User
{
	
	public function __construct($username, $password)
	{
		
		$this->username = $username;
		$this->$password = $password;
		
	}
	
}



?>