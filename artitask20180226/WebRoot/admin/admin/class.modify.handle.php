<?php
require_once("../connect.php");
//通过隐藏标签传过来的id
	$id=$_POST["id"];
	$date=$_POST["date"];
	$teacher=$_POST["teacher"];
	$course= $_POST["course"];
	$class=$_POST["class"];
	$time=$_POST["time"];
	//更新数据
	$updatesql="update class set teacher='$teacher',course='$course',class='$class',time='$time',date='$date' where id='$id'";
//	echo $insertsql;
	//数据入库
	if(mysql_query($updatesql)){
		echo "<script>alert('文章更新成功');window.location.href='./index.html'</script>";
	}else{
		echo "<script>alert('文章更新失败');window.location.href='./index.html'</script>";
	}
?>