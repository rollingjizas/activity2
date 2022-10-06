
<?php 
include "configure.php"; 
session_start(); 
if(isset($_SESSION['id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
&& isset($_SESSION['work_shift'])) {
?>
<?php include "iwishiwasheader.php";?>
<body><br><br><br><br><br>
	<div class="container text-center border border-5"><br>
			<div class="h4 pb-2 text-dark border-bottom border-success">Login, Add & Delete Function - ADD-USER-ACCOUNT</div>
			<div class= "float-end"><?php include('notification.php'); ?></div>
			<a class="btn btn-outline-primary btn-light " float-end href="ADMINHOME.PHP" role="button">Back to Admin Homepage</a><br>
			
			<form action="adduser1.php" method="POST">
				
				<div class="mb-3">
                <input type="text" 		            name="worker_id"            placeholder="worker_id" 		    class="form-control" required> <br>
				<input type="text" 		            name="surname"		        placeholder="surname" 		        class="form-control" required> <br>
				<input type="password" 	            name="password" 	        placeholder="password" 		        class="form-control" required> <br>
				<input type="text"           		name="work_position"        placeholder="work_position"		    class="form-control" required> <br>
				<input type="text" 		            name="salary" 	            placeholder="salary" 	            class="form-control" required> <br>
				<input type="text" 		            name="status" 		        placeholder="status" 		        class="form-control" required> <br>
				<input type="text" 		            name="hours_of_work" 	    placeholder="hours_of_work" 	    class="form-control" required> <br>
				<input type="text" 		            name="department_number" 	placeholder="department_number" 	class="form-control" required> <br>
				<input type="text" 		            name="work_shift" 			placeholder="work_shift" 			class="form-control" required> <br>

                <button type="submit" 	name="add_user" class="btn btn-outline-success btn-light">Add User Account</button></center>
				</div><br>
			</form>
		</div>
</body>
</html>

<?php
	}else{
		header("Location: index.php");
		exit();
	}
?>
