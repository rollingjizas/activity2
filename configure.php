<?php
// =============FOR LOCAL CONNECTION===========
$sname = "localhost";
$uname = "root";
$pass = "root";
$db_name = "infoact2";

<<<<<<< HEAD
=======
// $conn = mysqli_connect($sname, $uname, $pass, $db_name);
// if (!$conn) {
// 	echo "CONNECTION FAILED!!!";
// }


// =============FOR REMOTE CONNECTION===========
// $db["db_host"] = "remotemysql.com";
// $db["db_user"] = "p9Lesildoe";
// $db["db_pass"] = "JMwZj8ICYX";
// $db["db_name"] = "p9Lesildoe";

// foreach ($db as $key => $value) {
// 	define(strtoupper($key), $value);
// }
// global $conn;
// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);


$sname = "remotemysql.com";
$uname = "p9Lesildoe";
$pass = "JMwZj8ICYX";
$db_name = "p9Lesildoe";

>>>>>>> 6dafb84679e7fcfcbf14898b6f05dcc4b8067841
$conn = mysqli_connect($sname, $uname, $pass, $db_name);
if (!$conn) {
	echo "CONNECTION FAILED!!!";
}
<<<<<<< HEAD


// // =============FOR REMOTE CONNECTION===========
// $db["db_host"] = "remotemysql.com";
// $db["db_user"] = "p9Lesildoe";
// $db["db_pass"] = "JMwZj8ICYX";
// $db["db_name"] = "p9Lesildoe";

// foreach ($db as $key => $value) {
// 	define(strtoupper($key), $value);
// }
// global $connection;
// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
?>
=======
>>>>>>> 6dafb84679e7fcfcbf14898b6f05dcc4b8067841
