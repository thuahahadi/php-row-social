<?php include 'bin/access/social/header.php';?> 
<title>Notification</title>


<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
      <div class="static">
     
 <?php include 'bin/access/social/left_bar_content.php';?>    
     
     
     
       </div>
      </div>
  </div>
 














 <div class="row">
              <div class="col-md-12">
              
         <div class="row">
              <div class="col-md-9">
              <div class="tracker_list">
              
             <div class="Right_h" align="center"><b>Notifications
                 
                 
                 
                 
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
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 </b></div><hr/>
             
             
            <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM post_comment WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."' order by id desc");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['commentname'];	  
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$mdth'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
		              echo '<strong><font color="#ff0d0d">'.$dalia2['thuaha'].' : </font></strong>';
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong><font color="#a900d1">'.$tuhan1['fname'].' '.$tuhan1['lname'].'</font></strong></a>&nbsp;';
					  echo  'post a feedback on your board&nbsp;|&nbsp;<img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="At:" height="16" width="16">&nbsp;'.$dalia2['comment_time'] .'&nbsp;&nbsp;';
                                      echo  ':<a href=http://localhost/social/view/story/'.$dalia2['commentid'] .'> <img src="http://localhost/social/bin/access/images/icon/full.PNG" height="16px" width="16px"> <font color="#25cffd">View</font></a>';
					
			   echo '<hr/>';
			   
								  }
								  }
				?> 
             
            <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM post_sub_comment WHERE thuaha='unseen' and  poster='".$_SESSION['SESS_MEMBER_ID'] ."' order by id desc");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['commentname'];	  
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$mdth'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
		               echo '<strong><font color="#ff0d0d">'.$dalia2['thuaha'].' : </font></strong>';
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong><font color="#a900d1">'.$tuhan1['fname'].' '.$tuhan1['lname'].'</font></strong></a>&nbsp;';
					  echo  'answer your feedback&nbsp;|&nbsp;<img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="At:" height="16" width="16">&nbsp;'.$dalia2['time'] .'&nbsp;&nbsp;';
                                      echo  ':<a href=http://localhost/social/feedback/replay/'.$dalia2['commentid'] .'> <img src="http://localhost/social/bin/access/images/icon/full.PNG" height="16px" width="16px"><font color="#25cffd"> View</font></a>';
					
			   echo '<hr/>';
			   
								  }
								  }
				?> 
             
             <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM post_comment WHERE  poster='".$_SESSION['SESS_MEMBER_ID'] ."' and thuaha='read' order by id desc limit 50");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['commentname'];	  
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$mdth'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
		              
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong><font color="#a900d1">'.$tuhan1['fname'].' '.$tuhan1['lname'].'</font></strong></a>&nbsp;';
					  echo  'post a feedback on your board&nbsp;|&nbsp;<img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="At:" height="16" width="16">&nbsp;'.$dalia2['comment_time'] .'&nbsp;&nbsp;';
                                      echo  ':<a href=http://localhost/social/view/story/'.$dalia2['commentid'] .'> <img src="http://localhost/social/bin/access/images/icon/full.PNG" height="16px" width="16px"> <font color="#25cffd">View</font></a>';
					
			   echo '<hr/>';
			   
								  }
								  }
				?>
                  
                  
                  
                             <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM post_sub_comment WHERE  poster='".$_SESSION['SESS_MEMBER_ID'] ."' and thuaha='read' order by id desc limit 50");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['commentname'];	  
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$mdth'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
		              
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong><font color="#a900d1">'.$tuhan1['fname'].' '.$tuhan1['lname'].'</font></strong></a>&nbsp;';
					  echo  'answer your feedback&nbsp;|&nbsp;<img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="At:" height="16" width="16">&nbsp;'.$dalia2['time'] .'&nbsp;&nbsp;';
                                      echo  ':<a href=http://localhost/social/feedback/replay/'.$dalia2['commentid'] .'> <img src="http://localhost/social/bin/access/images/icon/full.PNG" height="16px" width="16px"><font color="#25cffd"> View</font></a>';
					
			   echo '<hr/>';
			   
								  }
								  }
				?>  
                  
                  
                  
             
              
              </div>
              
              
              
              </div>
              
              <div class="col-md-2"></div>
              
          </div>
          
               
              
              
              </div>
              
          </div>
          
          
          
          
          
          
          
          
          
              
          



<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/social/chat-bar.php';?>
<?php include 'bin/access/index/footer.php';?> 