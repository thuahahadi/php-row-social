<?php
include('dibba_laga.php');
$post_id=$_POST['post_id'];
$link=$_POST['link'];
$content=$_POST['content'];
$feeling=$_POST['feeling'];
$tag=$_POST['tag'];
$location=$_POST['location'];
$share=$_POST['share'];






mysql_query("UPDATE members_post SET feeling='$feeling', location='$location', tag='$tag', link='$link', content='$content', share='$share' WHERE id='$post_id'");
header("location: http://localhost/social/home/?update/board");

?>