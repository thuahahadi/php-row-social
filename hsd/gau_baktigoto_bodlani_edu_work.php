<?php

include('dibba_laga.php');
$user= $_POST['user'];
$update_time = $_POST['date'];
$primary_school= $_POST['primary_school'];
$high_school= $_POST['high_school'];
$college= $_POST['college'];
$graduation_college= $_POST['graduation_college'];
$work= $_POST['work'];

mysql_query("UPDATE members SET primary_school='$primary_school', high_school='$high_school', college='$college', graduation_college='$graduation_college', work='$work', update_time='$update_time' WHERE id='$user'");

header("location: http://localhost/social/home/?update/about/home/work&education/");

?>