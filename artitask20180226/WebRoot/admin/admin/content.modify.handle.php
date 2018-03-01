<?php
require_once("../connect.php");
//通过隐藏标签传过来的id
	$content=$_POST["content"];
	echo $content;
	//更新数据
	$updatesql="update content set content='$content'";
//	echo $insertsql;
	//数据入库
	if(mysql_query($updatesql)){
		echo "<script>alert('行程更新成功');window.location.href='./index.html'</script>";
	}else{
		echo "<script>alert('行程更新失败');window.location.href='./index.html'</script>";
	}
?>