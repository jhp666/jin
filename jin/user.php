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
			$unos=$_GET["unos"];
			$uno=$unos;
			//echo $password;
			//echo $ptr;
			//echo $uno;
			if($ptr!=1){
			mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
			mysql_select_db("software") or die("表单寻找错误：".mysql_error());
			mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
			$query="select * from user where Uname='$name'";
			$res=mysql_query($query);
			$result=mysql_fetch_assoc($res);
			if(!!($result)==0){
				echo '<script language="JavaScript">;alert("该用户不存在");location.href="userlogin.php";</script>;';
			}
			$upword=$result['Upword'];
			if($password!=$upword){
				echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="userlogin.php";</script>;';
			}
			$uno=$result['Uno'];
			mysql_close() or die("关闭错误：".mysql_error());
			//$upword=$result['Upword'];
			//echo $upword;
		}
			mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
			mysql_select_db("software") or die("表单寻找错误：".mysql_error());
			mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
			$query="SELECT Ename,Etime,Opay FROM `order`,`event` where Uno='$uno' and order.Eno=event.Eno";
			$res=mysql_query($query) or die("数据库错误：".mysql_error());
			echo "已预定信息：<br/>";
			while($result=mysql_fetch_assoc($res)){
				$emane=$result['Ename'];
				$etime=$result['Etime'];
				$opay=$result['Opay'];
				echo $emane;echo "   ";
				echo $etime;echo "   ";
				echo $opay;
				echo '<br/>';
				//print_r($result);
			}
			echo '<br/>';echo '<br/>';
			mysql_close() or die("关闭错误：".mysql_error());
			//var_export($result);
			mysql_connect("localhost","root","12345678q9") or die("连接错误：".mysql_error());
			mysql_select_db("software") or die("表单寻找错误：".mysql_error());
			mysql_query("set names utf8") or die("设置编码错误：".mysql_error());
			$query1='SELECT * FROM `event`';
			$res1=mysql_query($query1) or die("数据库错误：".mysql_error());
			echo "所有赛事信息：<br/>";
			echo "赛事名称 赛事时间 价格<br/>";
			$id=1;
			while($result1=mysql_fetch_assoc($res1)){
				$eno=$result1['Eno'];
				$emane=$result1['Ename'];
				$etime=$result1['Etime'];
				$esum=$result1['Esum'];
				echo $emane;echo "   ";
				echo $etime;echo "   ";
				echo $esum;echo "   ";
				echo "<a href='addorder.php?id=$eno&num=$uno'>订购</a>";
				echo '<br/>';
				//$id=$id+1;
				//print_r($result);
			}
			mysql_close() or die("关闭错误：".mysql_error());
			echo "<br/><br/><br/>";echo "<a href='login.php'>退出登录</a>";
		?>
	</body>
</html>