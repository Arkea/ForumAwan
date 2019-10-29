<?php

	if(defined('IS_INDEX') == false){
		die("Stop!");
	}

?>

<form action="?page=cthread" method="post" id="newthread">
	<h1>buat thread baru</h1>
	<p>judul: <input type="text" name="subject"> <input type="submit" value="Buat"></p>
	<p>isi:	</p>
	<p><textarea rows="5" cols="30" name="content" form="newthread"></textarea> image <input type="file" name="image" accept="image/*"></p>
</form>