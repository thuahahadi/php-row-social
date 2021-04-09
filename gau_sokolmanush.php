<?php include 'bin/access/social/header.php';?> 
<title>My Tracker List</title>


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
              <div class="col-md-10">
              <div class="tracker_list">
              
             <div class="Right_h" align="center"><b>Your Trackers <?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo $numberOfRows; 
	?></b></div><hr/>
             
             
            <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['addedby'];	  
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$mdth'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
			  echo '<div>';
			  echo '<div style="float:left">';
			  echo '<div style=" margin-right:3px; float:left">';
			  		echo '<img class="img-circle" src="http://localhost/social/'.$tuhan1['profilepic'].'" height="30" width="30">';
					echo '</div>';
					echo '<div style="margin-top:-5px; float:right">';
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong>'.$tuhan1['fname'].' '.$tuhan1['lname'].'</strong></a><br/>';
					  echo  '<font size="2px" color="#b621ff">'.$tuhan1['city'].'</font>&nbsp;|&nbsp;<font size="2px" color="#27cefd">'. $tuhan1['country'].'</font>';
					
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right">';	
					echo '<a href=http://localhost/social/tracker/list/out/'.$dalia2["id"] .' title="Kick Out">'.'Kick Out'.'</a>';
					
					echo '</div>';
			   echo '</div>';
			   echo '<br><br><hr/><br/>';
			   
								  }
								  }
				?> 
             
             
             
             
             
              
              </div>
              
              
              
              </div>
              
              <div class="col-md-2"></div>
              
          </div>
          
          <div class="row">
              <div class="col-md-10">
              
              <div class="tracker_list">
              
              
            
              
             <div class="Right_h" align="center"><b>Add an user on your track list</b></div><hr/>
             
             
             
             
          <?php
			   include('hsd/dibba_laga.php');
			   $hamim8 = mysql_query("SELECT * FROM members ORDER BY RAND() LIMIT 20");


while($tuhan9 = mysql_fetch_array($hamim8))
  {
	  ?>
	 


        
         <?php
					
					$commentid=$tuhan9["user"];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
					
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						//Check whether the query was successful or not
						
							if(mysql_num_rows($result) > 0) {?>
								
							<?php	
							}else {
								?>
                                
                                
                                
                                       
<img class="img-circle" src="http://localhost/social/<?php echo $tuhan9["profilepic"] ;?>" height="40px" width="40px">
          <div class="right_user">
        <strong><a href="http://localhost/social/user/<?php echo $tuhan9["user"];?>"><?php echo $tuhan9['fname'] . '&nbsp;'.$tuhan9['lname'] .'&nbsp;'.$tuhan9['verified'];?></a></strong></div>
        <div class="right_info">
        <font color="#27cefd"><?php echo $tuhan9["gender"];?></font>&nbsp;|&nbsp;<font color="#b621ff"><?php echo $tuhan9["country"];?></font>
        </div>
                                
           <div align="right">
            <a href="http://localhost/social/tracker/list/addnew/<?php echo $tuhan9["user"];?>" title="Click to track this person">
            
						
						
							Track
							
                            </a>
                            </div>	
                            <hr/>
                              <?php
							}
						?>  				
				   
        
          
        
		<?php
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