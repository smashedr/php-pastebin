<?php
	include('./config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="icon" type="image/x-icon" href="./favicon.ico">
	<meta name="robots" content="noindex">
	<title>Paste</title>
</head>
<body>

	<form action="./paste.php" method="post">
		<textarea title="Paste" class="paste" name="paste" rows="25" cols="60"></textarea>
		<br>
		<input class="center" type="submit" value="Paste">
	</form>

	<br>

	<p class="ctext">
		Open Source Script, <a href="https://git.cssnr.com/shane/php_pastebin" target="_blank">
			view the code here
		</a>.
		<br>
		Python CLI Tool
		<a href="https://git.cssnr.com/shane/cpaste" target="_blank">
			now available here
		</a>.
	</p>

</body>
</html>
