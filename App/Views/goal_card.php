

<div class="well <?php echo $goal_classes ?>" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12" >
			<a href="/public_html/goal?goal_id=<?php echo $Goal->goal_id; ?>">
				<h2 style="margin: 5px 0px;"><?php echo $Goal->title; ?></h2>
			</a>
			<?php if($Goal->completed): ?>
					<span class="completion-date"><i class="fa fa-star"></i> Completed on July 4, 1776</span>
			<?php endif; ?>
			
			<h4 style="margin: 5px 0px;"><?php echo $Goal->creator; ?></h4>
			<hr>
			<p><?php echo $Goal->description; ?></p>
			<?php
				$endTime =  strtotime($Goal->endDate);
				$currentTime = time();
				$timeleft = $endTime-$currentTime;
				$daysleft = round((($timeleft/24)/60)/60); 
			?>
			
			<?php if($daysleft > 0) : ?>
					<p><i class="fa fa-clock-o"></i> <b>Days Left: <?php echo $daysleft; ?></b></p>
			<?php endif; ?>
			
			<p><?php echo $Goal->goal_id; ?></p>
		</div>
	</div>
</div>