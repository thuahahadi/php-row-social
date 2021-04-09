<?php
	require_once('surene_dhak.php');
?>
<?php
			   include('dibba_laga.php');		
					$commentid=$_GET['id'];
					$addedby=$_GET['uid'];
					$rrt='accepted';
					$requested=$_SESSION['SESS_MEMBER_ID'];
					$update=mysql_query("UPDATE friends SET status='$rrt' WHERE id='$commentid'");
					mysql_query("INSERT INTO friends(addedby, requested, status)VALUES('$requested', '$addedby', '$rrt')");
					header("location: http://localhost/social/home/");
?>