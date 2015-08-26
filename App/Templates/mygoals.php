<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
      
        <?php
  
          if(!isset($_SESSION)):

            session_start();
  
          endif;

          if(isset($_SESSION['Email'])):
            $sessionEmail = $_SESSION['Email'];
          endif;

        ?>
		
		<div class="col-md-9">
          
          <h4>Logged in as <?php echo $sessionEmail; ?> </h4>
          
			<?php

				$GoalIndex = new GoalIndex;
				
				$Goals = $GoalIndex->get_current_user_goals();

				$GoalIndex->print_goals($Goals);

			?>
		</div>
	</div>
</div>