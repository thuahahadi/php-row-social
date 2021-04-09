<?php
	require_once('hsd/surene_dhak.php');
?> 

<?php
setOnLine();

function setOnLine(){
include('hsd/dibba_laga.php');
	$a = $_SESSION['SESS_MEMBER_ID'] ;
echo $a;

 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $time = date("Y-m-d H:i:s");
//echo $time;
$sql = ("UPDATE members SET real_time = '$time' WHERE user = '$a'")or die("hẹo" . mysql_error());
$query = mysql_query($sql);

}





?> 
