<?php
//require 'user.php';
$enos=$_GET["id"];
$uno=$_GET["num"];
//echo $enos;
//echo $uno;
mysql_connect('localhost','root','12345678q9') or die("连接错误：".mysql_error());
mysql_select_db('software') or die("数据库选择错误：".mysql_error());
mysql_query('set names utf8') or die('设置编码错误：'.mysql_error());
$query="INSERT INTO  `software`.`order` (
`Ono` ,
`Uno` ,
`Eno` ,
`Opay`
)
VALUES (
NULL ,  '$uno',  '$enos',  '未付款'
);
";
mysql_query($query) or die("执行错误：".mysql_error());
mysql_close() or die("关闭错误：".mysql_error());
echo "订阅成功!";echo '<br/>';
echo "<a href='user.php?ptr=1&unos=$uno'>返回</a>";
?>