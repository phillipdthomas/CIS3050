<?php

 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
$sql="CREATE TABLE Alternate_Titles_2(onet_code VARCHAR(10) NOT NULL,
job_title VARCHAR(150) NOT NULL,job_abbreviation VARCHAR(150) NOT NULL,
sources VARCHAR(50) NOT NULL)";

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