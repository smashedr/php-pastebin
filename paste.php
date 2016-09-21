<?php

include('./config.php');

$mysql = mysql_connect($dbhost,$dbuser,$dbpass);

if (!$mysql)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($dbname, $mysql);

$data = $_REQUEST['paste'];
$data = mysql_real_escape_string($data);

$insert="INSERT INTO Paste (Data) VALUES ('$data')";

if (!mysql_query($insert))
{
    die('Error: ' . mysql_error());
}

if ( ($result = mysql_query("SELECT MAX( ID ) ID FROM `Paste`") ) )
{
    $row = mysql_fetch_assoc($result);
    $id = $row['ID'];
}
else
{
    // select failed. 
}

mysql_close($mysql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="10;url=<?php echo($url); ?>/<?php echo($id); ?>" />
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
</head>
<body>

    <p class="ctext"><a href="<?php echo($url); ?>/<?php echo($id); ?>"><?php echo($url); ?>/<?php echo($id); ?></a></p>
    <p class="ctext"><input size="26" type="text" value="<?php echo($url); ?>/<?php echo($id); ?>" onclick="javascript:this.focus();this.select();" readonly="true" /></p>

</body>
</html>
