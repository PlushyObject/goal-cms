<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
		
		<div class="col-md-9">
			<?php

				$GoalIndex = new GoalIndex;
				
				$GoalIndex->print_all_goals();

			?>
		</div>
	</div>
</div>