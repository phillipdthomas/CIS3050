<?php
 $con=mysqli_connect("localhost","zswaggers","p@ssw0rd%^","zswagger_githubB");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql= "INSERT INTO Work_Activities_2 (onet_code, position_id, job_id, information_value, m, normal_error, low_bound, up_bound, recommend_supress,not_important, last_updated, source)
VALUES ('11-1011.00', '4.A.1.a.2', 'IM', 3.68, 35, 0.17, 3.33, 4.03, 'N', NULL, '2014-07-01', 'Incumbent')";

$sql= "INSERT INTO Work_Activities_2 (onet_code, position_id, job_id, information_value, m, normal_error, low_bound, up_bound, recommend_supress,not_important, last_updated, source)
VALUES ('11-1011.00', '4.A.1.a.1', 'LV', 5.35, 35, 0.23, 4.89, 5.81, 'N', 'N', '2014-07-01', 'Incumbent')";

$sql= "INSERT INTO Work_Activities_2 (onet_code, position_id, job_id, information_value, m, normal_error, low_bound, up_bound, recommend_supress,not_important, last_updated, source)
VALUES('11-1011.00', '4.A.1.b.2', 'IM', 2.38, 35, 0.29, 1.80, 2.96, 'N', NULL, '2014-07-01', 'Incumbent')";

$sql= "INSERT INTO Work_Activities_2 (onet_code, position_id, job_id, information_value, m, normal_error, low_bound, up_bound, recommend_supress,not_important, last_updated, source)
VALUES('11-1011.00', '4.A.2.a.1', 'IM', 4.35, 35, 0.18, 3.98, 4.73, 'N', NULL, '2014-07-01', 'Incumbent')";

$sql= "INSERT INTO Work_Activities_2 (onet_code, position_id, job_id, information_value, m, normal_error, low_bound, up_bound, recommend_supress,not_important, last_updated, source)
VALUES ('11-1011.00', '4.A.2.a.2', 'LV', 5.33, 35, 0.31, 4.70, 5.96, 'N', 'N', '2014-07-01', 'Incumbent')";
if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 