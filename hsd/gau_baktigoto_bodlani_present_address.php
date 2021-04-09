<?php

include('dibba_laga.php');
$user= $_POST['user'];
$update_time = $_POST['date'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];




mysql_query("UPDATE members SET address='$address', city='$city', country='$country', update_time='$update_time' WHERE id='$user'");

header("location: http://localhost/social/home/?update/about/present/address/");

?>
 