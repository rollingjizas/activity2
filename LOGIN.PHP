<?php 

include "configure.php";
// 	if ($_SERVER['REQUEST_METHOD'] == "POST"){
// 		$surname=$_POST['surname'];
// 		$password=$_POST['password'];

// 		$sql = "SELECT * FROM infoquiz2 WHERE surname='$surname' AND password= '$password'";
// 		$result=mysqli_query($conn, $sql);
// 		$row=mysqli_fetch_array($result);
//         if ($row["work_shift"] == "day") {
//             $_SESSION['worker_id'] = $row['worker_id'];
//             $_SESSION['surname'] = $row['surname'];
//             $_SESSION['work_position'] = $row['work_position'];
//             $_SESSION['salary'] = $row['salary'];
//             $_SESSION['hours_of_work'] = $row['hours_of_work'];
//             $_SESSION['department_number'] = $row['department_number'];
// 			$_SESSION['work_shift'] = $row['work_shift'];
//             header("Location: infodash.php");
//             exit();
//         }else{
//         echo "surname and password are incorrect !";
//     }
// }

if(isset($_POST['submit'])){

    $surname = mysqli_real_escape_string($con,$_POST['surname']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($surname != "" && $password != ""){

        $sql_query = "select count(*) as infoquiz2 from infoact2 where surname='".$surname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['infoquiz2'];

        if($count > 0){
            $_SESSION['surname'] = $surname;
            header('Location: infodash.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
    
	// if (isset($_POST['surname']) && isset($_POST['password'])){
	// 	function validate($data){
 	// 		$data = trim($data);
 	// 		$data = stripslashes($data);
 	// 		$data = htmlspecialchars($data);
 	// 		return $data;
 	// 	}
	//  		$surname = validate ($_POST['surname']);
	//  		$password = validate ($_POST['password']);
	// 	 		if (empty($surname)){
	// 	 				header("Location: index.php?error=Surname is required!");
	// 	 				exit();
	// 	 			}else if (empty($password)){
	// 					header("Location: index.php?error=Password is required!");
	// 	 				exit();
	// 	 			}else{
	// 	 				header("Location: infodash.php?error=Sorry! You entered invalid account!");
	// 	 				exit();
	// 	 			}
	// }

?>
