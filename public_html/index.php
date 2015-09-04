<?php

include_once '../config.php';
include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/Goal.class.php';
include_once ROOT_PATH.'/App/Models/GoalIndex.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';
include_once ROOT_PATH.'/App/Controllers/GoalController.class.php';
include_once ROOT_PATH.'/App/Routes/RequestHandler.class.php';

	session_start();

	if(isset($_SESSION['Email'])):
		$sessionEmail = $_SESSION['Email'];
	endif;

	include '../App/Templates/partials/html_head.php';
	include '../App/Templates/partials/navbar.php';

	$message = 'Create a goal to get started on your wellness journey!';

	if(isset($_GET['message'])):
		if( $_GET['message'] == 'goal_saved'):
			$message = 'Awesome! You Created a Goal!';
		elseif ($_GET['message'] == 'user_saved'):
			$message = 'Awesome! You are Totally Registered!';
		elseif ($_GET['message'] == 'user_exists'):
			$message = 'It Appears that Username is Taken!';
		elseif ($_GET['message'] == 'user_does_not_exist'):
			$message = "That email does not currently exist in our database. <a href='/public_html/register'>Register Here</a>";
		endif;
	endif;

	$rh = new RequestHandler;

	$rh->display_view($message);

	include '../App/Templates/partials/footer.php' 

?>
