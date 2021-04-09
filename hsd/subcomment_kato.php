<?php
include('dibba_laga.php');
$tuhan=$_GET['id'];
mysql_query("DELETE FROM post_sub_comment WHERE id='$tuhan'");
header ("location: http://localhost/social/home/?deleteans");
mysql_close($con);
?>