
<?php 
include "configure.php"; 
session_start(); 
if(isset($_SESSION['worker_id']) && isset($_SESSION['surname']) && isset($_SESSION['work_position']) && isset($_SESSION['salary']) && isset($_SESSION['hours_of_work']) && isset($_SESSION['department_number'])
&& isset($_SESSION['work_shift'])) {
?>
<?php include "iwishiwasheader.php";?>
<body><br><br><br><br><br>
	<div class="container text-center border border-5"><br>
			<div class="h4 pb-2 text-dark border-bottom border-success">Login, Add & Delete Function - ADD-USER-ACCOUNT</div>
			<div class= "float-end"><?php include('notification.php'); ?></div>
			<a class="btn btn-outline-primary btn-light " float-end href="infodash.PHP" role="button">Back to Admin Homepage</a><br>
			
			<form action="adduser1.php" method="POST">
				<font face ="verdana" size = "5"> 
				<div class="mb-3">
                <input type="text" 		            name="worker_id"            placeholder="Worker ID" 		    class="form-control" required> <br>
				<input type="text" 		            name="surname"		        placeholder="Surname" 		        class="form-control" required> <br>
				<input type="password" 	            name="password" 	        placeholder="Password" 		        class="form-control" required> <br>
				<input type="text"           		name="work_position"        placeholder="Work Position"		    class="form-control" required> <br>
				<input type="text" 		            name="salary" 	            placeholder="Salary" 	            class="form-control" required> <br>
				<input type="text" 		            name="hours_of_work" 	    placeholder="Hours of Work" 	    class="form-control" required> <br>
				<input type="text" 		            name="department_number" 	placeholder="Department Number" 	class="form-control" required> <br>
				<input type="text" 		            name="work_shift" 			placeholder="Work Shift" 			class="form-control" required> <br>
</font><br><br><br>
                <button type="submit" 	name="add_user" class="btn btn-outline-success btn-light">Add Worker Account</button></center>
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
