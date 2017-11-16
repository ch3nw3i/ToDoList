<?php
class time {
	static function getNowDate() {
		return date("Y-m-d");
	}
	
	static function getNowTime() {
		return date("H:i:s");
	}
	
	static function getNowDatetime() {
        return date("Y-m-d H:i:s");
	}
}

// Test
//$common = new Common();
//$datetime = $common->getNowDatetime();
//echo $datetime;
//echo "<br>";
//include 'conn.php';
//$sql = "update taskinfo set gmt_create='".$datetime."' where id='2'";
//echo $sql;
//echo "<br>";
//$conn = new conn();
//echo @$conn->getRowsRst($sql);