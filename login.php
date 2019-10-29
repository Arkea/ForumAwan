<?php

	if(defined('IS_INDEX') == false){
		die("Stop!");
	}

?>

<form action="?page=loggedin" method="post">
	<table>
		<tr>
			<td><p>user :</p></td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td><p>pass :</p></td>
			<td><input type="text" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"></td>
		</tr>
	</table>
</form>