<?php


include_once '../config.php';
include_once ROOT_PATH.'/App/Models/Database.class.php';
include_once ROOT_PATH.'/App/Models/Goal.class.php';

header('Content-Type: application/json');
Goal::echo_all_goals_json();

?>