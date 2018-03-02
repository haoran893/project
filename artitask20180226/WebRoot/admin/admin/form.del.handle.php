<?php
require_once('../connect.php');
//在浏览器的地址栏中传入id

	$id = $_GET['id'];
	$deletesql = "delete from form where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除课程成功');window.location.href='./index.html'</script>";
	}else{
		echo "<script>alert('删除课程失败');</script>";
	}
?>