<?php 

class RequestHandler
{
	
	public function display_view($message)
	{
		
		// Grabs the URI and breaks it apart in case we have querystring stuff
		$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
		
		// Route it up!
		switch ($request_uri[0]) {
				// Home page
				case '/':
					session_start();
					if( isset($_SESSION) ):
						require '../App/Templates/goals.php';
						break;
					else:
						require '../App/Templates/login.php';
					endif;
			
				case '/public_html/goals':
					require '../App/Templates/goals.php';
					break;
			
				case '/public_html/register':
					require '../App/Templates/register.php';
					break;
			
				case '/public_html/login':
					require '../App/Templates/login.php';
					break;
			
				case '/public_html/logout':
					require '../App/Controllers/Scripts/user_logout.php';
					break;
			
				case '/public_html/mygoals':
					require '../App/Templates/mygoals.php';
					break;
			
				// Everything else
				default:
					require '../App/Templates/goals.php'; //Switch this to 404
					break;
			
		}
	}
}

?>