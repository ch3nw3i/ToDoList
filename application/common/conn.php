<?php
class conn {
	private $hostname = '127.0.0.1:3306';
	private $username = 'root';
	private $password = '123';
	private $database = 'todolist';
	
	private $conn = "";    //数据库连接资源
	private $result = "";  //结果集   
	private $message = ""; //返回结果
	private $fields;   //返回字段
	private $fieldsNum = 0;    //返回字段数
	private $rowsNum = 0;      //返回结果数
	private $rowsResult = "";  //返回单条记录的字段数组
	private $filesArray = array(); //返回字段数组
	private $rowsArray = array();  //返回结果数组
	
	function __construct($hostname="", $username="", $password="", $database="") {
		if ($hostname != "") {
			$this->hostname = $hostname;
		}
		if ($username != "") {
			$this->username = $username;
		}
		if ($password != "") {
			$this->password = $password;
		}
		if ($database != "") {
			$this->database = $database;
		}
		$this->init_conn();
	}
	
	/**
	 * Init Database Connection
	 */
	function init_conn() {
		$this->conn = @mysql_connect($this->hostname, $this->username, $this->password);
		@mysql_select_db($this->database, $this->conn);
		mysql_query("set names utf-8");
	}
	
	// 查询结果
	function mysql_query_rst($sql) {
		if ($this->conn == "") {
			$this->init_conn();
		}
		$this->result = @mysql_query($sql, $this->conn);
	}
	
	// 查询记录数
	function getRowsNum($sql) {
		$this->mysql_query_rst($sql);
		if (mysql_errno() == 0) {
			return @mysql_num_rows($this->result);
		} else {
			return "";
		}
	}
	
	//取得记录数组(单条)
    function getRowsRst($sql) {
    	$this->mysql_query_rst($sql);
    	if (mysql_errno() == 0) {
    		$this->rowsResult = mysql_fetch_array($this->result, MYSQL_ASSOC);
    		return $this->rowsResult;
    	} else {
    		return "";
    	}
    }
    
    //取得记录数组(多条)
    function getRowsArray($sql) {
        $this->mysql_query_rst($sql);
        if (mysql_errno() == 0) {
        	while ($row = mysql_fetch_array($this->result, MYSQL_ASSOC)) {
        		$this->rowsArray[] = $row;
        	}
        	return $this->rowsArray;
        } else {
        	return "";
        }
    }
    
    // 判断操作是否成功
    function uidRst($sql) {
    	if ($this->conn == "") {
    		$this->init_conn();
    	}
    	@mysql_query($sql);
    	$this->rowsNum = @mysql_affected_rows();
    	if (mysql_errno() == 0) {
    		return $this->rowsNum;
    	} else {
    		return "";
    	}
    }
    
    // 释放结果集
    function close_rst() {
    	@mysql_free_result($this->result);
    	$this->message = "";
    	$this->fieldsNum = 0;
    	$this->rowsNum = 0;
    	$this->filesArray = "";
    	$this->rowsArray = "";
    }
    
    //关闭数据库
    function close_conn() {
    	$this->close_rst();
    	@mysql_close($this->conn);
    	$this->conn = "";
    }
}

//$conne = new conn();
?>