<?php

include('dibba_laga.php');
$user= $_POST['user'];
$update_time = $_POST['date'];
$contact= $_POST['contact'];
$home_contact= $_POST['home_contact'];
$office_contact= $_POST['office_contact'];
$sub_email= $_POST['sub_email'];





mysql_query("UPDATE members SET contact='$contact', home_contact='$home_contact', office_contact='$office_contact', sub_email='$sub_email', update_time='$update_time' WHERE id='$user'");

header("location: http://localhost/social/home/?update/about/home/contact/");

?>