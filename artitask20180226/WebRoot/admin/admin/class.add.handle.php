<?php
require_once("../connect.php");
//把传过来的信息入库,在入库之前对所有的信息进行校验
	$teacher=$_POST["teacher"];
    $course=$_POST["course"];
    $class=$_POST["class"];
	$time=$_POST["time"];
	$date=$_POST["date"];
	//写入数据
	$insertsql="insert into class(teacher,course,class,time,date) values('$teacher','$course','$class','$time','$date')";
//	echo $insertsql;
	//数据入库
	if(mysql_query($insertsql)){
		echo "<script>alert('内容发布成功');window.location.href='./index.html'</script>";
	}else{
		echo "内容发布失败";
	}
?>