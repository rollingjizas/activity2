

<?php  

      $servername = "localhost";  
      $username = "root";  
      $password = "root";
      $database= "infoact2";   
       $connection=mysqli_connect ($servername , $username , $password, $database) or die ("My SQL Error");


       $worker_id=$_POST['search'];
       $query = "select * from infoquiz2 where worker_id like '%$worker_id%' ";
       $result = mysqli_query($connection, $query); 
  
?>
<?php
         $row = mysqli_fetch_array($result);

        $count = count($row);
        
         if ($count > 0) { foreach ($result as $r) { 
            
           echo $r["surname"];
           echo $r["password"];
           echo $r["work_position"];
           echo $r["salary"]; 
           echo $r["hours_of_work"]; 
           echo $r["department_number"]; 
           echo $r["work_shift"];


         }} else {
             echo "No Worker Account found"; }
       

       ?>