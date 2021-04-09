<?php
include('dibba_laga.php');
$tuhan=$_GET['id'];
mysql_query("DELETE FROM mess WHERE id='$tuhan'");
header ("location: http://localhost/social/messages/");
mysql_close($con);
?>