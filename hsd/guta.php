
<?php
				 
session_start();
include('dibba_laga.php');
			$post_id = $_POST['post_id'];
			$hit_id = $_POST['hit_id'];
			
			$sql="INSERT INTO thuaha (post_id, hit_id)
VALUES
('$post_id','$hit_id')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
			header("location: http://localhost/social/home/");
			exit();
			
			mysql_close($con);
			
			?>