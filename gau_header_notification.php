<?php
	require_once('hsd/surene_dhak.php');
?>
 <?php
	include('hsd/dibba_laga.php');
                 

$result = mysql_query("SELECT * FROM post_comment WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."'");
	
	$numberOfRows1 = MYSQL_NUMROWS($result);	
	
	
	  if  ($numberOfRows1 > 0)
  {
  
  echo '<font>' . $numberOfRows1 . ',</font>';
  }
	
	
	 
                 
                 
                 
                 
                 
                 $result2 = mysql_query("SELECT * FROM post_sub_comment WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."'");
	
	$numberOfRows2 = MYSQL_NUMROWS($result2);	
	
	
	 
	
	
	if  ($numberOfRows2 > 0)
  {
  
  echo '<font>' . $numberOfRows2 . '</font>';
  }
	
	
	 
	?>  