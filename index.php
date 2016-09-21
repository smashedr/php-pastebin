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
<textarea class="paste" name="paste" rows="25" cols="60"></textarea>
<br>
<input class="center" type="submit" value="Paste">
</form>

<p class="ctext">Open Source Script, view the code here: <a href="<?php echo($url); ?>/code/"><?php echo($url); ?>/code/</a></p>

</body>
</html>
