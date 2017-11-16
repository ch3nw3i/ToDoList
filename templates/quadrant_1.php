<!--<?php include_once '../config.php';?>-->
<div class="col-xs-6" style="height: 230px; background:#FF9900; padding: 20px;">
    <div>
    <table id="todolist">
        <tr>
            <td>
                <strong>很重要-很紧急</strong>
            </td>
            <td>
                <a href="newTask.php?quadrant=1"><img src="images/plus.png" alt="增加"></a>
            </td>
        </tr>
    </table>
    </div>
    <div style="height: 170px; overflow-x: auto; overflow-y: block;">
	<table class="table" style="border-style:dashed;">
	    <?php
	        $task = new Task();
	        $username = $_SESSION['username'];
	        $quadrant = 1;
	        $is_deleted = 0;
	        $arr = $task->getTasksByUsername_Quadrant_IsDeleted($username, $quadrant, $is_deleted);
	        foreach ($arr as $value) {
	    ?>
	    <tr>
	        <td width="450px" class="todolist-td">
	            <?php echo $value->title;?>
	        </td>
	        <td>
                <a href="taskDetail.php?id=<?php echo $value->id;?>&quadrant=<?php echo $quadrant;?>" style="float:right"><img src="images/edit.png" alt="修改"></a>
                <a href="#" style="float:right"><img src="images/complete.png" alt="完成"></a>
                <a href="application/control/deleteTask.php?id=<?php echo $value->id;?>" style="float:right"><img src="images/trash.png" alt="删除"></a>
	        </td>
	    </tr>
	    <?php 
	        }
	    ?>
	</table>
	</div>
</div>