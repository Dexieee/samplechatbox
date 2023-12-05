<?php
	session_start();
	if(file_exists("chathistory.txt")) {
		$handle = fopen("chathistory.txt", "r");
		if($handle) {
			while(($line = fgets($handle)) !== false) {
				echo $line;
			}
			fclose($handle);
		}
	}
?>
<style>
#name{
    background-color: skyblue;
    border-radius: 3px;
    padding: 3px;
}
	</style>