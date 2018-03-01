<?php
	require_once('../connect.php');
	//读取数据库原有的信息信息
	$json = '';
	$data = array();
	 class Message{
    	public $content;
    };
    
	$date = $_GET['date'];
	$sql = "select * from text where author=$date";
	$result = mysql_query("select * from text where author=$date");
	$result=mysql_fetch_row($result);
	function decodeUnicode($str){
  return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
    create_function(
      '$matches',
      'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
    ),
    $str);
}
	if($result){
			//echo "查询成功";
			$message = new Message();
			$message->content =  $result[4];;
			$data[]=$message;
			}
			$json = json_encode($data);//把数据转换为JSON数据.
			$json=decodeUnicode($json);
			echo "{".'"message"'.":".$json."}";
?>