<?php include "configure.php"; ?>
<?php

session_start();

//FOR DELETE FUNCTION
if (isset($_GET['delete_user'])) {
	$user_id = mysqli_real_escape_string($conn, $_GET['delete_user']);

	$query = "DELETE FROM infoquiz2 WHERE worker_id= $user_id ";
	$query_run = mysqli_query($conn, $query);
	if ($query_run) {
		$_SESSION['message'] = "User Account Succesfuly Deleted";
		header("Location: infodash.php");
		exit();
	} else {
		$_SESSION['message'] = "User Account is not Succesfuly Deleted";
		header("Location: infodash.php");
		exit();
	}
}

$id = $_POST['worker_id'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$work_position = $_POST['work_position'];
$salary = $_POST['salary'];
$hours_of_work = $_POST['hours_of_work'];
$department_number =  $_POST['department_number'];
$work_shift =  $_POST['work_shift'];

$query = "INSERT INTO infoquiz2 (worker_id, surname, password, work_position, salary, hours_of_work, department_number, work_shift)
	 VALUES ($id ,'$surname', '$password', '$work_position', '$salary','$hours_of_work', '$department_number','$work_shift')";

$result = mysqli_query($conn, $query);
if ($result) {
	echo "Succesfuly Account Added";
} else {
	die('Error: ' . mysqli_error($conn));
}
mysqli_close($conn);

?>

