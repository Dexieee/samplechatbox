<?php
	session_start();
	if(isset($_POST['message']) && !empty($_POST['message'])) {
		$message = $_POST['message'];
		$fp = fopen("chathistory.txt", "a");
		fwrite($fp, "<div>" . date("D,M y h:i:s") . $_SESSION['username'] . "</span> : " . $message . "</div>");
		fclose($fp);
	}
?>
