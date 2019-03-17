<?php

class input{
	
	//定义函数，对数据进行检查
	function post( $content ){
		if( $content == '' ){
			return false;
		}
	
	
		//禁止使用的用户名
		$n = [ '毛泽东','邓小平','赵紫阳','胡耀邦','江泽民','胡锦涛','温家宝','习近平','六四' ];
	
		//先循环读取敏感用户名，使用if语句与提交的留言名相对应，符合则禁止
		foreach( $n as $name ){
			if( $content == $name ){
				return false;
			}
		}
	
		return true;
	}
}
?>