 <?php
			   include('dibba_laga.php');			
					$commentid=$_GET['id'];
					mysql_query("DELETE FROM friends WHERE id='$commentid'");
								header("location: http://localhost/social/home/");
mysql_close($con);
?>