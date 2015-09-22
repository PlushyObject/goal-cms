<div class="container">
	<div class="row">

		<?php include 'partials/add_goal_form.php' ?>
		
		<div class="col-md-6">
			<h2 style="color: #449DD9" class="text-center"><?php echo $message; ?></h2>	
		
			
			<?php 
					
				$Goals = Goal::get_all_goals();

				while ( $Goal = $Goals->fetchObject() ):
				
					if( $Goal->completed && $Goal->creator == $_SESSION['Email'] ):
						$goal_classes = 'goal-complete';
					else:
						$goal_classes = 'goal-incomplete';
					endif;

					include '../App/Views/goal_card.php';	

				endwhile;
                
  
			?>
          
          
          
		</div>
      <div class="col-md-3">
        
            <?php 

                $Goals = Goal::get_all_goals();

                $TotalGoals = $Goals->rowCount();
                $CompletedGoals = [];
                
                while ( $Goal = $Goals->fetchObject() ):
				
					if( $Goal->completed):
						array_push( $CompletedGoals, $Goal );
					endif;

				endwhile;
                

            ?>
          
              <?php 


              $str = (count($CompletedGoals)/$TotalGoals);
              $percent = round($str * 100 ) . '%';
        
              ?>
        
            <p>Percentage of Total Goals Completed:</p><h3> <?php echo $percent; ?></h3>
        
            <?php 

              $CurrentUserGoals = Goal::get_current_user_goals();
  
              $TotalUserGoals = $CurrentUserGoals->rowCount();
              $CompletedUserGoals = [];
                
                while ( $Goal = $CurrentUserGoals->fetchObject() ):
				
					if( $Goal->completed):
						array_push( $CompletedUserGoals, $Goal );
					endif;

				endwhile;
              if($TotalUserGoals):
                $strUser = (count($CompletedUserGoals)/$TotalUserGoals);
                $percentUser = round($strUser * 100 ) . '%';
              endif;
              

            ?>
            
        <?php if(!empty($percentUser)): ?>
        
          <p>Percentage of User Goals Completed:</p>
          <h1><?php echo $percentUser; ?></h1>
        
        <?php endif; ?>
        
      </div>
	</div>
</div>