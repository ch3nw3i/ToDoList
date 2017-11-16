<?php
include '../../config.php';
include DAL_TASK;
?>
<?php
$id = $_GET['id'];
//echo $id."<br>"; 
$task = new Task();
$uid = $task->deleteTask($id);
if ($uid == 1) {
    header("Location: http://localhost:8090/ToDoList/ToDoList.php");
} else {
	echo "删除失败！请<a href='../../ToDoList.php'>重试</a>。";
}
?>