

<?php
	require_once('hsd/surene_dhak.php');
?>

<?php
	include('hsd/dibba_laga.php');

$result11 = mysql_query("SELECT * FROM mess WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
	
	$numberOfRows4 = MYSQL_NUMROWS($result11);
            
            
            
             if  ($numberOfRows4 > 0)
  {
  
  echo '<font>' . $numberOfRows4 . '</font>'; 
  }
	
	
	
	?>


