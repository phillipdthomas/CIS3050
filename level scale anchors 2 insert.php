<?php
 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql= "INSERT INTO Level_Scale_Anchors_2 (position_id, job_id, job_worth, job_description)
VALUES ('1.A.1.a.1',	'LV',	'2',	'Understand a television commercial')";

$sql= "INSERT INTO Level_Scale_Anchors_2 (position_id, job_id, job_worth, job_description)
VALUES ('1.A.1.a.2',	'LV',	'2',	'Understand signs on the highways')";

$sql= "INSERT INTO Level_Scale_Anchors_2 (position_id, job_id, job_worth, job_description)
VALUES  ('1.A.1.a.4',	'LV',	'4',	'Write a job recommendation for a subordinate')";

$sql= "INSERT INTO Level_Scale_Anchors_2 (position_id, job_id, job_worth, job_description)
VALUES ('1.A.1.a.4',	'LV',	'1',	'Write a note reminding someone to take food out of the freezer')";

if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 