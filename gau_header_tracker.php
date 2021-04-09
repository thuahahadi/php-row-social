<?php
	require_once('hsd/surene_dhak.php');
?>
<?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	
	 
	if  ($numberOfRows > 0)
  {
  
 echo '<font>' . $numberOfRows . '</font>'; 
  }
	
	
	
	 
	?>  