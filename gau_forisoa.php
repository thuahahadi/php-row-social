<?php include 'bin/access/social/header.php';?>





<?php 

if ($_GET['id']==$_SESSION['SESS_MEMBER_ID'])

{ 
 ?>



<?php include 'bin/access/social/myprofile.php';?> 
                
                
                
                
                
                


<?php
}
else
{
?>
<!--Copyright Thuaha Hadi all right yokoll-->

<?php


						$th=$_GET['id'];
			   	include('hsd/dibba_laga.php');
							$mkh = mysql_query("SELECT * FROM members where user='$th'");
								
								
								while($mds = mysql_fetch_array($mkh))
								
								
							 { 	


 $hsd=$mds['user']; }					 
	if($_GET['id']==$_GET['id'])
		{
			?>
			
			
			
            
            
 <?php include 'bin/access/social/trackerprofile.php';?>            
            
            
            
            
            




<?php }

else {?>
	
    
    
<?php include 'bin/access/social/trackererror.php';?> 
    
    
    
    
    
	
	<?php 
							 }
							 	
	}



?> 




<?php include 'bin/access/social/gau_notificaton_buttom.php';?>	
<?php include 'bin/access/index/footer.php';?> 
