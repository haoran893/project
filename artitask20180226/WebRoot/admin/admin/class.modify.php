<?php
	require_once('../connect.php');
	//读取数据库原有的信息信息
	$id = $_GET['id'];
	$query = mysql_query("select * from class where id=$id");
	//把SQL语句转化成关联数组
	$data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  <tr>
    <td width="213" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="class.add.php">发布课程</a></p>
    <p><a href="class.manage.php">管理课程</a></p>      <a href="article.add.php"></a></td>
    <td width="854" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="class.modify.handle.php">
    	<!--创建了一个隐藏标签 让处理id的语句隐藏-->
    	<input type="hidden" name="id" value="<?php echo $data['id']?>" />
      <table width="590" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">修改文章</td>
          </tr>
        <tr>
          <td width="119">老师</td>
          <td width="437"><label for="teacher"></label>
            <input type="text" name="teacher" id="teacher" value="<?php echo $data['teacher']?>"/></td>
        </tr>
        <tr>
          <td>课程</td>
          <td><input type="text" name="course" id="course"  value="<?php echo $data['course']?>"/></td>
        </tr>
        <tr>
          <td>班级</td>
          <td><label for="description"></label>
            <textarea name="class" id="class" cols="60" rows="5"><?php echo $data['class']?></textarea></td>
        </tr>
        <tr>
          <td>时间</td>
          <td><textarea name="time" cols="60" rows="20" id="time"><?php echo $data['time']?></textarea></td>
        </tr>
         <td>日期</td>
          <td><textarea name="date" cols="60" rows="20" id="date"><?php echo $data['date']?></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
