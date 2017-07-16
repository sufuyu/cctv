<?php 
echo "<table><th>姓名</th><th>密码</th><th>删除</th><th>修改</th>";
foreach ($arr as $v) {
	echo "<tr><td>".$v->name."</td><td>".$v->pwd."</td><td><a href='del/".$v->user_id."'>删除</td><td><a href='up/".$v->user_id."'>修改</td></tr>";
}
echo "</table>";
?>