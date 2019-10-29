<?php

	function connect_to_db(){
		$conn = mysqli_connect('localhost','root','','forum');

		if ($conn == false) {
			echo mysqli_connect_error();
			die();
		} else {
			return $conn;
		}
	}

	function do_query($sql){
		$conn = connect_to_db();
		return mysqli_query($conn,$sql);
	}

	function admin($data){
		$sql = "SELECT * FROM admin WHERE user = '".$data."'";
		$data = do_query($sql);
		return mysqli_fetch_array($data);
	}

	function get_board(){
		$sql = "SELECT id_thread FROM `post` WHERE (id_thread, date) IN (SELECT id_thread, MAX(date) FROM `post` GROUP BY id_thread) ORDER BY date DESC";
		$data = do_query($sql);
		return $data;
	}

	function get_thread_subject($id){
		$sql = "SELECT subject, archived FROM `thread` WHERE id = ".$id;
		$data = do_query($sql);
		return $data;
	}

	function get_thread($id){
		$sql = "SELECT id, image, date, content, archived FROM `post` WHERE id_thread = ".$id;
		$data = do_query($sql);
		return $data;
	}

	function create_thread($data){
		$subject = $data['subject'];
		$content = $data['content'];
		$image = $data['image'];
		$date = $data['date'];
		$sql = "SELECT id FROM `thread` ORDER BY id DESC LIMIT 1";
		$id_thread = mysqli_fetch_assoc(do_query($sql));
		$id_thread = $id_thread['id']+1;
		echo $id_thread;
		$sql = "INSERT INTO `post`(`id_thread`, `content`, `date`, `image`) VALUES ('$id_thread','$content','$date','$image')";
		do_query($sql);
		$sql = "SELECT id FROM `post` ORDER BY id DESC LIMIT 1";
		$id_post = mysqli_fetch_assoc(do_query($sql));
		$id_post = $id_post['id'];
		echo $id_post;
		$sql = "INSERT INTO `thread`(`id_post`, `subject`) VALUES ('$id_post','$subject')";
		do_query($sql);
	}

	function reply_thread($data){
		$id_thread = $data['id'];
		$content = $data['content'];
		$image = $data['image'];
		$date = $data['date'];
		$sql = "INSERT INTO `post`(`id_thread`, `content`, `date`, `image`) VALUES ('$id_thread','$content','$date','$image')";
		do_query($sql);
	}

	function edit_thread($data){
		$id = $data['id'];
		$content = $data['content'];
		$image = $data['image'];
		$date = $data['date'];
		$sql = "UPDATE `post` SET `content`='$content',`date`='$date',`image`='$image' WHERE `id`='$id'";
		do_query($sql);
	}

	function archive_thread($id){
		$sql = "UPDATE `thread` SET `archived`=1 WHERE `id`='$id'";
		do_query($sql);
	}

	function delete_post($id){
		$sql = "UPDATE `post` SET `archived`=1 WHERE `id`='$id'";
		do_query($sql);
	}

	function redirect_to($page){
		if ($page == '') {
			echo "<script>window.location = 'index.php'</script>";
		} else {
			echo "<script>window.location = '?page=".$page."'</script>";
		}
	}

?>