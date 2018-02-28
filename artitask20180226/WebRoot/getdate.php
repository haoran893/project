<?php
	require_once('./connect.php');
	//读取数据库原有的信息信息
	$json = '';
	$data = '';
	 class Message{
    	public $content;
    };
    
	$date = $_REQUEST['date'];
	$sql = "select * from text where author=$date";
	$result = mysql_query("select * from text where author=$date");
	$result=mysql_fetch_row($result);
	if($result){
			//echo "查询成功";
			$message = new Message();
			$message->content =  $result[4];
			$data=$message;
			}
			$json = json_encode($data);//把数据转换为JSON数据.
			echo $json;
?>