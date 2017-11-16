<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户资料</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php include TEMPLATES_HEADER; ?>
    <?php
	if (!isset($_SESSION['username'])) {
	?>
    <div class="container" align="center">
	    <p>请先进行<a href="login.php">登录</a>。</p>
	</div>
	<?php 
	} else {
		include DAL_USER;
		$user = new User();
		$userinfo = $user->getUserById($_SESSION['userid']);
	?>
	<div class="container" align="center">
        <form name="changeUserInfo" method="post" action="application/control/changeUserInfo.php">
        <table class="table table-bordered" align="center" border="1" style="text-align: center">
            <tr class="info">
                <td colspan="2" align="center">用户信息修改</td>
            </tr>
            <tr>
                <td>用户Id：</td>
                <td>
                    <?php echo $userinfo->id; ?>
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $userinfo->id;?>">
                </td>
            </tr>
            <tr>
                <td>用户名：</td>
                <td>
                    <?php echo $userinfo->username; ?>
                    <input type="hidden" name="username" id="username" value="<?php echo $userinfo->username;?>">
                </td>
            </tr>
            <tr>
                <td>E-mail：</td>
                <td>
                    <input type="text" name="email" size="50" value="<?php echo $userinfo->email;?>">
                </td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td>
                    <input type="text" name="name" value="<?php echo $userinfo->name;?>">
                </td>
            </tr>
            <tr>
                <td>性别：</td>
                <td>
	                <div class="radio">
	                    <label><input type="radio" name="gender" id="gender_1" value="男" <?php if($userinfo->gender=="男") echo "checked";?>>男</label>
	                    <label><input type="radio" name="gender" id="gender_2" value="女" <?php if($userinfo->gender=="女") echo "checked";?>>女</label>
	                </div>
                </td>
            </tr>
            <tr>
                <td>账号创建时间：</td>
                <td><?php echo $userinfo->gmt_create;?></td>
            </tr>
            <tr class="danger">
                <td>请输入密码，确认修改：</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr class="info">
                <td colspan="2" align="center">
                    <input class="btn btn-danger" type="submit" name="confirm" value="确定修改">
                </td>
            </tr>
        </table>
        </form>
	 
	</div>
	<?php 
	}
	?>

    <?php include TEMPLATES_FOOTER; ?>
</body>
</html>
