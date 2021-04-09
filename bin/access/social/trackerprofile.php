 <title>

<?php
			   include('hsd/dibba_laga.php');			
					$user=$_GET['id'];
								
								$hamin = mysql_query("SELECT * FROM members where user='$user'");
								
								
								while($tuhan = mysql_fetch_array($hamin))
								  { 
			  
			  
			  		echo $tuhan['fname'];echo '&nbsp;'.  $tuhan['lname'];
					
					
								  
								  }
				?></title>
                
                
                
  <div class="container">
  <div class="row">
    <div class="col-md-12">
   <?php 
  include('hsd/dibba_laga.php');
		
		$user=$_GET['id'];
		$hamim1 = mysql_query("SELECT * FROM members WHERE user = '$user'");

while($dalia = mysql_fetch_array($hamim1))
  {
	  
	  ?>
      <div align="center">
  <img alt="Unable to View" class="responsive pro_banner img-thumbnail" src="http://localhost/social/<?php echo $dalia["coverphoto"] ;?>">
  </div>
  
  
 
    
    
    
    </div>
  </div> 
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="row">
    <div class="col-md-4"></div>
  
  <div class="col-md-4">
  
   <div align="center">
  <img alt="Unable to View" class="responsive pro_img img-circle" src="http://localhost/social/<?php echo $dalia["profilepic"] ;?>">
  </div>
  
  </div>
  <div class="col-md-4"></div>         
     </div> 
     
     
               
                
       <div class="row">
    <div class="col-md-4"></div>
  
  <div class="col-md-4">
  <div align="center">
  <strong class="pro_name"><?php echo $dalia["fname"];?>&nbsp;<?php echo $dalia["lname"];?></strong><?php echo $dalia["verified"]; ?>
  </div>
  
  
  </div>
  <div class="col-md-4"></div>         
     </div>           
                      
               
   </div>             
         

       
         
         
         
         
          
         
         
         
                
  
 <div class="row">
  <div class="col-md-2"></div>
  
  
  
  
  <div class="col-md-8">
  <div class="pro_setting">
  
  
  
  <?php
			   include('hsd/dibba_laga.php');			
					$commentid=$_GET['id'];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
					
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						//Check whether the query was successful or not
						
							if(mysql_num_rows($result) > 0) {
			?>					
			
            
            
            
         
            
            
            
            
            <a title="Click to Delete Tracker from your tracker list" href="//localhost/social/tracker/list/out/<?php echo $_GET['id'];?>">🎿 Kick Out</a> | <a href="http://localhost/social/trackerbytracker.php?tuhan=<?php echo $_GET['id'];?>">👁‍ View Tracker List</a> |  <a href="http://localhost/social/view/message/<?php echo $_SESSION['SESS_MEMBER_ID']; ?>&idb=<?php echo $_GET['id'];?>">✉ Send Message</a> | 
            
            				
								<?php
							}else {
								?>
								
       <a href="http://localhost/social/tracker/list/addnew/<?php echo $_GET['id'];?>">👁‍ Track</a> |  
      
      
      
                                
                                <?php
							}
						?> 
  
  
  
  
  <a href="http://localhost/social/profile/view/about/<?php echo $_GET['id'];?>">📄 About</a>
  
 </div> 
  
  
  </div>
  <div class="col-md-2"></div>
 
  </div>
    </div>         
                
                
  
  
  
  
  
  
  
  
                
                
  <div class="container-fluid">  
 <hr/> 
  <div class="row">  
 
  <div class="col-md-3">
  
  
  
  <div class="row">  
 
  <div class="col-md-12 col-sm-12">
 <div class="pro_left">
 <div class="pro_left_cotent">
 <div class="left_title">
<strong>Basic Information</strong>
</div>
 <div class="left_info_div">
 <span class="pro_span"><strong>Bio</strong></span><br/><?php echo $dalia["bio"] ;?>
 </div>
<div class="left_info_div"> 
 <span class="pro_span"><strong>Address:</strong></span>&nbsp;&nbsp;<?php echo $dalia["address"] ;?>
 </div>
 <div class="left_info_div">
<span class="pro_span"><strong>Sub-Email:</strong></span>&nbsp;&nbsp;<?php echo $dalia["sub_email"] ;?>
</div>
<div class="left_info_div">
<span class="pro_span"><strong>Phone:</strong></span>&nbsp;&nbsp;<?php echo $dalia["contact"] ;?>
</div>
<div class="left_info_div">
<span class="pro_span"><strong>Gender:</strong></span>&nbsp;&nbsp;<?php echo $dalia["gender"] ;?>
</div>
<div class="left_info_div">
<span class="pro_span"><strong>Country:</strong></span>&nbsp;&nbsp;<?php echo $dalia["country"] ;?><br/><br/>
</div>
 </div>
 </div> 
</div>
</div>







  





 
  <div class="row">  
 
  <div class="col-md-12 col-sm-12">
 <div class="pro_left">
 <div class="pro_left_cotent">
 <div class="left_title">
<strong><?php echo $dalia["fname"];?>&nbsp;<?php echo $dalia["lname"];?>'s Tracker <?php
  }  
    
    ?>  <?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id'] ."' and status='accepted' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo $numberOfRows; 
	?></strong>
</div>






<?php
			   include('hsd/dibba_laga.php');			
				
									$hamim2 = mysql_query("SELECT * FROM friends WHERE requested='".$_GET['id'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($dalia1 = mysql_fetch_array($hamim2))
								  {
								  $qwe=$dalia1['addedby'];
								  $hamim3 = mysql_query("SELECT * FROM members WHERE user='$qwe' ORDER BY RAND() LIMIT 4");
								
								
								while($dalia2 = mysql_fetch_array($hamim3))
								  { 
			  
			
	  echo  '<ul class="bkt bku">';
           echo  '<li class="oq aaw">';
           echo  "<img height='40px' width='40px' class='img-circle' src='http://localhost/social/" . $dalia2["profilepic"] . "'>";
          echo  '<div class="right_user">';
            echo  '<strong>'.'<a href=http://localhost/social/user/'.$dalia2["user"] . '>' . $dalia2['fname'] . '&nbsp;'.$dalia2['lname'].'&nbsp;'.$dalia2['verified'] . '</a>'.'</strong>';
			
			
			$commentid=$dalia2["user"];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
					
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						//Check whether the query was successful or not
						
							if(mysql_num_rows($result) > 0) {
								
							}
							else {
								
			
			
			
            echo  '<div class="bkx">';
              echo  '<div align="right"><a href=http://localhost/social/tracker/list/addnew/'.$dalia2["user"] .' title="Click to track this person">'.'<button class="btn button_color">Track</button>'.'</a></div>';					
								  
             echo  '</div>';
			 }
            echo  '</div>';
           echo  '</li>';
          
         echo  '</ul><hr/>';
		}
								  
				  }
				  ?>






 </div>
 </div> 
</div>
</div>








 
 
  
  
  </div>
  
  <div class="col-md-6">




<!-------------------------------------------------------------------------------->

   <div class="row">
      
                   
                            
                            
  
  
    <div class="col-md-4 col-sm-4">
      
      <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="http://localhost/social/shop/tracker/<?php echo $_GET['id'];?>"><button class="login100-form-btn">
							<img src="http://localhost/social/bin/access/images/icon/Shopping.png" height="30" width="30">&nbsp;&nbsp;View Products
							</button></a></div></div>
                            
                            
    </div>  
    
    
    
    
    
    <div class="col-md-4 col-sm-4">
      
      <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							<img src="http://localhost/social/bin/access/images/icon/job.png" height="30" width="30">&nbsp;&nbsp;View Circular
							</button></div></div>
                            
                            
    </div>  
          </div>
  
 <!--------------------------------------------------------------------------------> 
  
  
  
  
 
   
   <?php
   
   
$commentid=$_GET['id'];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
					
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						
						
							if(mysql_num_rows($result) > 0) {  ?>
								
								
							
	    <div class="pro_left"><?php include 'bin/access/social/tracker_board_access.php';?></div>							
								
								
								
						<?php		
							}
							else {
								?>
			
			
			
           	    <div class="pro_left"><?php include 'bin/access/social/tracker_board_error.php';?></div>				
								  
           
			<?php 
		}
								  
				 
				  ?>   
   
   
   
   
   
   
   
   
   
   
   
  
  
 
      

        
        
       
        
    
        
      
        
    
        
        
        
        
 
    
    
    
 
  
  
  
  
  
 
 

   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</div> 
 
 
 
 
 
 
 
 
 
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="col-md-3">
  
  <div class="pro_left">
 <div class="pro_left_cotent">
 <div class="left_title">
<strong>Tracker a new people</strong>
</div>
  
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
 </div>
 </div>                  
 
 