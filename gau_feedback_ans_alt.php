<?php
	require_once('hsd/surene_dhak.php');
?>
<?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM post_sub_comment WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."' and hadi='0'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	
	 
	if  ($numberOfRows > 0)
  {
  ?>


 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>


<?php
  echo '<font>You have &nbsp;' . $numberOfRows . '&nbsp;new unseen BoardFeedback answer</font>'; 
      
  ?> 
     
     
     
    
     
      
</div>    
      
 <?php     
      
  }
	
	
	$update=mysql_query("UPDATE post_sub_comment SET hadi = '1' WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."'");
	?>

