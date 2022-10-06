<?php 
include "configure.php";
session_start(); 

	if(isset($_SESSION['id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
	&& isset($_SESSION['work_shift'])) {
        ?>
<?php include "iwishiwasheader.php";?>

<body>

	<br><br><br><br><br><br><br>
	<div class><br>
		<div class>Information Management System - Activity 2 in ADV03</div>
		<div class="float-end"><?php include('NOTIFICATION.php'); ?></div><br>
		<a class="btn btn-light btn-outline-success float-start" href="adduser.php" role="button">Add User Account</a><br>
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
											<td><?= $user['id']; ?></td>
											<td><?= $user['surname']; ?></td>
                                            <td><?= $user['password']; ?></td>
                                            <td><?= $user['work_position']; ?></td>
                                            <td><?= $user['salary']; ?></td>
											<td><?= $user['hours_of_work']; ?></td>
                                            <td><?= $user['department_number']; ?></td>
											<td>
												<form action="adduser1.PHP" method="POST" class="btn d-inline">
													<button type="submit" name="delete_user" value="<?= $user['id']; ?>" class="btn btn-danger" >Delete</button>
												</form>
											</td>
										</tr>	
										<?php
									}
								}else{
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
	}else{
		header("Location: index.php");
		exit();
	}
?>

