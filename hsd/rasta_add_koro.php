<?php
	require_once('surene_dhak.php');
?>
 <?php
			  include('dibba_laga.php');	
			   		$md=$_SESSION['SESS_MEMBER_ID'];		
					$thuaha=$_GET['id'];
					$hadi='pending';
mysql_query("INSERT INTO friends(addedby, requested, status)VALUES('$md', '$thuaha', '$hadi')");
header("location: http://localhost/social/home/");
mysql_close($con);
?>
