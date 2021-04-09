<?php
session_start();
include('dibba_laga.php');
$commentid=$_POST['commentid'];
$comment=$_POST['comment'];
$commentname=$_POST['commentname'];
$poster=$_POST['poster'];
$thuaha='unseen';


mysql_query("INSERT INTO post_sub_comment(commentid, commentname, comment, thuaha, poster)VALUES('$commentid', '$commentname', '$comment', '$thuaha', '$poster')");
header("location: http://localhost/social/home/");
mysql_close($con);

?>