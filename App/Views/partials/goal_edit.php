<?php
    $endTime =  strtotime($Goal->endDate);
    $currentTime = time();
    $timeleft = $endTime-$currentTime;
    $daysleft = round((($timeleft/24)/60)/60); 
?>

<div class="container">
	<div class="row">
		<h2 style="color: #449DD9" class="text-center"><?php echo $message; ?></h2>
        <div class="col-md-6">
          <div class="goal-card">
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
        </div>
        <div class="col-md-6">
            <form method="post">
              <div class="form-group">
                  <label>Goal Title</label>
                  <input class="form-control" value="<?php echo $Goal->title ?>" type="text" name="title" id="edit-goal-title">
              </div>
              <div class="form-group">
                  <label>Goal Description</label>
                  <textarea class="form-control" rows="8" name="description"><?php echo $Goal->description ?></textarea>
              </div>
              <div class="form-group">
                  <label>Complete?</label> 
                  <?php 
                      if($Goal->completed == 1 ): 
                          $goalCompleteCheck = 'checked';
                      else:
                          $goalCompleteCheck = '';
                      endif;
                  ?>
                  <input type="checkbox" name="completed" <?php echo $goalCompleteCheck ?>>
              </div>
              <div class="form-group">
                  <label>Start Date</label>
                  <input class="form-control" type="date" name="startDate" value="<?php echo date("Y-m-d", strtotime($Goal->startDate));?>" name="startDate">
              </div>
              <div class="form-group">
                  <label>End Date</label>
                  <input class="form-control" name="endDate" type="date" value="<?php echo date("Y-m-d", strtotime($Goal->endDate));?>" name="endDate">
              </div>
              <button type="submit" class="btn btn-info btn-lg">Save Goal</button>
           </form>
        </div>
	</div>
</div>