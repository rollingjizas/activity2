<?php  
      $servername = "localhost";  
      $username = "root";  
      $password = "root";
      $database= "infoact2";  
       $connection=mysqli_connect ($servername , $username , $password, $database) or die ("My SQL Error");
       

       //inserting Record to the database
       $worker_id=$_POST['worker_id'];
       $surname = $_POST['surname'];
       $password = $_POST['password'];
       $work_position = $_POST['work_position'];
       $salary = $_POST['salary'];
       $hours_of_work = $_POST['hours_of_work'];
       $department_number =  $_POST['department_number'];
       $work_shift = $_POST['work_shift'];
       $query = "UPDATE infoquiz2 SET surname=$surname, password=$password, work_position=$work_position, salary=$salary, hours_of_work=$hours_of_work, department_number=$department_number, work_shift=$work_shift WHERE worker_id=$worker_id";
       $result = mysqli_query($connection, $query); 
       if($result)
           {
               echo "Successfully updated database";
           }
           else
           {
            die('Error: '.mysqli_error($connection));
           }
           mysqli_close($connection);
       ?>