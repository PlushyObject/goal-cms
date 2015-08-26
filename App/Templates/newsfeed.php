<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
		
		<div class="col-md-9">
			<h2 style="color: lightblue" class="text-center"><?php echo $message; ?></h2>	
		
			
			<?php 

				$sessionEmail = $_SESSION['Email'];
					

				$GoalIndex = new GoalIndex;
				$Goals = Goal::get_all_goals();
				$GoalIndex->print_goals($Goals);

			?>
		</div>
	</div>
</div>