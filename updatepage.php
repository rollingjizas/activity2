<?php
include "configure.php";
session_start();
if (
	isset($_SESSION['worker_id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
	&& isset($_SESSION['work_shift'])
) {

	if (isset($_GET['update_user'])) {
		$user_id =  $_GET['update_user'];

		$query = "SELECT * FROM infoquiz2 WHERE worker_id = $user_id";
		$select_all_query = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($select_all_query)) {
			$worker_id = $row['worker_id'];
			$surname = $row['surname'];
			$password = $row['password'];
			$work_position = $row['work_position'];
			$salary = $row['salary'];
			$hours_of_work = $row['hours_of_work'];
			$department_number = $row['department_number'];
			$work_shift = $row['work_shift'];
		}
	}

	//inserting Record to the database
	if (isset($_POST['add_user'])) {

		$worker_id = $_POST['worker_id'];
		$surname = $_POST['surname'];
		$password = $_POST['password'];
		$work_position = $_POST['work_position'];
		$salary = $_POST['salary'];
		$hours_of_work = $_POST['hours_of_work'];
		$department_number =  $_POST['department_number'];
		$work_shift = $_POST['work_shift'];
		$query = "UPDATE infoquiz2 SET surname='$surname', password='$password', work_position='$work_position', salary='$salary', hours_of_work='$hours_of_work', department_number='$department_number', work_shift='$work_shift' WHERE worker_id=$worker_id";
		$result = mysqli_query($conn, $query);
		if ($result) {
			echo "Successfully updated database";
		} else {
			die('Error: ' . mysqli_error($conn));
		}
		mysqli_close($conn);
	}
?>
	<?php include "iwishiwasheader.php"; ?>

	<body><br><br><br><br><br>
		<div class="container text-center border border-5"><br>
			<div class="h4 pb-2 text-dark border-bottom border-success">Login, Add & Delete Function - ADD-USER-ACCOUNT</div>
			<div class="float-end"><?php include('notification.php'); ?></div>
			<a class="btn btn-outline-primary btn-light " float-end href="infodash.PHP" role="button">Back to Admin Homepage</a><br>

			<form method="POST">
				<font face="verdana" size="5">
					<div class="mb-3">

						<input type="text" name="worker_id" placeholder="worker_id" class="form-control" value="<?php echo $worker_id; ?>" required> <br>
						<input type="text" name="surname" placeholder="surname" class="form-control" value="<?php echo $surname; ?>" required> <br>
						<input type="password" name="password" placeholder="password" class="form-control" value="<?php echo $password; ?>" required> <br>
						<input type="text" name="work_position" placeholder="work_position" class="form-control" value="<?php echo $work_position; ?>" required> <br>
						<input type="text" name="salary" placeholder="salary" class="form-control" value="<?php echo $salary; ?>" required> <br>
						<input type="text" name="hours_of_work" placeholder="hours_of_work" class="form-control" value="<?php echo $hours_of_work; ?>" required> <br>
						<input type="text" name="department_number" placeholder="department_number" class="form-control" value="<?php echo $department_number; ?>" required> <br>
						<input type="text" name="work_shift" placeholder="work_shift" class="form-control" value="<?php echo $work_shift; ?>" required> <br>
				</font>
				<button type="submit" name="add_user" class="btn btn-outline-success btn-light">Add User Account</button></center>
		</div><br>
		</form>
		</div>
	</body>

	</html>

<?php
} else {
	header("Location: index.php");
	exit();
}
?>