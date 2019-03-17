<?php

//预先定义数据库参数
$host = '127.0.0.1';
$user = 'root';
$pwd = 'root';
$dbname = 'php10';

//连接到数据库
$db = new mysqli( $host, $user, $pwd, $dbname );

//检查链接
if( $db->connect_errno <> 0){
	echo '连接失败';
	echo $db->connect_error;
};

//设定数据库传输编码
$db->query("SET NAMES UTF8");

//编写SQL
$sql = "SELECT * FROM msg ORDER BY id DESC";

//执行SQL
$mysqli_result = $db->query( $sql );

//判断执行是否成功
if( $mysqli_result === false ){
	echo 'SQL错误';
	exit;
}

//首次调用显示最新的一条记录，重复调研则依次显示之后的记录，无记录可显示则返回null
$rows = [];
while( $row = $mysqli_result->fetch_array( MYSQL_ASSOC ) ){
	$rows[] = $row;
}
	//var_dump( $rows );
?>