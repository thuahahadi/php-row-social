<?php
	require_once('surene_dhak.php');
?>

 <?php
			  include('dibba_laga.php');	
			   		$md=$_SESSION['SESS_MEMBER_ID'];		
					$thuaha=$_GET['id'];
					
$update=mysql_query("UPDATE hadi SET home='$thuaha' WHERE user='$md'");

header("location: http://localhost/social/home/");
mysql_close($con);

?>