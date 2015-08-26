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
          
			<?php

				$GoalIndex = new GoalIndex;
				
				$Goals = Goal::get_current_user_goals();

				$GoalIndex->print_goals($Goals);

			?>
			
		</div>
	</div>
</div>