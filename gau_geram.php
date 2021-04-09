<?php include 'bin/access/social/header.php';?> 


 <title>
      
       <?php
			   include('hsd/dibba_laga.php');			
					$user=$_SESSION['SESS_MEMBER_ID'];
								
								$hamin = mysql_query("SELECT * FROM members where user='$user'");
								
								
								while($tuhan = mysql_fetch_array($hamin))
								  { 
			  
			  
			  		echo "Welcome&nbsp;" .$tuhan['fname'];echo '&nbsp;'.  $tuhan['lname'];
					
					
								  
								  }
				?></title>


    






<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
      <div class="static">
     
 <?php include 'bin/access/social/left_bar_content.php';?>    
     
     
     
       </div>
      </div>
  </div>
 
  <div id="main">
      <div class="col-md-12">
      	 <div align="center">
         
         
         
         <div class="alert alert-dismissible" role="alert">
        
          <h4><?php
	$current=date("d/m/y");
	$timeset=strtotime("+6 hour");
	$time = date ("H");
	   			
					$hamin=$_SESSION['SESS_MEMBER_ID'];
								
								$dalia1 = mysql_query("SELECT * FROM members where user='$hamin'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
			  
			  
			  		echo '<font color="brown">Hello!&nbsp;'.$tuhan1['fname'].' '.$tuhan1['lname'].'</font>';
					
								  
								  }
				
	if ($time < 12) {
	echo "<font color='brown'> Good Morning</font> <img src='http://localhost/social/bin/access/images/icon/morning.png'>";
	}
	elseif ($time < 16){
	echo "<font color='brown'> Good Afternoon</font> <img src='http://localhost/social/bin/access/images/icon/noon.png'>";
	}
	elseif ($time< 20){
	echo "<font color='brown'> Good Evening</font> <img src='http://localhost/social/bin/access/images/icon/evening.png'>";
	}
	elseif ($time< 24){
	echo "<font color='brown'> Good Night</font> <img src='http://localhost/social/bin/access/images/icon/night.png'>";
	}


?>&nbsp;&nbsp;&nbsp;<button type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><img src="http://localhost/social/bin/access/images/icon/cross.PNG" alt="Time" height="16" width="16"></span></button></h4></div>
        </div> 
          
          
          
          
         <!-- <div class="row">
              <div class="col-md-10"><div class="well"><p>Admin post site.</p></div></div>
            <div class="col-md-2"></div>
              
          </div>-->
          
          
          
          
          
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-8">
              
   
   
   
   
   
<?php include 'bin/access/social/post-bar.php';?>    
   
   
   
   
   
   
              
              
      
          
          </div>
          
          
         </div> 
          
          
          
          
          
          
          
          
          
          
          
          
          
          
   <div class="row">
     <div class="col-md-6">     
     
   <?php  
include('hsd/dibba_laga.php');
$amina=$_SESSION['SESS_MEMBER_ID'];
							$abbas = mysql_query("SELECT * FROM hadi where user='$amina'");
								
								
								while($sis = mysql_fetch_array($abbas))
								
								
							 { 
                             
                             
  $mom=$sis['home']; 					 
	if($mom=='public')
		{                           
            ?>                 
                 
                 
 <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="http://localhost/social/switch/tracker"><button class="login100-form-btn">
								Switch To Tracker Board
							</button></a>
						</div>
					</div>                
                 
                 
   <?php include 'bin/access/social/public.php';?>               
                 
                 
                 
                             
                             
                             
                             
                            <?php
		}
		$mom=$sis['home']; 					 
	if($mom=='tracker')
		{ ?>
        
        
        
   <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="http://localhost/social/switch/public"><button class="login100-form-btn">
								Switch To Public Board
							</button></a>
						</div>
					</div>      
        
        <?php include 'bin/access/social/tracker.php';?> 
							
                            
                            <?php  }
							 }
							 ?> 
     
     
  </div>   
     
     
     
     
     
     
     <div class="col-md-4">
    
 <div class="right_box_main">    
     
      <div class="right_box"> 
     
  
 <div class="Right_h"><b>Add an user on your track list</b></div>
       
        
          
          
           <?php
			   include('hsd/dibba_laga.php');
			   $hamim8 = mysql_query("SELECT * FROM members ORDER BY RAND() LIMIT 6");


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
                                <button class="btn btn-info">
							<font color=""><b>Track</b></font>
							</button>
                                    </a></div>
                            <hr/>
                                <?php
							}
						?>  
        
           
            
            
						
							
												
				   
        
          
        
		<?php
				  }
				  ?>    
     
     
    </div>  
     
     
     
     
     
     
    </div> 
     </div>
     
     <div class="col-md-2"></div>
          </div>
          
          
      </div>
  </div>
</div><!--/row-offcanvas -->
  
 



  

<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/social/chat-bar.php';?>
<?php include 'bin/access/index/footer.php';?> 