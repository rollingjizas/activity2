<?php
include "configure.php";
session_start();


	if(isset($_SESSION['worker_id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
	&& isset($_SESSION['work_shift'])) {


		$query = "SELECT * FROM infoquiz2";
		$selec_data = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($selec_data)) {
	
			$user_id = $row['worker_id'];
	}
?>
	<?php include "iwishiwasheader.php"; ?>

	<body>

		<br><br><br><br><br><br><br>
		<div class><br>
			<div class>
				<font face="verdana" size="7">
					<center>Information Management System - Activity 2 in ADV03</center>
				</font>
			</div>
			<div class="float-end"><?php include('NOTIFICATION.php'); ?></div><br>
			<a href="adduser.php" class="btn btn-light btn-outline-success float-start">Add User Worker</a><br>
			<form method="post" action="searchuser.php">
				<h1>SEARCH FOR USERS</h1>
				<input type="text" name="search" required />
				<input type="submit" value="Search" />

				<table class="table table-light table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Surname</th>
							<th>Password</th>
							<th>Work Position</th>
							<th>Salary</th>
							<th>Hours of Work </th>
							<th>Department Number</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<center>
							<?php $query = "SELECT * FROM infoquiz2";
							$query_run = mysqli_query($conn, $query);
							if (mysqli_num_rows($query_run) > 0) {
								foreach ($query_run as $user) {
							?>
									<tr>
										<font face="verdana" size="5">
											<td><?= $user['worker_id']; ?></td>
											<td><?= $user['surname']; ?></td>
											<td><?= $user['password']; ?></td>
											<td><?= $user['work_position']; ?></td>
											<td><?= $user['salary']; ?></td>
											<td><?= $user['hours_of_work']; ?></td>
											<td><?= $user['department_number']; ?></td>
											<td><?= $user['work_shift']; ?></td>
											<td>

												<a href='adduser1.PHP?delete_user=<?= $user['worker_id']; ?> ' type="submit" name="delete_user" " class=" btn btn-danger">Delete</a>
												<a href='updatepage.PHP?update_user=<?= $user['worker_id']; ?> ' type="submit" name="update_user" " class=" btn btn-danger">Update</a>

											</td>
									</tr>
							<?php
								}
							} else {
								echo "<h5> No Record Found!</h5>";
							}

							?>
						</center>
					</tbody>

				</table>
				<a class="btn btn-light btn-outline-danger float-start" href="logout.php" role="button">Logout</a><br><br>
		</div>
		</div>
		</div>


	</body>

	</html>
<?php
} else {

	exit();
}
?>