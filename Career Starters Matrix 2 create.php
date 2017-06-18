<?php

 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");

 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 // Create table
$sql="CREATE TABLE Career_Starters_Matrix_2(onet_code CHARACTER (10) NOT NULL,
related_onet_code CHARACTER (10) NOT NULL,related_index_number DECIMAL (3,0) NOT NULL)";

// Execute query
 if (mysqli_query($con,$sql))
  {
  echo "Table Career_Starters_Matrix_2 created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
 ?>