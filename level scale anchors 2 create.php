<?php

 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
$sql="CREATE TABLE Level_Scale_Anchors_2(position_id VARCHAR (20) NOT NULL,
job_id VARCHAR (3) NOT NULL, job_worth DECIMAL (3,0) NOT NULL,
job_description CHARACTER VARYING (1000) NOT NULL)";

// Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table Level_Scale_Anchors_2 created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>