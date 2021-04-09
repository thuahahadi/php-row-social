<?php
session_start();
include('hsd/dibba_laga.php');
$commentid=$_POST['commentid'];
$comment=$_POST['comment'];
$commentname=$_POST['commentname'];
$poster=$_POST['poster'];
$thuaha='unseen';

$file = rand(100000,10000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="bin/access/images/member/comment/";
	
	// new file size in KB
	$new_size = $file_size/230024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	move_uploaded_file($file_loc,$folder.$final_file);

mysql_query("INSERT INTO post_comment(commentid, commentname, comment, thuaha, images, type, poster)VALUES('$commentid', '$commentname', '$comment', '$thuaha', '$final_file', '$file_type', '$poster')");
header("location: http://localhost/social/home/");
mysql_close($con);

?>