<?php 
 $servername = "localhost";  
       $username = "root";  
       $password = "root";
       $database= "infoact2";  
       $connection=mysqli_connect ($servername , $username , $password, $database) or die ("My SQL Error");
session_start();
include"configure.php";
	//FOR DELETE FUNCTION
	if (isset($_POST['delete_user'])) {
		$user_id = mysqli_real_escape_string($conn, $_POST['delete_user']);
		$query = "DELETE FROM infoquiz2 WHERE id='$id' ";
		$query_run = mysqli_query($conn, $query);
			if ($query_run) {
				$_SESSION['message'] = "User Account Succesfuly Deleted";
				header("Location: infodash.php");
				exit();
			}else{
				$_SESSION['message'] = "User Account is not Succesfuly Deleted";
				header("Location: infodash.php");
				exit();
			}
	}

	$id = $_POST['id'];
	$surname = $_POST['username'];
	$password = $_POST['password'];
	$work_position = $_POST['work_position'];
	$salary = $_POST['salary'];
	$hours_of_work= $_POST['hours_of_work'];
	$department_number =  $_POST['department_number'];
	$work_shift =  $_POST['work_shift'];

	$query= "INSERT INTO infoquiz2 (id,surname, password, work_position, salary, hours_of_work,department_number,work_shift) 
			VALUES ('$surname', '$password', '$work_position', '$salary', '$hours_of_work', '$department_number','$work_shift')";

       $result = mysqli_query($connection, $query); 
       if($result)
           {
               echo "Succesfuly Account Added";
           }
           else
           {
            die('Error: '.mysqli_error($connection));
           }
           mysqli_close($connection);
      
?>

