<?php
session_start();
require_once('query.php');
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>ForumAwan</title>
</head>
<body>

<?php 

	define("IS_INDEX", true);
	if (isset($_GET['page'])) {
		$page = $_GET['page'];	
		echo $page;
		require_once($page.".php");
	} else {
		if (defined("first") == false) {
			echo "<h1>Selamat datang ";
			if (isset($_SESSION["logged"])) {
				if (isset($_SESSION["godmode"])) {
					echo "kembali, Admin!!!</h1>";
				} else {
					echo "kembali, Moderator!!!</h1>";
				}
				echo '<form action="?page=reset" method="post">
								<input type="submit" value="logout">
							</form>';
			} else {
				echo "di Forum Gambar Awanama, <a href='?page=login'>Awan</a>!!!</h1>";
			}
		}
		require_once("konten.php");
	}
 
?>

</body>
</html>