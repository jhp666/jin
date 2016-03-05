<html>
<head>
<title>register</title>
</head>
<body>
		 <meta charset="utf-8">
		 <script language="javascript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {alert(alerttxt);return false}
  else {return true}
  }
}
function validate_username(field,alerttxt)
{
with (field)
{
apos=value.length

if (apos>12) 
  {alert(alerttxt);return false}
else {return true}
}
}
function validate_pass(field,alerttxt)
{
with (field)
{
apos=value.length

if (apos<6||apos>10) 
  {alert(alerttxt);return false}
else {return true}
}
}
function validate_form(thisform)
{
with (thisform)
  {
  
	if (validate_required(hname,"用户名不能为空!")==false)
    {hname.focus();return false}
	if (validate_required(hpword,"密码不能为空!")==false)
    {hpword.focus();return false}
  if (validate_required(hcon,"联系方式不能为空!")==false)
    {hcon.focus();return false}
	if (validate_pass(hpword,"密码不能小于6位或大于10位!")==false)
    {hpword.focus();return false}
	if (validate_username(hname,"用户名不能大于10位!")==false)
    {hname.focus();return false}
  }
}
</script>
		 <form name="form1" id="form1" method="POST" onsubmit="return validate_form(this)" action="addhost.php">
		 <table bgcolor="white" border="0" bordercolor="white" cellspacing="0">
					<tr  border="0" height="35" bgcolor="grey" >
						<td width="1" bgcolor="white"></td>
						
					<td align="middle" width="400" style='font-family:宋体;font-size:200%;color:white'>欢迎新用户注册！</td>
					<td width="1" bgcolor="white"></td>
					</tr>
					<tr height="250">
						<td width="1" bgcolor="white"></td>
					<td align="middle" width="400" >
					
				用户名：	<input name="hname" id="hname" type="text" /><br/><br/>
				 密码：    	  <input name="hpword" id="hpword" type="password"  /><br/><br/>
				联系方式：<input name="hcon" id="hcon" type="text"  /><br/><br/>

				<td width="1" bgcolor="white"></td></tr>
					
					
					<tr height="35" bgcolor="grey"><td width="1" bgcolor="white"></td>
					<td align="right" width="400">
						<button type="submit"  values="注册" >注册</button>
				<td width="1" bgcolor="white"></td></tr>
					
					
				</table>
		 
				
			</form>

	</body>
</html>