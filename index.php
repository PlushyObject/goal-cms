<?php

include_once 'config.php';
include_once 'App/Models/Database.class.php';
include_once 'App/Models/Goal.class.php';
include_once 'App/Models/GoalIndex.class.php';
include_once 'App/Models/User.class.php';
include_once 'App/Controllers/GoalController.class.php';

?>

<?php include 'html_head.php'; ?>

<?php 

	$message = 'Create a goal to get started on your wellness journey!';

	if(isset($_GET['save_success']) && $_GET['save_success']):
		$message = $_GET['save_success']; 
	endif;
?>
	
<?php include 'App/Templates/goal_index.php' ?>
	
<?php include 'footer.php' ?>
