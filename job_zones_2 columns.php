<?php
 $con=mysqli_connect("localhost","directsalesites","p@ssw0rd%^","directsa_GitHubBCIS305");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

  $sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-1011.00', 5, '2014-07-01')";

 $sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-1021.00', 4, '2015-07-01')";

  $sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-2011.00', 4, '2010-06-01')";

$sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-2022.00', 4, '2016-07-01')";


  $sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-2031.00', 4, '2009-06-01')";

 $sql="INSERT INTO job_zones_2(code, job_zone, date_updated)
VALUES('11-3031.01', 5, '2012-07-01')";


 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 