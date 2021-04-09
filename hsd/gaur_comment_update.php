<?php
include('dibba_laga.php');
$post_id=$_POST['post_id'];
$content=$_POST['content'];




mysql_query("UPDATE post_comment SET comment='$content' WHERE id='$post_id'");
header("location: http://localhost/social/home/?update/feedback");
?>