<?php
 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql= "INSERT INTO Career_Starters_Matrix_2 (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-2021.00','1')";

$sql= "INSERT INTO Career_Starters_Matrix_2 (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00','13-1011.00','2')";

$sql= "INSERT INTO Career_Starters_Matrix_2 (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-9111.00',	'3')";

$sql= "INSERT INTO Career_Starters_Matrix_2 (onet_code, related_onet_code, related_index_number)
VALUES ('11-1011.00',	'11-9033.00',	'4')";

if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 