            <?php
				$endTime =  strtotime($Goal->endDate);
				$currentTime = time();
				$timeleft = $endTime-$currentTime;
				$daysleft = round((($timeleft/24)/60)/60); 
			?>

<div class="goal-card <?php echo $goal_classes ?>">
	<div class="row goal-card-header-row">
		<div class="col-md-12" >
              <div class="goal-card-header">
                <a href="/public_html/goal?goal_id=<?php echo $Goal->goal_id; ?>">
                  <h2 class="goal-card-title"><?php echo $Goal->title; ?></h2>
                </a>
                <h5 class="color-white goal-card-info">
                  <i class="fa fa-user"></i> <?php echo $Goal->creator; ?> 
                  <?php if ($daysleft > 0):
                    echo "| <i class='fa fa-clock-o'></i> ";
                    echo "Days Left: $daysleft";
                   endif; 
                  ?>
                </h5>
              </div>
        </div>
  </div>
  <div class="row">
    <div class="col-md-12">
			
			<?php if($Goal->completed): ?>
					<div class="completion-date"><i class="fa fa-trophy"></i> Completed on July 4, 1776</div>
			<?php endif; ?>
			
			<hr>
			<p><?php echo $Goal->description; ?></p>

		</div>
	</div>
</div>
  
  
