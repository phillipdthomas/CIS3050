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

$sql= "INSERT INTO green_occupations_2 (onet_code, type_of_green_job)
VALUES ('P19-2042.00', 'Green Enhanced Skills')";
$sql = "INSERT INTO green_occupations_2 (onet_code, type_of_green_job)
VALUES ('11-3051.03', 'Green New & Emerging')";

$sql = "INSERT INTO green_occupations_2 (onet_code, type_of_green_job)
VALUES ('11-9013.02, 'Green Enhanced Skills')";

$sql= "INSERT INTO green_occupations_2 (onet_code, type_of_green_job)
VALUES ('13-1021.00', 'Green Increased Demand')";

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