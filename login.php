<?php include 'config.php';?>
<!DOCTYPE form PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <title>用户登录</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="text-align:center">
    <?php include TEMPLATES_HEADER;?>
    <div class="container">
    <form name="login" id="login" method="post" action="application/control/loginCheck.php">
        <table class="table table-bordered table-striped "  align="center" border="1" style="text-align: center">
            <tr class="info">
                <td colspan="2">用户登录</td>
            </tr>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr class="info">
                <td colspan="2">
                    <input class="btn btn-success" type="submit" name="submit" value="登录">
                </td>
            </tr>
        </table>
    </form>
    </div>
    <?php include TEMPLATES_FOOTER; ?>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>