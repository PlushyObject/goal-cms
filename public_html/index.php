<?php

include_once '../config.php';
include_once '../App/Models/Database.class.php';
include_once '../App/Models/Goal.class.php';
include_once '../App/Models/GoalIndex.class.php';
include_once '../App/Models/User.class.php';
include_once '../App/Controllers/GoalController.class.php';
include_once '../App/Routes/RequestHandler.class.php';

?>

<?php include '../App/Templates/partials/html_head.php'; ?>

<?php 

	$message = 'Create a goal to get started on your wellness journey!';

	if(isset($_GET['message'])):
		if( $_GET['message'] == 'save_success'):
			$message = 'Awesome! You Created a Goal!';
		endif;
	endif;

	$rh = new RequestHandler;

	$rh->display_view($message);

?>
	
<?php include '../App/Templates/partials/footer.php' ?>
