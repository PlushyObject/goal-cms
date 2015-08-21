<?php

include_once 'config.php';

class Database {

	static function connect_to_database($db_host, $db_port, $db_name, $db_username, $db_password){
		
		$dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_name"; //Data Source Name = MySQL
		
		$db = new PDO($dsn, $db_username, $db_password); //Connects to DB and creates PDO Object
		
		return $db; //Returns the Database Object
		
	}	

}

?>