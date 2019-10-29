<?php 
	
	if(defined('IS_INDEX') == false){
		die("Stop!");
	}

	session_destroy();

	redirect_to('');

?>