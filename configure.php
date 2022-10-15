<?php
=============FOR LOCAL CONNECTION===========
// $sname = "localhost";
// $uname = "root";
// $pass = "root";
// $db_name = "infoact2";

// $conn = mysqli_connect($sname, $uname, $pass, $db_name);
// if (!$conn) {
// 	echo "CONNECTION FAILED!!!";
// }
=============FOR REMOTE CONNECTION===========
$db["db_host"] = "remotemysql.com";
$db["db_user"] = "p9Lesildoe";
$db["db_pass"] = "JMwZj8ICYX";
$db["db_name"] = "p9Lesildoe";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}
global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
?>