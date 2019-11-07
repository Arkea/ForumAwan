<?php

	if(defined('IS_INDEX') == false or !isset($_SESSION["logged"]) and !isset($_SESSION["godmode"])){
		die("Stop!");
	}

	if (isset($_GET['t'])) {
		archive_thread($_GET['t']);
		echo "thread".$_GET['t']." berhasil diarchive!";

	} elseif (isset($_GET['p'])) {
		delete_post($_GET['p']);
		echo "post".$_GET['p']." berhasil dihapus!";

	} else {
		die("Stop!");
	}

	redirect_to("");

?>