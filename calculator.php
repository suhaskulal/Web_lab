<?php
if(isset($_POST['res']))
{
$res=$_POST['display'];
$res=eval('return '. $res . ' ; ');
}
?>
<html>

	<head>
	<style>
	input{
		width:100%;
		padding:14px 14px;
		color:red;
		border-color:blue;
		background-color:pink;
		text-indent:10px;
	}
	</style>

	</head>

	<body>
	<center>
	

		<form name="cal" method="post">

		<table>

			<tr>

				<td colspan="4"><input type="text" name="display" value="<?php if(isset($res)){echo $res;}?>"></input></td>
				

			</tr>

			<tr>

				<td><input type="button" value="+" onclick="cal.display.value += '+'"></td>

				<td><input type="button" value="0" onclick="cal.display.value += '0'"></td>

				<td><input type="button" value="1" onclick="cal.display.value += '1'"></td>

				<td><input type="button" value="2" onclick="cal.display.value += '2'"></td>

			</tr>

			<tr>

				<td><input type="button" value="-" onclick="cal.display.value += '-'"></td>

				<td><input type="button" value="3" onclick="cal.display.value += '3'"></td>

				<td><input type="button" value="4" onclick="cal.display.value += '4'"></td>

				<td><input type="button" value="5" onclick="cal.display.value += '5'"></td>

			</tr>

			<tr>

				<td><input type="button" value="*" onclick="cal.display.value += '*'"></td>

				<td><input type="button" value="6" onclick="cal.display.value += '6'"></td>

				<td><input type="button" value="7" onclick="cal.display.value += '7'"></td>

				<td><input type="button" value="8" onclick="cal.display.value += '8'"></td>

			</tr>

			<tr>

				<td><input type="button" value="/" onclick="cal.display.value += '/'"></td>

				<td><input type="button" value="9" onclick="cal.display.value += '9'"></td>

				<td><input type="button" value="c" onclick="cal.display.value += ' '"></td>

				<td><input type="submit" value="="  name="res"></td>

			</tr>

		</table>
		</center>

	</form>

</body>
