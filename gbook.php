<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>留言</title>
	<style>
	.wrap{width:800px;margin:0px auto;}
	
	.add{overflow: hidden;}
	.add .content{width:798px;margin:0px;padding:0px;}
	.add .user{float:left;}
	.add .btn{float:right;}
	
	.msg{margin:20px 0px;background: #ccc;padding:5px;}
	.msg .info{	overflow: hidden;}
	.msg .user{float:left;color:blue;}
	.msg .time{float:right;}
	.msg .content{width:100%;}
	</style>
</head>

<body>
<div class='wrap'>

	<!-- 发表留言 -->
	<div class="add">
		<form action="formsave.php" method="post">
			<textarea name="content" class="content" cols='50' rows='5'></textarea>
			<input name="user" class="user" type="text" />
			<input class="btn" type="submit" value="发表留言"/>
		</form>
	</div>
	
	<?php
	foreach( $rows as $row ){
	?>
	<!-- 查看留言 -->
	<div class="msg">
		<div class="info">
			<span class="user">
			<?php 
			echo $row['user'];
			?>
			</span>
			<span class="time">
			<?php
			echo date( "Y-m-d H:i:s", $row['intime']);
			?>
			</span>
		</div>
	
		<div class="content">
		<?php
		echo $row['content'];
		?>
		</div>
	</div>
	
	<?php
	}
	?>
</div>
</body>
</html>