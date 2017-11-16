<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>任务详情</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <?php 
    include TEMPLATES_HEADER;
    include DAL_TASK;
    include COMMON_PARSE;
//    include MODEL_TASKINFO;
    ?>
    <div class="container" id="index" align="center">
    <?php 
    $id = $_GET['id'];
    $quadrant = $_GET['quadrant'];
    $task = new Task();
    $taskinfo = new TaskInfo();
    $taskinfo = $task->getTaskById($id);
    ?>
    <div class="container">
    <form name="show_task_detail" id="show_task_detail" method="post" action=" ">
        <table class="table table-bordered" align="center" border="1" style="text-align: center">
            <?php
            switch ($quadrant) {
                case $quadrant==1;
            ?>
            <tr bgcolor="#FF9900">
                <td colspan="2">
                    <strong>查看 | 修改：很重要-很紧急</strong>
                </td>
            </tr>
            <?php 
                break;
                
                case $quadrant==2;
            ?>
            <tr bgcolor="#FFFF66">
                <td colspan="2">
                    <strong>查看 | 修改：很重要-不紧急</strong>
                </td>
            </tr>
            <?php 
            break;
                
            case $quadrant==3;
            ?>
            <tr bgcolor="#99CCFF">
                <td colspan="2">
                    <strong>查看 | 修改：不重要-很紧急</strong>
                </td>
            </tr>
            <?php 
            break;
                
            case $quadrant==4;
            ?>
            <tr bgcolor="#66FF99">
                <td colspan="2">
                    <strong>查看 | 修改：不重要-不紧急</strong>
                </td>
            </tr>
            <?php
            break; 
            
            default:
            ?>
            <tr>
                <td colspan="2">
                    <strong>查看 | 修改</strong>
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
                            <input type="radio" name="quadrant" id="quadrant1" value="1" <?php if ($quadrant==1) echo "checked"?>>很重要-很紧急
                        &nbsp;</label>
                        <label>
                            <input type="radio" name="quadrant" id="quadrant2" value="2" <?php if ($quadrant==2) echo "checked"?>>很重要-不紧急
                        &nbsp;</label>
                        <label>
                            <input type="radio" name="quadrant" id="quadrant3" value="3" <?php if ($quadrant==3) echo "checked"?>>不重要-很紧急
                        &nbsp;</label>
                        <label>
                            <input type="radio" name="quadrant" id="quadrant4" value="4" <?php if ($quadrant==4) echo "checked"?>>不重要-不紧急
                        &nbsp;</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>任务名：</td>
                <td><input type="text" name="title" size="100" value="<?php echo $taskinfo->title;?>"></td>
            </tr>
            <tr>
                <td>邮件提醒：</td>
                <td>
                    <div class="radio">
                        <label><input type="radio" name="is_remind" id="is_remind" value=<?php if($taskinfo->is_remind==1) echo "'1' checked"?>>开启</label>
                        <label><input type="radio" name="is_remind" id="is_remind" value=<?php if($taskinfo->is_remind==0) echo "'0' checked"?>>关闭</label>
                    </div>
                    <label>提醒时间：</label>
                    <input type="text" name="remind" id="date" value="<?php echo $taskinfo->remind; ?>">
                </td>
            </tr>
            <tr>
                <td>项目：</td>
                <td><input type="text" name="project" size="100" value="<?php echo $taskinfo->project; ?>"></td>
            </tr>
            <tr>
                <td>标签：（多个标签之间用 @ 分隔）</td>
                <td><input type="text" name="tag" size="100" value="<?php echo $taskinfo->tag; ?>"></td>
            </tr>
            <tr>
                <td>地点：</td>
                <td><input type="text" name="location" size="100" value="<?php echo $taskinfo->location; ?>"></td>
            </tr>
            <tr>
                <td>子任务（子任务之间用 @ 分隔）：</td>
                <td>
	                <textarea name="subtask" rows="5" cols="100px" style="resize:none"><?php
	                    $arr = parseStringByAT($taskinfo->subtask);
	                    foreach ($arr as $value) {
	                    	echo $value."\r\n";
	                    }
	                ?>
	                </textarea>
                </td>
            </tr>
            <tr>
                <td>描述：</td>
                <td><textarea name="summary" rows="5" cols="100px" style="resize:none"><?php echo $taskinfo->summary; ?></textarea></td>
            </tr>
            <tr>
                <td>时间标识：</td>
                <td>
                <label>创建时间：<input type="text" name="gmt_create" id="gmt_create" value="<?php echo $taskinfo->gmt_create; ?>"></label>
                <label>更新时间：<input type="text" name="gmt_modified" id="gmt_modified" value="<?php echo $taskinfo->gmt_modified; ?>"></label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="btn btn-success" type="submit" name="addTask" id="addTask" value="修改任务">
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
    <?php include TEMPLATES_FOOTER; ?>
</body>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>