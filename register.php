<?php include "config.php"?>
<!DOCTYPE form PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>用户注册</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php include TEMPLATES_HEADER;?>
	<?php 
	if (!isset($_POST['submit'])) {
	?>
    <div class="container">
	<form name="register" id="register" method="post" action="application/control/registerCheck.php">
	    <table class="table table-bordered"  align="center" border="1" style="text-align: center">
	        <tr class="info">
	            <td colspan="2">用户注册</td>
	        </tr>
            <tr class="warning">
                <td>用户名：</td>
                <td>
	                <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Email：</td>
                <td><input type="text" name="email"></td>
            </tr>
            
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td>
                    <div class="radio">
                        <label><input type="radio" name="gender" id="gender_1" value="男">男</label>
                        <label><input type="radio" name="gender" id="gender_2" value="女">女</label>
                    </div>
                </td>
            </tr>
            <tr class="warning">
	            <td>密码：</td>
                <td>
		            <input type="password" name="password">
	            </td>
	        </tr>
	        <tr class="warning">
	            <td>确认密码：</td>
                <td>
                    <input type="password" name="confirmPassword">
	            </td>
	        </tr>
	        <tr class="info">
	            <td colspan="2">
                    <input class="btn btn-primary" type="submit" name="submit" value="注册">
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