<html>
<head>
<title>Login</title>
</head>
<body>
	<meta charset="utf-8">
	<script language= "JavaScript">
		function gouser(){
			frm.action="userlogin.php";
		}
		function gohost(){
			frm.action="hostlogin.php";
		}
	</script>
			<form method="post"  name="frm">
				<table bgcolor="white" border="0" bordercolor="white" cellspacing="0">
					<tr  border="0" height="35" bgcolor="grey" >
						<td width="1" bgcolor="white"></td>
						
					<td align="middle" width="400" style='font-family:宋体;font-size:200%;color:white'>用户登录</td>
					<td width="1" bgcolor="white"></td>
					</tr>
					<tr height="250">
						<td width="1" bgcolor="white"></td>
					<td align="middle" width="400" >
						<input type="submit" value="用户登录/注册"  style="width: 110px; height: 40px;" onclick='gouser()'></input></br></br></br>
						<input type="submit" value="主办方登录/注册"  style="width: 110px; height: 40px;" onclick='gohost()'></input></td>
						<td width="1" bgcolor="white"></td>
				</tr>
					<tr height="35" bgcolor="grey"><td width="1" bgcolor="white"></td>
					<td align="right" width="400">
				<td width="1" bgcolor="white"></td></tr>				
			</form>		
				</table>
</body>
</html>