<?php

 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
 $sql="CREATE TABLE task_ratings_2 (
  code CHARACTER(10) NOT NULL,
  task_id DECIMAL(8,0) NOT NULL,
  error DECIMAL(5,2),
  low_ci DECIMAL(5,2),
  high_ci DECIMAL(5,2),
  updated DATE NOT NULL)";

 // Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>
