<?php 
	
	if(defined('IS_INDEX') == false or !isset($_SESSION["logged"])){
		die("Stop!");
	} else {
		$data = array(
			'id'		=> $_POST['id'],
			'content'	=> $_POST['content'],
			'image'		=> $_POST['image'],
			'date'		=> $_POST['date']
		);
		edit_thread($data);
		echo "Post dengan id ".$data['id']." telah diedit menjadi ".$data['content']." dengan gambar ".$data['image']." pada waktu ".$data['date'];
		redirect_to("");
	}

?>