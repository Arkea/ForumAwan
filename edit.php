<?php
	if(defined('IS_INDEX') == false){
		die("Stop!");
	}

	$p = $_GET['p'];
?>

<form action="?page=edited" method="post" id="newthread">
	<h1>Edit</h1>
	<p>komentar: <input type="submit" value="Kirim"></p>
	<p>tanggal: <input type="text" name="date" value="YYYY-MM-DD HH-MM-SS"></p>
	<input type="hidden" name="id" value="<?php echo $p;?>">
	<p><textarea rows="5" cols="30" name="content" form="newthread"></textarea> image <input type="file" name="image" accept="image/*"></p>
</form>