<?php
	require_once('../connect.php');
	//读取数据库原有的信息信息
	$query = mysql_query("select * from content");
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
    <td width="213" height="287" align="left" valign="top" bgcolor="#FFFF99"><p></p>
    <p></p>      <a href="article.add.php"></a></td>
    <td width="854" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="content.modify.handle.php">
    	<!--创建了一个隐藏标签 让处理id的语句隐藏-->
      <table width="590" border="0" cellpadding="8" cellspacing="1">
         <td>行程</td>
          <td><textarea name="content" cols="60" rows="20" id="content"><?php echo $data['content']?></textarea></td>
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
