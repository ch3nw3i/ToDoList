<header>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img alt="Logo" src="images/logo.png">
                </a>
		    </div>
		    <ul class="nav nav-tabs" style="padding-top: 20px;">
				<li role="presentation" id="index"><a href="index.php">首页</a></li>
                <li role="presentation" id="todolist" ><a href="todolist.php">四象限</a></li>
                <li role="presentation" id="recycleBin" ><a href="recycleBin.php">回收站</a></li>
				
				<li role="presentation" class="navbar-right" id="login">
				<?php 
					session_start();
					if (!isset($_SESSION['username'])) {
					?>
					    <div class="button">    
					        <a href="register.php"><button class="btn btn-primary">注册</button></a>
					        <a href="login.php"><button class="btn btn-success">登录</button></a>
					    </div>
					<?php
					} else {
					?>
					    <div class="user" align="center">
					        <div>当前用户：<a href="person.php"><?php echo $_SESSION['username']; ?></a></div>
					        <a href="application/control/logout.php">退出</a>
					    </div>
					<?php
					}
				?>
				</li>
			</ul>
		</div>
	</nav>
</header>