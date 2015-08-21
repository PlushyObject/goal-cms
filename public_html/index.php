<?php

include_once '../config.php';
include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/Goal.class.php';
include_once ROOT_PATH.'/App/Models/GoalIndex.class.php';
include_once ROOT_PATH.'/App/Models/User.class.php';
include_once ROOT_PATH.'/App/Controllers/GoalController.class.php';
include_once ROOT_PATH.'/App/Routes/RequestHandler.class.php';

?>

<?php include '../App/Templates/partials/html_head.php'; ?>

<?php 

	$message = 'Create a goal to get started on your wellness journey!';

	if(isset($_GET['message'])):
		if( $_GET['message'] == 'save_success'):
			$message = 'Awesome! You Created a Goal!';
		elseif ($_GET['message'] == 'register_success'):
			$message = 'Awesome! You are Totally Registered!';
		endif;
	endif;

	$rh = new RequestHandler;

	$rh->display_view($message);

?>


	
<?php include '../App/Templates/partials/footer.php' ?>
