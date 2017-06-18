<?php
 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql= "INSERT INTO Alternate_Titles_2 (onet_code, job_title, job_abbreviation, sources) 
 VALUES('11-1011.00', 'Aeronautics Comission Director', 'ACD', '08')";

$sql= "INSERT INTO Alternate_Titles_2 (onet_code, job_title, job_abbreviation, sources) 
VALUES('15-1133.00', 'Certified Novell Engineer', 'CNE', '06') ";
 
$sql= "INSERT INTO Alternate_Titles_2 (onet_code, job_title, job_abbreviation, sources) 
VALUES ('11-3031.02', 'Bank Advisor', 'BA','04,06')";

$sql= "INSERT INTO Alternate_Titles_2 (onet_code, job_title, job_abbreviation, sources) 
VALUES ('29-2099.00','Sleep Technician', 'ST','09')";

$sql= "INSERT INTO Alternate_Titles_2 (onet_code, job_title, job_abbreviation, sources) 
VALUES ('11-1011.00', 'Chief Executive Officer (CEO)', 'CEO', '02,04,08')";

if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 