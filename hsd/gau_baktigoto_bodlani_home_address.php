<?php

include('dibba_laga.php');
$user= $_POST['user'];
$update_time = $_POST['date'];
$home_address= $_POST['home_address'];
$home_city= $_POST['home_city'];
$home_country= $_POST['home_country'];




mysql_query("UPDATE members SET home_address='$home_address', home_city='$home_city', home_country='$home_country', update_time='$update_time' WHERE id='$user'");

header("location: http://localhost/social/home/?update/about/home/address/");

?>
 