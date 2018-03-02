<?php
	require_once('./connect.php');
	//读取数据库原有的信息信息
    $name=$_POST["name"];
	$phone=$_POST["phone"];
	$age= $_POST["age"];
	$education=$_POST["education"];
	$major=$_POST["major"];
	$school=$_POST["school"];
	$target=$_POST["target"];
	$wx=$_POST["wx"];
	$file=$_FILES['file1'];
	$filename=time().rand(0,1000);  
    
    
    //获取文件的后缀,pathinfo()会以数组的形式返回一个文件的路径信息，其中extension元素则是文件的后缀名  
    $ext=pathinfo($_FILES['file1']['name'])['extension'];  
  
    //最终文件名为  
    $filename=$filename.'.'.$ext;  
  
    //设置文件上传到服务器后存放的位置,move_uploaded_file()会将文件移动到新位置，第一个参数是要移动的文件，第二个参数是移动到哪里。我在这里是放到和本php文件同一目录下，注意需要将新的文件名连接进去。  
    if (move_uploaded_file($file['tmp_name'], 'upload/'.$filename)) {  
      $insertsql="insert into form(name,phone,age,education,major,school,target,wx,filename) values('$name','$phone','$age','$education','$major','$school','$target','$wx','$filename')";
//	echo $insertsql;
	//数据入库
	if(mysql_query($insertsql)){
		echo "<script>alert('文件上传成功');window.location.href='./works_assess.html'</script>";
	}else{
	 	echo "error";
	}
     } else{  
        echo "error";  
     }  
     
?> 