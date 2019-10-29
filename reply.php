<?php

	if(defined('IS_INDEX') == false){
		die("Stop!");
	}

?>

<form action="?page=rthread" method="post" id="newthread">
	<h1>Balas </h1>
	<p>komentar: <input type="submit" value="Kirim"></p>
	<input type="hidden" name="id" value="<?php if (isset($_GET['t'])) {$thread = $_GET['t']; echo $thread;}?>">
	<p><textarea rows="5" cols="30" name="content" form="newthread"></textarea> image <input type="file" name="image" accept="image/*"></p>
</form>