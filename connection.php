<?php

$username="root";
$password="Joy@1234"; //password needed in production-jd
$server='localhost';
$db='events';             

$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
echo '<script>alert("DB error please refresh")</script>';
?>