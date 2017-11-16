<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>添加新任务</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php include TEMPLATES_HEADER; ?>
    <div class="container" id="index" align="center">
    <?php 
    include COMMON_TIME;
	if (isset($_GET['quadrant'])){
	    $quadrant = $_GET['quadrant'];
	    $_SESSION['quadrant'] = $quadrant;
	    $nowDate = time::getNowDate();
	    $nowTime = time::getNowTime();
	    $nowDatetime = time::getNowDatetime();
	?>
	<div class="container">
	<form name="add_new_task" id="add_new_task" method="post" 
	    action="application/control/addNewTask.php">
	    <table class="table table-bordered" align="center" border="1" style="text-align: center">
	        <?php
	        switch ($quadrant) {
	            case $quadrant==1;
	        ?>
	        <tr bgcolor="#FF9900">
	            <td colspan="2">
	                <strong>添加任务：很重要-很紧急</strong>
	            </td>
	        </tr>
	        <?php 
	            break;
	            
	            case $quadrant==2;
	        ?>
	        <tr bgcolor="#FFFF66">
	            <td colspan="2">
	                <strong>添加任务：很重要-不紧急</strong>
	            </td>
	        </tr>
	        <?php 
	        break;
	            
	        case $quadrant==3;
	        ?>
	        <tr bgcolor="#99CCFF">
	            <td colspan="2">
	                <strong>添加任务：不重要-很紧急</strong>
	            </td>
	        </tr>
	        <?php 
	        break;
	            
	        case $quadrant==4;
	        ?>
	        <tr bgcolor="#66FF99">
	            <td colspan="2">
	                <strong>添加任务：不重要-不紧急</strong>
	            </td>
	        </tr>
	        <?php
	        break; 
	        
	        default:
	        ?>
	        <tr>
	            <td colspan="2">
	                <strong>添加任务</strong>
	            </td>
	        </tr>
	        <?php
	        }
	        ?>
	        <tr>
	            <td>任务象限：</td>
	            <td>
	                <div class="radio">
	                    <label>
	                        <input type="radio" name="quadrant" id="quadrant1" value="1" <?php if ($quadrant==1) echo "checked"?> disabled>很重要-很紧急
	                    &nbsp;</label>
	                    <label>
	                        <input type="radio" name="quadrant" id="quadrant2" value="2" <?php if ($quadrant==2) echo "checked"?> disabled>很重要-不紧急
	                    &nbsp;</label>
	                    <label>
	                        <input type="radio" name="quadrant" id="quadrant3" value="3" <?php if ($quadrant==3) echo "checked"?> disabled>不重要-很紧急
	                    &nbsp;</label>
	                    <label>
	                        <input type="radio" name="quadrant" id="quadrant4" value="4" <?php if ($quadrant==4) echo "checked"?> disabled>不重要-不紧急
	                    &nbsp;</label>
	                </div>
	            </td>
	        </tr>
	        <tr>
	            <td>任务名：</td>
	            <td><input type="text" name="title" size="100"></td>
	        </tr>
	        <tr>
	            <td>邮件提醒：</td>
	            <td>
	                <div class="radio">
	                    <label><input type="radio" name="is_remind" id="is_remind" value="1">开启</label>
	                    <label><input type="radio" name="is_remind" id="is_remind" value="0" checked>关闭</label>
	                </div>
	                <label>提醒时间：</label>
	                <input type="text" name="remind" id="date"
	                 value="<?php echo $nowDatetime;?>">
	            </td>
	        </tr>
	        <tr>
	            <td>项目：</td>
	            <td><input type="text" name="project" size="100"></td>
	        </tr>
	        <tr>
	            <td>标签：（多个标签之间用 @ 分隔）</td>
	            <td><input type="text" name="tag" size="100"></td>
	        </tr>
	        <tr>
	            <td>地点：</td>
	            <td><input type="text" name="location" size="100"></td>
	        </tr>
	        <tr>
	            <td>子任务（子任务之间用 @ 分隔）：</td>
	            <td><textarea name="subtask" rows="5" cols="100px" style="resize:none"></textarea></td>
	        </tr>
	        <tr>
	            <td>描述：</td>
	            <td><textarea name="summary" rows="5" cols="100px" style="resize:none"></textarea></td>
	        </tr>
	        <tr>
	            <td>时间标识：</td>
	            <td>创建时间：
	                <input type="text" name="gmt_create" id="gmt_create"
	                 value="<?php echo $nowDatetime;?>">
	            </td>
	        </tr>
	        <tr>
	            <td colspan="2">
	                <input class="btn btn-success" type="submit" name="addTask" id="addTask" value="添加任务">
	            </td>
	        </tr>
	    </table>
	</form>
	</div>
	<?php }?>
    </div>
    <?php include TEMPLATES_FOOTER; ?>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>