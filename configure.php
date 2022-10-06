<?php 
	// $sname= "localhost";
	// $uname= "root";
	// $pass= "root";
	// $db_name ="infoact2";

	// $conn = mysqli_connect($sname, $uname, $pass, $db_name);
	// if (!$conn) {
	// 	echo "CONNECTION FAILED!!!";
	// }
	// =============FOR REMOTE CONNECTION===========
$db["db_host"] = "remotemysql.com";
$db["db_user"] = "hM9fglI15d";
$db["db_pass"] = "5xZ2vURCTr";
$db["db_name"] = "hM9fglI15d";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS)
?>
