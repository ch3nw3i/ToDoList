<?php
include '../dal/User.php';
//include '../model/UserInfo.php';
//include '../common/time.php';

$username = $_POST['username'];
$email = $_POST['email'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$confirmPasswor = $_POST['confirmPassword'];

$user = new User();
$userinfo = new UserInfo();

$userinfo->username = $username;
$userinfo->email = $email;
$userinfo->name = $name;
$userinfo->gender = $gender;
$userinfo->password = $password;

if ($password == $confirmPasswor) {
    $rstNum = $user->checkUsernameOnly($username);
    $result = $user->registerUser($userinfo);
	if ($rstNum == 0) {
		if ($result) {
			echo "注册成功，<a href='../../login.php'>马上登录</a>。";
		} else {
			echo "注册失败，数据库写入用户失败，请<a href='../../register.php'>重试</a>。";
		}
	} else {
		echo "注册失败，用户名已存在，请<a href='../../register.php'>重试</a>。";
	}
}else {
    echo "密码与确认密码不同，请<a href='../../register.php'>重试</a>。";
}
?>