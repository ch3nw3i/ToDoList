<?php
include '../dal/User.php';
//include '../common/time.php';

session_start();
$user = new User();
$userinfo = new UserInfo();
$time = new time();

$userinfo->id = $_SESSION['userid'];
$userinfo->username = $_SESSION['username'];
$userinfo->password = $_POST['password'];
$userinfo->email = $_POST['email'];
$userinfo->name = $_POST['name'];
$userinfo->gender = $_POST['gender'];
$userinfo->gmt_modified = $time->getNowDatetime();

$user->changeUserInfo($userinfo);
header("Location: http://localhost:8090/ToDoList/person.php");
?>