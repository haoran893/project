<?php
	require_once('./connect.php');
	//读取数据库原有的信息信息
	$json = '';
	$data = '';
	 class Kecheng{
    	public $teacher;
    	public $course;
    	public $class;
    	public $time;
    	public $date;
    };
    
	$sql = "select * from class";
	$result = mysql_query("select * from class");
	$array=mysql_fetch_array($result);
	print_r($array) ;
 	if($result) { 
			 $abc=array();
			 $i=0;
			 while($row=mysql_fetch_array($result)){
			  $users[$i]=$row;
			  $i++;
 	};
 	print_r($abc) ;
 		echo json_encode(array('dataList'=>$abc));
 
			} 
?>