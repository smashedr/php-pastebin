<?php

include('./config.php');

$mysql = mysql_connect($dbhost,$dbuser,$dbpass);

if (!$mysql)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("$dbname", $mysql);

$id = (int) $_GET['id'];

$result = mysql_query("SELECT * FROM Paste WHERE ID=$id");

if (!$result)
{
die('Error: ' . mysql_error());
}

$row = mysql_fetch_array($result);

mysql_close($mysql);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="icon" type="image/x-icon" href="./favicon.ico">
</head>
<body>

<?php

echo "<pre>" . htmlentities($row['Data']) . "</pre>";

?>


</body>
</html>