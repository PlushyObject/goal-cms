<div class="container">
	<div class="row">
		
		<div class="col-md-6 col-md-offset-3">
			<h2 style="color: #449DD9" class="text-center"><?php echo $message; ?></h2>
			
			<?php 

					$goal_id = $_GET['goal_id'];		
					$Goal = Goal::get_goal_by_id($goal_id);

				
					if( $Goal->completed && $Goal->creator == $_SESSION['Email'] ):
						$goal_classes = 'goal-complete';
					else:
						$goal_classes = 'goal-incomplete';
					endif;

					if( session_status() == PHP_SESSION_ACTIVE && $Goal->creator === $_SESSION['Email'] ):
						include '../App/Views/partials/goal_edit.php';	
					else:
						include '../App/Views/goal_card.php';	
					endif;

					
			?>
			
		</div>
	</div>
</div>