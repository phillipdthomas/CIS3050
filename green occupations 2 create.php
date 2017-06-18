<?php

 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
$sql="CREATE TABLE green_occupations_2(onet_code CHARACTER(10) NOT NULL,
type_of_green_job VARCHAR(40) NOT NULL)";

// Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table green_occupations_2 created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>