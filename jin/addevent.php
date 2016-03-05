<?php
//require 'user.php';
$hno=$_POST['hnos'];
$ename=$_POST['Enames'];
$etime=$_POST['Etime'];
$esite=$_POST['Esite'];
$esum=$_POST['Esum'];
//echo $uno;
mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
mysql_select_db("software") or die("表单寻找错误：".mysql_error());
mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
$query="select * from event where Ename='$ename'";
$res=mysql_query($query);
$result=mysql_fetch_assoc($res);
mysql_close() or die("关闭错误：".mysql_error());
if($result==""){
mysql_connect('localhost','root','12345678q9') or die("连接错误：".mysql_error());
mysql_select_db('software') or die("数据库选择错误：".mysql_error());
mysql_query('set names utf8') or die('设置编码错误：'.mysql_error());
$query="INSERT INTO  `software`.`event` (
`Eno` ,
`Hno` ,
`Ename` ,
`Etime` ,
`Esite` ,
`Esum`
)
VALUES (
NULL ,  '$hno',  '$ename',  '$etime',  '$esite',  '$esum'
);
";
mysql_query($query) or die("执行错误：".mysql_error());
mysql_close() or die("关闭错误：".mysql_error());
echo "增加成功!";echo '<br/>';
echo "<a href='host.php?ptr=1&hnos=$hno'>返回</a>";
}
else{
	echo '<script language="JavaScript">;alert("该赛事已存在");location.href="addeventst.php";</script>;';
}
?>