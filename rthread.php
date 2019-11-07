<?php

	date_default_timezone_set("Asia/Jakarta");
	if(defined('IS_INDEX') == false){
		die("Stop!");
	} else {
		$data = array(
			'id'	=> $_POST['id'],
			'content'	=> $_POST['content'],
			'image'		=> $_POST['image'],
			'date'		=> date("Y-m-d H:i:s")
		);
		reply_thread($data);
		echo "Balas thread dengan id ".$data['id']." berisi ".$data['content']." dengan gambar ".$data['image']." pada waktu ".$data['date'];
		redirect_to("");
	}

?>