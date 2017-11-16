<?php
include '../../config.php';
include DAL_TASK;
?>
<?php
$id = $_GET['id'];
//echo $id."<br>"; 
$task = new Task();
$uid = $task->permanentlyDelete($id);
if ($uid == 1) {
    header("Location: http://localhost:8090/ToDoList/recycleBin.php");
} else {
    echo "永久删除失败！请<a href='../../ToDoList.php'>重试</a>。";
}
?>