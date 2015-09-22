<?php 

  include_once $_SERVER["DOCUMENT_ROOT"].'/config.php';
  include_once ROOT_PATH.'/App/Models/Database.class.php';
  include_once ROOT_PATH.'/App/Models/Comment.class.php';

  $comment_goal_id = $_POST['comment-goal-id'];
  $comment_body = $_POST["goal-$comment_goal_id-comment"];

  $Comment = new Comment($comment_body, $comment_goal_id);

  $Comment->save_comment($Comment);

  header('Location: /public_html/goals?message=comment_added');

  
    
?>