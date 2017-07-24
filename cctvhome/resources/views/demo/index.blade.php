<html>
	<body>
		<form action="add" method="post">	
		<table>
			<tr>
				<td>姓名</td>
				<input type="hidden" name="_token" value="<?=csrf_token()?>">
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="text" name="pwd"></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
	</body>
</html>