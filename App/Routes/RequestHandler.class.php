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
                    require '../App/Templates/goal_index.php';
                    break;
                  else:
                    require '../App/Templates/login.php';
                  endif;
				// About page
				case '/public_html/register':
						require '../App/Templates/register.php';
						break;
                case '/public_html/login':
						require '../App/Templates/login.php';
						break;
                case '/public_html/logout':
						require '../App/Controllers/Scripts/user_logout.php';
						break;
				// Everything else
				default:
						require '../App/Templates/goal_index.php'; //Switch this to 404
						break;
			
		}
	}
}

?>