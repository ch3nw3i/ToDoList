<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include "../dal/User.php";
$user = new User();
if ($user->checkUserValidate($username, $password) == true) {
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $user->getIdByUsername($username);
	header("Location: http://localhost:8090/ToDoList/index.php");
} else {
?>
    <div align="center">
        <p>用户名或密码错误，请<a href="../../login.php">重试</a>。</p>
    </div>
<?php 
}
?>