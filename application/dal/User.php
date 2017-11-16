<?php
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/common/conn.php";
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/model/UserInfo.php";
include $_SERVER['DOCUMENT_ROOT']."/ToDoList/application/common/time.php";


class User {
	
	function getIdByUsername($username="") {
		$conn = new conn();
		$sql = "select id from userinfo where username='".$username."' ";
		$arr = $conn->getRowsArray($sql);
		foreach ($arr as $value) {
            $id = $value['id'];
        }
        $conn->close_rst();
        $conn->close_conn();
        return $id;
	}
	
	function getUserById($id=0) {
		$conn = new conn();
		$userinfo = new UserInfo();
		$sql = "select * from userinfo where id = '".$id."' ";
//		echo $sql."<br>";
		$rst = $conn->getRowsRst($sql);
		
        $userinfo->id = $rst['id'];
        $userinfo->username = $rst['username'];
        $userinfo->password = $rst['password'];
        $userinfo->email = $rst['email'];
        $userinfo->name = $rst['name'];
        $userinfo->gender = $rst['gender'];
        $userinfo->is_deleted = $rst['is_deleted'];
        $userinfo->gmt_create = $rst['gmt_create'];
        $userinfo->gmt_modified = $rst['gmt_modified'];
        
        $conn->close_rst();
        $conn->close_conn();
        return $userinfo;
	}
	
	function getUserByUsername($username="") {
		$conn = new conn();
        $sql = "select * from userinfo where username = '".$username."' ";
//        echo $sql."<br>";
        $rst = $conn->getRowsRst($sql);
        $userinfo = new UserInfo();
        $userinfo->id = $rst['id'];
        $userinfo->username = $rst['username'];
        $userinfo->password = $rst['password'];
        $userinfo->email = $rst['email'];
        $userinfo->name = $rst['name'];
        $userinfo->gender = $rst['gender'];
        $userinfo->is_deleted = $rst['is_deleted'];
        $userinfo->gmt_create = $rst['gmt_create'];
        $userinfo->gmt_modified = $rst['gmt_modified'];
        
        $conn->close_rst();
        $conn->close_conn();
        return $userinfo;
	}
	
	function getAllUsers() {
        $conn = new conn();
		$sql = "select * from userinfo order by id ASC";
		$arr = $conn->getRowsArray($sql);
		$conn->close_rst();
		$conn->close_conn();
		return $arr;
	}
	
	function checkUserValidate($username="", $password="") {
		$flag = false;
		$conn = new conn();
		$sql = "select password from userinfo where username='".$username."'";
		$rst = $conn->getRowsRst($sql);
		if ($rst['password'] == $password) {
			$flag = true;
		}
		$conn->close_rst();
		$conn->close_conn();
		return $flag;
	}
	
	
	function registerUser($userinfo) {
		$conn = new conn();
		
		$gmt_create = time::getNowDatetime();
		$gmt_modified = time::getNowDatetime();
		$userinfo->gmt_create = $gmt_create;
		$userinfo->gmt_modified = $gmt_modified;
//		echo $gmt_create."<br>";
		
		$sql = "insert into userinfo (username, password, email, name, gender,"
		      ." gmt_create, gmt_modified) values ('"
		      .$userinfo->username."', '".$userinfo->password."', '".$userinfo->email
		      ."', '".$userinfo->name."', '".$userinfo->gender."', '".$userinfo->gmt_create
		      ."', '".$userinfo->gmt_modified."')";
//		echo $sql."<br>";
        $result = mysql_query($sql);
        return $result;
		
	}
	
	function checkUsernameOnly($username="") {
		$conn = new conn();
		$sql = "select username from userinfo where username='".$username."' ";
//		echo "SQL: ".$sql."<br>";
		$rstNum = $conn->getRowsNum($sql);
//		echo "结果条数: ".$rstNum."<br>";
        $conn->close_rst(); 
        $conn->close_conn();
		return $rstNum;
	}
	
	function deleteUser($username="") {
		$flag = false;
		$conn = new conn();
		$sql = "delete from userinfo where username='".$username."' ";
		$flag = @mysql_query($sql);
        $conn->close_rst(); 
        $conn->close_conn();
		return $flag;
	}
	
	// 未判断旧密码！！
	function changePassword($username="", $oldPassword="", $newPassword="", $repeatNewPassword="") {
		$conn = new conn();
		if ($newPassword==$repeatNewPassword && $newPassword!="") {
			$sql = "update userinfo set password='".$newPassword."' where username='".$username."' ";
	        echo $sql;
	        $flag = @mysql_query($sql);
		}
        $conn->close_rst(); 
        $conn->close_conn();
		return $flag;
	}
	
	function changeUserInfo($userinfo) {
		
		$id = $userinfo->id;
		$username = $userinfo->username;
		$password = $userinfo->password;
		$email = $userinfo->email;
		$name = $userinfo->name;
		$gender = $userinfo->gender;
		$gmt_modified = $userinfo->gmt_modified;
		
		$num = "";
		$validate = User::checkUserValidate($username, $password);
		if ($validate == true) {
            $conn = new conn();
			$sql = "update userinfo set email='".$email."', name='".$name
			     ."', gender='".$gender."', gmt_modified='".$gmt_modified
			     ."' where id=".$id;
			// 执行失败！！！
			$conn->mysql_query_rst($sql);
	        $conn->close_rst();
	        $conn->close_conn();
		} else {
			echo "密码错误，请<a href='../../person.php'>重试</a><br>";
		}
	}
}

//$user = new User();
//$userinfo = $user->getUserById(19);
//echo $userinfo->username;
?>