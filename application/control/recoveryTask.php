<?php
include '../../config.php';
include DAL_TASK;
$id = $_GET['id'];
$task = new Task();
$uid = $task->recoveryTask($id);
if ($uid == 1) {
    header("Location: http://localhost:8090/ToDoList/recycleBin.php");
} else {
    echo "恢复失败！请<a href='../../recycleBin.php'>重试</a>。";
}
?>