<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的 ToDo List</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php include TEMPLATES_HEADER; ?>
    <?php 
	if (!isset($_SESSION['username'])) {
	?>
		<div align="center">
		    <p>请先进行<a href="login.php">登录</a>。</p>
		</div>
	<?php 
	} else {
	?>
		<div class="container">
            <?php include_once DAL_TASK;?>
	        <?php include TEMPLATES_QUADRANT1;?>
	        <?php include TEMPLATES_QUADRANT2;?>
	        <?php include TEMPLATES_QUADRANT3;?>
	        <?php include TEMPLATES_QUADRANT4;?>
        </div>
	<?php 
	}
	?>
    <?php include TEMPLATES_FOOTER; ?>
</body>
</html>