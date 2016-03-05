<html>
<head>
<title>hostlogin</title>
</head>
<body>
	<script language= "JavaScript">
		function gohost(){
				frm.action="host.php";
		}
		function addhost(){
			frm.action="addhostst.php";
		}
	</script>
	<meta charset="utf-8">
			<form method="post"  name="frm">
				<table bgcolor="white" border="0" bordercolor="white" cellspacing="0">
					<tr  border="0" height="35" bgcolor="grey" >
						<td width="1" bgcolor="white"></td>
						
					<td align="middle" width="400" style='font-family:宋体;font-size:200%;color:white'>主办方登录</td>
					<td width="1" bgcolor="white"></td>
					</tr>
					<tr height="250">
						<td width="1" bgcolor="white"></td>
					<td align="middle" width="400" >
						用户名:<input name="names" type="text" values="names" /><br/><br/>
						密码:  <input name="password" type="password"  values="passwords" /><br/><br/>
				<td width="1" bgcolor="white"></td></tr>
					<tr height="35" bgcolor="grey"><td width="1" bgcolor="white"></td>
					<td align="right" width="400">
				<input type="submit" value="登录"  onclick='gohost()'>
				<input type="submit" value="注册"  onclick='addhost()'></td>
				<td width="1" bgcolor="white"></td></tr>				
			</form>		
				</table>
	</body>
</html>