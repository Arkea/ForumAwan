<a href="index.php?page=new">Buat thread baru<br/></a>

<?php

	if(defined('IS_INDEX') == false){
		die("Stop!");
	} else {
		$god = 0;
		if (isset($_SESSION["godmode"]) and $_SESSION["godmode"] = 1) {
			$god = 1;
		}
	}

	$br = 0;

	$isi = get_board();
	while ($thread = mysqli_fetch_assoc($isi)) {
		$id_t = $thread['id_thread'];
		$title = mysqli_fetch_assoc(get_thread_subject($id_t));
		$list = get_thread($id_t);
		$content = mysqli_fetch_assoc($list);
		if ($title['archived'] != 1) {
			echo $thread['id_thread']." ";
			echo $content['image']." ".$title['subject']." ".$content['date']." No. ".$content['id']." <a href='?page=reply&t=".$id_t."'>balas</a>";
			if ($god) {
				echo " <a href='?page=edit&p=".$content['id']."'>edit</a>";
				echo " <a href='?page=delete&t=".$id_t."'>delete</a>";
			}
			echo "<br />".$content['content'];
			while ($content = mysqli_fetch_assoc($list)) {
				echo "<br />".$content['date']." No. ".$content['id'];
				if ($god) {
					echo " <a href='?page=edit&p=".$content['id']."'>edit</a>";
					echo " <a href='?page=delete&p=".$content['id']."'>delete</a>";
				}
				if ($content['archived']) {
					echo "<br />THIS POST WAS DELETED BY ADMINISTRATOR";
				} else {
					echo "<br />".$content['image']." ".$content['content'];
				}
				$br = 1;
			}
			echo "<br /><br />";
		}
	}
	
?>

<table>
	<tr>
		<td>Img No.thread datetime edit delet</td>
	</tr>
	<tr>
		<td>comment</td>
	</tr>
	<tr>
		<td>Img No.thread datetime edit delet</td>
	</tr>
	<tr>
		<td>comment</td>
	</tr>
	<tr>
		<td>Img No.thread datetime edit delet</td>
	</tr>
	<tr>
		<td>comment</td>
	</tr>
</table>

