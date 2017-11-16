<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>回收站</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php include TEMPLATES_HEADER; ?>
    <div class="container" id="recycleBin" align="center">
    <table class="table" style="border-style:dashed;">
        <tr class="info">
            <td>任务序号</td>
            <td>任务名称</td>
            <td>所属象限</td>
            <td>是否提醒</td>
            <td>提醒时间</td>
            <td>所属项目</td>
            <td>标签</td>
            <td>地点</td>
            <td>子任务</td>
            <td>任务描述</td>
            <td>是否结束</td>
            <td>是否删除</td>
            <td>创建时间</td>
            <td>修改时间</td>
            <td colspan="2" align="center">操作</td>
        </tr>
    <?php 
        include DAL_TASK;
	    $username = $_SESSION['username'];
	    $userid = $_SESSION['userid'];
	    $is_deleted = 1;
        $task = new Task();
        $arr = $task->getTasksByUserIdAndIsDeleted($userid, $is_deleted);
        foreach ($arr as $taskinfo) {
    ?>
        <tr>
            <td class="info"><?php echo $taskinfo->id; ?></td>
            <td><?php echo $taskinfo->title; ?></td>
            <td><?php echo $taskinfo->quadrant; ?></td>
            <td><?php echo $taskinfo->is_remind; ?></td>
            <td><?php echo $taskinfo->remind; ?>&nbsp;</td>
            <td><?php echo $taskinfo->project; ?>&nbsp;</td>
            <td><?php echo $taskinfo->tag; ?>&nbsp;</td>
            <td><?php echo $taskinfo->location; ?>&nbsp;</td>
            <td><?php echo $taskinfo->subtask; ?>&nbsp;</td>
            <td><?php echo $taskinfo->summary; ?>&nbsp;</td>
            <td><?php echo $taskinfo->is_finished; ?></td>
            <td><?php echo $taskinfo->is_deleted; ?></td>
            <td><?php echo $taskinfo->gmt_create; ?></td>
            <td><?php echo $taskinfo->gmt_modified; ?></td>
            <td><a href="application/control/recoveryTask.php?id=<?php echo $taskinfo->id; ?>">恢复</a></td>
            <td><a href="application/control/permanentlyDelete.php?id=<?php echo $taskinfo->id; ?>">永久删除</a></td>
        </tr>
    <?php 
        }
    ?>
    </table>
    </div>
    <?php include TEMPLATES_FOOTER; ?>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>