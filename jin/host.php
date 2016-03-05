<html>
<head><head>
	<body>
		<script language= "JavaScript">
		function saves(){
			frm.action="xiugai.php";
		}
		function deletes(){
			frm.action="shanchu.php";
		}
		</script>
		<?php
			$ptr=$_GET["ptr"];
			$name=$_POST['names'];
			$password=$_POST['password'];
			$hnos=$_GET["hnos"];
			$hno=$hnos;
			//echo $password;
			if($ptr!=1){
			mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
			mysql_select_db("software") or die("表单寻找错误：".mysql_error());
			mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
			$query="select * from host where Hname='$name'";
			$res=mysql_query($query);
			$result=mysql_fetch_assoc($res);
			if(!!($result)==0){
				echo '<script language="JavaScript">;alert("该用户不存在");location.href="hostlogin.php";</script>;';
			}
			$hpword=$result['Hpword'];
			if($password!=$hpword){
				echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="hostlogin.php";</script>;';
			}
			$hno=$result['Hno'];
			mysql_close() or die("关闭错误：".mysql_error());
			//$upword=$result['Upword'];
			//echo $upword;
		}
			mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
			mysql_select_db("software") or die("表单寻找错误：".mysql_error());
			mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
			$query="SELECT Ename,Etime,Esum FROM `event` where Hno='$hno'";
			$res=mysql_query($query) or die("数据库错误：".mysql_error());
			echo "已预定信息：<br/>";
			echo "举办赛事名称 ";echo "赛事时间 ";echo "金额<br/>";
			while($result=mysql_fetch_assoc($res)){
				$emane=$result['Ename'];
				$etime=$result['Etime'];
				$esum=$result['Esum'];
				echo $emane;echo "   ";
				echo $etime;echo "   ";
				echo $esum;
				echo '<br/>';
				//print_r($result);
			}
			echo '<br/>';echo '<br/>';
			mysql_close() or die("关闭错误：".mysql_error());
			//var_export($result);
			echo "<a href='addeventst.php?num=$hno'>添加赛事</a>";
			echo "<br/><br/><br/>";echo "<a href='login.php'>退出登录</a>";
		?>
	</body>
</html>