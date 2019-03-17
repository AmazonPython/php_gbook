<?php

include('input.php');
include('connect.php');

//评论部分
$content = $_POST['content'];
$user = $_POST['user'];

$input = new input();

//调用函数，检查留言内容
$is = $input->post( $content );

if( $is == false ){
	die('留言内容不正确');
};

//调用函数，检查留言人
$is = $input->post( $user );
if( $is == false ){
	die( '用户名含敏感词');
};

//将数据入库
$time = time();
$sql = "INSERT INTO msg ( content, user, intime ) values ( '{$content}', '{$user}', '{$time}' )";
$is = $db->query($sql);
header( "location: gbook.php" );
?>