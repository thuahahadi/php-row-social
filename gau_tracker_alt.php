<?php
	require_once('hsd/surene_dhak.php');
?>
<?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' and hadi='0' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	
	 
	if  ($numberOfRows > 0)
  {
  ?>


 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>


<?php
  echo '<font>You have &nbsp;' . $numberOfRows . '&nbsp;new Tracker Request</font>'; 
      
  ?> 
     
     
     
    
     
      
</div>    
      
 <?php     
      
  }
	
	
	$update=mysql_query("UPDATE friends SET hadi = '1' WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending'");
	?>
