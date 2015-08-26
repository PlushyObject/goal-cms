<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
		
		<div class="col-md-9">
			
			<?php $sessionEmail = $_SESSION['Email']; ?>
					
          
          <h4>Logged in as <?php echo $sessionEmail; ?> </h4>
          
			<?php

				$GoalIndex = new GoalIndex;
				$Goals = Goal::get_all_goals();
				$GoalIndex->print_goals($Goals);

			?>
		</div>
	</div>
</div>