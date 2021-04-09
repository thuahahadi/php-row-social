<?php
include('dibba_laga.php');
$tuhan=$_GET['id'];
mysql_query("DELETE FROM post_comment WHERE id='$tuhan'");
header ("location: http://localhost/social/home/");
mysql_close($con);
?>