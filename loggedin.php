<?php 

	if(defined('IS_INDEX') == false){
		die("Stop!");
	} else {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$data = admin($user);
		if($data['user'] == $user){
			echo "user sama";
			if ($data['pass'] == $pass) {
				echo "pass sama";
				$_SESSION["godmode"] = 1;
				redirect_to('');
			} else {
				echo "pass beda";
			}
		} else {
			echo "user tidak ada";
		}
	}

?>