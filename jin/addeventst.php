<html>
<head>
<title>sponsor</title>
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
function validate_pass(field,alerttxt)
{
with (field)
{
apos=parseInt('field',10);

if (apos<0) 
  {alert(alerttxt);return false}
else {return true}
}
}
function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(hnos,"赛事名称不能为空!")==false)
    {hnos.focus();return false}
	if (validate_required(enames,"赛事名称不能为空!")==false)
    {enames.focus();return false}
	if (validate_required(etime,"赛事时间不能为空!")==false)
    {etime.focus();return false}
  if (validate_required(esite,"赛事地点不能为空!")==false)
    {esite.focus();return false}
  if (validate_required(esum,"观看金额不能为空!")==false)
    {esum.focus();return false}
	if (validate_pass(esum,"观看金额不能小于0!")==false)
    {esum.focus();return false}
	}
}
</script>
		 <?php
		 $hno=$_GET["num"];
		 //echo $hno;
		 ?>
		 <form name="form2" id="form2" method="POST" onsubmit="return validate_form(this)" action="addevent.php">
		 <table bgcolor="white" border="0" bordercolor="white" cellspacing="0">
					<tr  border="0" height="35" bgcolor="grey" >
						<td width="1" bgcolor="white"></td>
						
					<td align="middle" width="400" style='font-family:宋体;font-size:200%;color:white'>欢迎主办方进入！</td>
					<td width="1" bgcolor="white"></td>
					</tr>
					<tr height="250">
						<td width="1" bgcolor="white"></td>
					<td align="middle" width="400" >
					
				主办方编号：<input name="hnos" id="hnos" type="text" value="<?php echo $hno;?>"/><br/><br/>
				赛事名称：	<input name="Enames" id="enames" type="text" /><br/><br/>
				赛事时间：	<input name="Etime" id="etime" type="text"  /><br/><br/>
				赛事地点：	<input name="Esite" id="esite" type="text"  /><br/><br/>
				观看金额：	<input name="Esum" id="esum" type="text" /><br/><br/>

				<td width="1" bgcolor="white"></td></tr>
					
					
					<tr height="35" bgcolor="grey"><td width="1" bgcolor="white"></td>
					<td align="right" width="400">
						<button type="submit" values="save">保存新赛事</button></td>
				<td width="1" bgcolor="white"></td></tr>
					
					
				</table>
		 
				
			</form>

	</body>
</html>