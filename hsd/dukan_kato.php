<?php
include('dibba_laga.php');
$tuhan=$_GET['id'];
mysql_query("DELETE FROM shop_post WHERE id='$tuhan'");
header ("location: http://localhost/social/home/");
mysql_close($con);
?>