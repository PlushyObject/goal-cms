<?php

include_once ROOT_PATH.'/App/Models/Goal.class.php';

class RequestHandler
{
	
	public function display_view($message)
	{
		
		// Grabs the URI and breaks it apart in case we have querystring stuff
		$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

		//Root
		
		if($request_uri[0] === '/public_html/'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/goals.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				GoalController::add_goal();
			endif;
		
		endif;
		
		//Goals
		
		if($request_uri[0] === '/public_html/goals'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/goals.php';
			endif;
		
		endif;
		
		//Register
		
		if($request_uri[0] === '/public_html/register'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/register.php';
			endif;
		
		endif;
		
		//Login
		
		if($request_uri[0] === '/public_html/login'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/login.php';
			endif;
		
		endif;

			
		}
	}

?>