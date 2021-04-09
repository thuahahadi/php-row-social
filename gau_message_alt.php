<?php
	require_once('hsd/surene_dhak.php');
?>

<?php
	include('hsd/dibba_laga.php');

$result11 = mysql_query("SELECT * FROM mess WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread' and hadi='0'");
	
	$numberOfRows4 = MYSQL_NUMROWS($result11);
            
            
            
             if  ($numberOfRows4 > 0)
  {
  ?>


 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>


<?php
  echo '<font>You have&nbsp;' . $numberOfRows4 . '&nbsp;new unread messages</font>'; 
      
  ?> 
     
     
     
    
     
      
</div>    
      
 <?php     
      
  }
	
	
	$update=mysql_query("UPDATE mess SET hadi = '1' WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
	?>
