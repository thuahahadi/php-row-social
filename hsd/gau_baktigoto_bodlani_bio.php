<?php

include('dibba_laga.php');
$user= $_POST['user'];
$update_time = $_POST['date'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$bio= $_POST['bio'];
$gender= $_POST['gender'];
$bday= $_POST['bday'];
$experiences= $_POST['experiences'];
$art= $_POST['art_and_enter'];
$search_name= $_POST['fname'].' '.$_POST['lname'];








mysql_query("UPDATE members SET fname='$fname', lname='$lname', gender='$gender', bday='$bday', bio='$bio', experiences='$experiences', art_and_enter='$art', update_time='$update_time', search_name='$search_name' WHERE id='$user'");


header("location: http://localhost/social/home/?update/about/bio/");
?>
 