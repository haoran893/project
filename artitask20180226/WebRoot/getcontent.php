<?php
	require_once('./connect.php');
	//读取数据库原有的信息信息
	$json = '';
	$data = '';
	 class Message{
    	public $content;
    };
	$sql = "select * from content";
	$result = mysql_query($sql);
	$result=mysql_fetch_row($result);
	if($result){
			//echo "查询成功";
			$message = new Message();
			$message->content =  $result[0];
			$data=$message;
			}
			$json = json_encode($data);//把数据转换为JSON数据.
			echo $json;
?>