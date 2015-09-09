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
        ?>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                
                  <?php include '../App/Views/goal_card.php'; ?>
                  
                </div>
              </div>
            </div>
        <?php
        endif;
?>