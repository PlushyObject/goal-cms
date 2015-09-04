<?php

include_once ROOT_PATH.'/App/Models/Goal.class.php';

class RequestHandler
{
	
	public function display_view($message)
	{
		
		// Grabs the URI and breaks it apart in case we have querystring stuff
		$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

		//Root
		
		if($request_uri[0] === '/public_html/goals'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/newsfeed.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				GoalController::add_goal();
			endif;
		
		endif;
		
		//Newsfeed
		
		if($request_uri[0] === '/public_html/newsfeed'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/newsfeed.php';
			endif;
		
		endif;
		
		if($request_uri[0] === '/public_html/register'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/register.php';
			endif;
		
		endif;
		
		if($request_uri[0] === '/public_html/login'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Templates/login.php';
			endif;
		
		endif;

			
		}
	}

?>