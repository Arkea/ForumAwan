<?php 

	if(defined('IS_INDEX') == false){
		die("Stop!");
	} else {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$data = admin($user);
		if($data['user'] == $user && $user != ''){
			echo "user sama";
			if ($data['pass'] == $pass && $pass != '') {
				echo "pass sama";
				$_SESSION["logged"] = 1;
				if (isset($data['privilage'])) {
					$_SESSION["godmode"] = 1;
				}
				redirect_to('');
			} else {
				echo "pass beda";
			}
		} else {
			echo "user tidak ada";
		}
	}

?>