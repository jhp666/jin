<?php
$hname=$_POST['hname'];
$hpword=$_POST['hpword'];
$hcon=$_POST['hcon'];
mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
mysql_select_db("software") or die("表单寻找错误：".mysql_error());
mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
$query="select * from host where Hname='$hname'";
$res=mysql_query($query);
$result=mysql_fetch_assoc($res);
mysql_close() or die("关闭错误：".mysql_error());
if($result==""){
mysql_connect('localhost','root','12345678q9') or die("连接错误：".mysql_error());
mysql_select_db('software') or die("数据库选择错误：".mysql_error());
mysql_query('set names utf8') or die('设置编码错误：'.mysql_error());
$query="INSERT INTO  `software`.`host` (
`Hno` ,
`Hname` ,
`Hpword` ,
`Hcon`
)
VALUES (
NULL ,  '$hname',  '$hpword',  '$hcon'
);
";
mysql_query($query) or die("执行错误：".mysql_error());
mysql_close() or die("关闭错误：".mysql_error());
echo "注册成功!";echo '<br/>';
echo "<a href='hostlogin.php'>返回</a>";
}
else{
	echo '<script language="JavaScript">;alert("该用户已存在");location.href="addhostst.php";</script>;';
}
?>