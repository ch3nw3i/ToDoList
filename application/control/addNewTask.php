<?php
include_once '../../config.php';
//include MODEL_TASKINFO;
include DAL_TASK;
session_start();

if (isset($_POST)) {
    $taskinfo = new TaskInfo();
    $task = new Task();
    
    $title = $_POST['title'];
	$user_id = $_SESSION['userid'];
	$username = $_SESSION['username'];
	$quadrant = $_SESSION['quadrant'];
	$remind = $_POST['remind'];
	$project = $_POST['project'];
	$tag = $_POST['tag'];
	$location = $_POST['location'];
	$subtask = $_POST['subtask'];
	$summary = $_POST['summary'];
    $is_remind = $_POST['is_remind'];
    $is_finished = 0;
    $is_deleted = 0;
	$gmt_create = $_POST['gmt_create'];
	$gmt_modified = $_POST['gmt_create'];
	
	$taskinfo->title = $title;
	$taskinfo->user_id = $user_id;
	$taskinfo->username = $username;
    $taskinfo->quadrant = $quadrant;
	$taskinfo->remind = $remind;
	$taskinfo->project = $project;
	$taskinfo->tag = $tag;
	$taskinfo->location = $location;
	$taskinfo->subtask = $subtask;
	$taskinfo->summary = $summary;
    $taskinfo->is_remind = $is_remind;
    $taskinfo->is_finished = $is_finished;
    $taskinfo->is_deleted = $is_deleted;
	$taskinfo->gmt_create = $gmt_create;
	$taskinfo->gmt_modified = $gmt_modified;
	
	$uid = $task->addTask($taskinfo);
//	echo $uid;
    header("Location: http://localhost:8090/ToDoList/todolist.php");
}
?>