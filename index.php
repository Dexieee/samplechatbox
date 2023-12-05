<?php
	session_start();
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Chat Box</title>
	<link rel="stylesheet" href="style.css" />
	<script>
		function submitMessage() {
			var message = document.getElementById("message").value;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("chat").innerHTML = this.responseText;
					document.getElementById("message").value = "";
				}
			};
			xhttp.open("POST", "submit.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send("message=" + message);
		}
		function displayChat() {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("chat").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET", "display.php", true);
			xhttp.send();
		}
		window.onload = function() {
			displayChat();
			setInterval(displayChat, 1000);
		};
	</script>
</head>
<body>
	<h1 id="title">Simple Chat Box</h1>
	<div id="chat"></div>
	<div id="entermsg">
	<form>
		<input type="text" id="message" placeholder="Enter message...">
		<button type="button" onclick="submitMessage()">Send</button>
	</form>
	</div>
	<form action="logout.php">
  	<button class = "logout" type="submit">LOGOUT</button>
	</form>
</body>
</html>