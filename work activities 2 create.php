<?php

 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
$sql="CREATE TABLE Work_Activities_2(onet_code CHARACTER (10) NOT NULL, 
position_id VARCHAR (20) NOT NULL, job_id VARCHAR (3) NOT NULL,
information_value DECIMAL (5,2) NOT NULL, m DECIMAL (4,0),
normal_error DECIMAL(5,2),low_bound DECIMAL(5,2),up_bound DECIMAL(5,2),
recommend_supress CHARACTER(1),not_important CHARACTER(1),
last_updated DATE NOT NULL,source VARCHAR (30) NOT NULL)";

// Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table Work_Activities_2 created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>