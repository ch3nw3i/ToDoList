<?php
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/common/conn.php";
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/model/TaskInfo.php";
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/common/time.php";

// 整体项目时，包导入路径
//include COMMON_CONN;
//include MODEL_TASKINFO;

// 测试时，包导入路径
//include "../common/conn.php";
//include "../model/TaskInfo.php";

class Task {
    function getTaskById($id) {
        $conn = new conn();
        $sql = "select * from taskinfo where id='".$id."' ";
        $rst = $conn->getRowsRst($sql);
        
        $taskinfo = new TaskInfo();
        $taskinfo->id = $rst['id'];
        $taskinfo->title = $rst['title'];
        $taskinfo->user_id = $rst['user_id'];
        $taskinfo->username = $rst['username'];
        $taskinfo->quadrant = $rst['quadrant'];
        $taskinfo->remind = $rst['remind'];
        $taskinfo->project = $rst['project'];
        $taskinfo->tag = $rst['tag'];
        $taskinfo->location = $rst['location'];
        $taskinfo->subtask = $rst['subtask'];
        $taskinfo->summary = $rst['summary'];
        $taskinfo->is_remind = $rst['is_remind'];
        $taskinfo->is_finished = $rst['is_finished'];
        $taskinfo->is_deleted = $rst['is_deleted'];
        $taskinfo->gmt_create = $rst['gmt_create'];
        $taskinfo->gmt_modified = $rst['gmt_modified'];
        
        $conn->close_rst();
        $conn->close_conn();
        return $taskinfo;
    }
    
    function getTasksByUserId($user_id) {
		$conn = new conn();
		$sql = "select * from taskinfo where userId='".$user_id."' ";
        $arr = $conn->getRowsArray($sql);
        $taskArr = array();
        foreach ($arr as $value) {
            $taskinfo = new TaskInfo();
            $taskinfo->id = $value['id'];
            $taskinfo->title = $value['title'];
            $taskinfo->user_id = $value['user_id'];
            $taskinfo->username = $value['username'];
            $taskinfo->quadrant = $value['quadrant'];
            $taskinfo->remind = $value['remind'];
            $taskinfo->project = $value['project'];
            $taskinfo->tag = $value['tag'];
            $taskinfo->location = $value['location'];
            $taskinfo->subtask = $value['subtask'];
            $taskinfo->summary = $value['summary'];
            $taskinfo->is_remind = $value['is_remind'];
            $taskinfo->is_finished = $value['is_finished'];
            $taskinfo->is_deleted = $value['is_deleted'];
            $taskinfo->gmt_create = $value['gmt_create'];
            $taskinfo->gmt_modified = $value['gmt_modified'];
            array_push($taskArr, $taskinfo);
        }
        $conn->close_rst();
        $conn->close_conn();
        return $taskArr;
	}
	
function getTasksByUserIdAndIsDeleted($user_id, $is_deleted) {
        $conn = new conn();
        $sql = "select * from taskinfo where user_id='".$user_id."' and is_deleted='".$is_deleted."' ";
//        echo $sql;
        $arr = $conn->getRowsArray($sql);
        $taskArr = array();
        foreach ($arr as $value) {
            $taskinfo = new TaskInfo();
            $taskinfo->id = $value['id'];
            $taskinfo->title = $value['title'];
            $taskinfo->user_id = $value['user_id'];
            $taskinfo->username = $value['username'];
            $taskinfo->quadrant = $value['quadrant'];
            $taskinfo->remind = $value['remind'];
            $taskinfo->project = $value['project'];
            $taskinfo->tag = $value['tag'];
            $taskinfo->location = $value['location'];
            $taskinfo->subtask = $value['subtask'];
            $taskinfo->summary = $value['summary'];
            $taskinfo->is_remind = $value['is_remind'];
            $taskinfo->is_finished = $value['is_finished'];
            $taskinfo->is_deleted = $value['is_deleted'];
            $taskinfo->gmt_create = $value['gmt_create'];
            $taskinfo->gmt_modified = $value['gmt_modified'];
            array_push($taskArr, $taskinfo);
        }
        $conn->close_rst();
        $conn->close_conn();
        return $taskArr;
    }
	
	function getTasksByUsername($username) {
		$conn = new conn();
		$sql = "select * from taskinfo where username='".$username."' ";
//		echo $sql."<br>";
		$arr = $conn->getRowsArray($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $arr;
	}
	
	function getTasksByQuadrant($quadrant) {
		$conn = new conn();
		$sql = "select * from taskinfo where quadrant='".$quadrant."' ";
//		echo $sql."<br>";
		$arr = $conn->getRowsArray($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $arr;
	}
	
	function getTasksByProject($project) {
        $conn = new conn();
        $sql = "select * from taskinfo where project='".$project."' ";
//        echo $sql."<br>";
        $arr = $conn->getRowsArray($sql);
        $conn->close_rst();
        $conn->close_conn();
        return $arr;
	}
	
	function getTasksByUsernameAndQuadrant ($username, $quadrant) {
		$conn = new conn();
		$sql = "select * from taskinfo where username='".$username."' and quadrant='".$quadrant."' ";
		$arr = $conn->getRowsArray($sql);
		$taskArr = array();
		foreach ($arr as $value) {
			$taskinfo = new TaskInfo();
			$taskinfo->id = $value['id'];
            $taskinfo->title = $value['title'];
            $taskinfo->user_id = $value['user_id'];
            $taskinfo->username = $value['username'];
            $taskinfo->quadrant = $value['quadrant'];
            $taskinfo->remind = $value['remind'];
            $taskinfo->project = $value['project'];
            $taskinfo->tag = $value['tag'];
            $taskinfo->location = $value['location'];
            $taskinfo->subtask = $value['subtask'];
            $taskinfo->summary = $value['summary'];
            $taskinfo->is_remind = $value['is_remind'];
            $taskinfo->is_finished = $value['is_finished'];
            $taskinfo->is_deleted = $value['is_deleted'];
            $taskinfo->gmt_create = $value['gmt_create'];
            $taskinfo->gmt_modified = $value['gmt_modified'];
            array_push($taskArr, $taskinfo);
		}
		$conn->close_rst();
		$conn->close_conn();
		return $taskArr;
	}
	
	function getTasksByUsername_Quadrant_IsDeleted ($username, $quadrant, $is_deleted=0) {
        $conn = new conn();
        $sql = "select * from taskinfo where username='".$username."' and quadrant='".$quadrant."' and is_deleted='".$is_deleted."' ";
        $arr = $conn->getRowsArray($sql);
        $taskArr = array();
        foreach ($arr as $value) {
            $taskinfo = new TaskInfo();
            $taskinfo->id = $value['id'];
            $taskinfo->title = $value['title'];
            $taskinfo->user_id = $value['user_id'];
            $taskinfo->username = $value['username'];
            $taskinfo->quadrant = $value['quadrant'];
            $taskinfo->remind = $value['remind'];
            $taskinfo->project = $value['project'];
            $taskinfo->tag = $value['tag'];
            $taskinfo->location = $value['location'];
            $taskinfo->subtask = $value['subtask'];
            $taskinfo->summary = $value['summary'];
            $taskinfo->is_remind = $value['is_remind'];
            $taskinfo->is_finished = $value['is_finished'];
            $taskinfo->is_deleted = $value['is_deleted'];
            $taskinfo->gmt_create = $value['gmt_create'];
            $taskinfo->gmt_modified = $value['gmt_modified'];
            array_push($taskArr, $taskinfo);
        }
        $conn->close_rst();
        $conn->close_conn();
        return $taskArr;
	}
	
	function addTask($taskinfo) {
		$conn = new conn();
//		$taskinfo = new TaskInfo();
		$sql = "insert into taskinfo (title,user_id,username,quadrant,remind,project,tag,
            location,subtask,summary,is_remind,is_finished,is_deleted,gmt_create,gmt_modified) 
            value ('".$taskinfo->title."','".$taskinfo->user_id."','".$taskinfo->username
            ."','".$taskinfo->quadrant."','".$taskinfo->remind."','".$taskinfo->project
            ."','".$taskinfo->tag."','".$taskinfo->location."','".$taskinfo->subtask
            ."','".$taskinfo->summary."','".$taskinfo->is_remind."','".$taskinfo->is_finished
            ."','".$taskinfo->is_deleted."','".$taskinfo->gmt_create."','".$taskinfo->gmt_modified."')";
//		echo $sql."<br>";
        $uid = $conn->uidRst($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $uid;
	}
	
	public function deleteTask($id) {
		$conn = new conn();
		$sql = "update taskinfo set is_deleted='1' where id='".$id."' ";
		echo $sql;
		$uid = $conn->uidRst($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $uid;
	}
	
	function recoveryTask($id) {
		$conn = new conn();
		$sql = "update taskinfo set is_deleted='0' where id='".$id."' ";
		echo $sql;
		$uid = $conn->uidRst($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $uid;
	}
	
	function permanentlyDelete($id) {
        $conn = new conn();
        $sql = "delete from taskinfo where id='".$id."' ";
        echo $sql;
        $uid = $conn->uidRst($sql);
        $conn->close_rst();
        $conn->close_conn();
        return $uid;
	}
	
}

//$task = new Task();
//$taskinfo = new TaskInfo();
//$task->addTask($taskinfo)
//$taskinfo = $task->getTaskById(1);
//print_r($taskinfo);
//$taskArr = $task->getTasksByUsernameAndQuadrant("admin", 2);
//foreach ($taskArr as $rows) {
//	print_r($rows);
//	echo "<br>";
//}

//$arr = $task->getTasksByUsernameAndQuadrant("admin", 2);
//
//foreach ($arr as $task) {
//	echo $task->title;
//}

//$rst = $task->getTaskById(1);
//echo $rst['title'];
//$rst = $task->getTaskById("taskInfo_1", 1);
//foreach ($rst as $key=>$value) {
//	echo $key." : ".$value."<br>";
//	echo "<br>";
//}
//echo $rst["Subtask"];

//$arr = $task->getTasksByUserId("taskInfo_1", 2);
//foreach ($arr as $value) {
//	foreach ($value as $key=>$v) {
//		echo $key." : ".$v."<br>";
//	}
//}

?>