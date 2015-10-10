<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TODO List Home</title>
</head>

<body>
<?php
require_once(dirname(__FILE__) ."/../resources/config.php");

$mysqli = new mysqli($config['db']["host"], $config['db']["username"], $config['db']["password"], $config['db']["dbname"]);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<br/>
<table>
    <td>
        <tr>sdffafgadf</tr>
    </td>
</table>
</body>
</html>