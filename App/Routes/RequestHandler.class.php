<?php

include_once ROOT_PATH.'/App/Controllers/GoalController.class.php';
include_once ROOT_PATH.'/App/Controllers/UserController.class.php';
include_once ROOT_PATH.'/App/Controllers/AuthController.class.php';


class RequestHandler
{
	
	public function display_view($message)
	{
		
		// Grabs the URI and breaks it apart in case we have querystring stuff
		$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

		//Root
		
		if($request_uri[0] === '/public_html/'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
					require '../App/Views/goals.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				GoalController::add_goal();
			endif;
		
		endif;
		
		//Goals
		
		if($request_uri[0] === '/public_html/goals'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				require '../App/Views/goals.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				GoalController::add_goal();
			endif;
		
		endif;
      
        if($request_uri[0] === '/public_html/goals/json'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				header('Location: /public_html/json_goals.php');
			endif;
		
		endif;
		
		if($request_uri[0] === '/public_html/goal'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				require '../App/Views/goal.php';
			endif;
			
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				GoalController::update_goal_by_id();
			endif;
		
		endif;
		
		//Register
		
		if($request_uri[0] === '/public_html/register'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				require '../App/Views/register.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				UserController::add_user();
			endif;
			
		endif;
		
		//Login
		
		if($request_uri[0] === '/public_html/login'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				require '../App/Views/login.php';
			endif;
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'):
				AuthController::login_user();
			endif;
		
		endif;
		
		if($request_uri[0] === '/public_html/logout'):
	
			if($_SERVER['REQUEST_METHOD'] == 'GET'):
				AuthController::logout_user();
			endif;
		
		endif;

			
		}
	}

?>