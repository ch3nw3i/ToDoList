<?php
session_start();  
session_unset();  
session_destroy();
header("Location: http://localhost:8090/ToDoList/index.php");
?>  