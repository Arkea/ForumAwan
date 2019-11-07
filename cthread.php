<?php

	date_default_timezone_set("Asia/Jakarta");
	echo "Today is " . date("Y-m-d H:i:s") . "<br>";
	if(defined('IS_INDEX') == false){
		die("Stop!");
	} else {
		$data = array(
			'subject'	=> $_POST['subject'],
			'content'	=> $_POST['content'],
			'image'		=> $_POST['image'],
			'date'		=> date("Y-m-d H:i:s")
		);
		create_thread($data);
		echo "Buat thread ".$data['subject']." berisi ".$data['content']." dengan gambar ".$data['image']." pada waktu ".$data['date'];
		redirect_to("");
	}

?>