<?php
require_once("../connect.php");
//把传过来的信息入库,在入库之前对所有的信息进行校验
	$content=$_POST["content"];
	//写入数据
	$insertsql="insert into content(content) values('$content')";
//	echo $insertsql;
	//数据入库
	if(mysql_query($insertsql)){
		echo "<script>alert('内容发布成功');window.location.href='./index.html'</script>";
	}else{
		echo "内容发布失败";
	}
?>