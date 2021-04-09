 <title>
      
       <?php
			   include('hsd/dibba_laga.php');			
					$user=$_SESSION['SESS_MEMBER_ID'];
								
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
		
		$user=$_SESSION['SESS_MEMBER_ID'];
		$hamim1 = mysql_query("SELECT * FROM members WHERE user = '$user'");

while($dalia = mysql_fetch_array($hamim1))
  {
	  
	  ?>
      <div align="center">
  <a title="Change Banner Image" href="http://localhost/social/update/banner/<?php echo $dalia['user'];?>"><img alt="Unable to View" class="responsive pro_banner img-thumbnail" src="http://localhost/social/<?php echo $dalia["coverphoto"] ;?>"></a>
  </div>
  
  
 
    
    
    
    </div>
  </div> 
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="row">
    <div class="col-md-4"></div>
  
  <div class="col-md-4">
  
   <div align="center">
  <a title="Update Photo" href="http://localhost/social/update/picture/<?php echo $dalia['user'];?>"><img alt="Unable to View" class="responsive pro_img img-circle" src="http://localhost/social/<?php echo $dalia["profilepic"] ;?>"></a>
  </div>
  
  </div>
  <div class="col-md-4"></div>         
     </div> 
     
     
               
                
       <div class="row">
    <div class="col-md-4"></div>
  
  <div class="col-md-4">
  <div align="center">
  <div class="pro_name_box">
  <strong class="pro_name"><?php echo $dalia["fname"];?>&nbsp;<?php echo $dalia["lname"];?></strong><?php echo $dalia["verified"]; ?>
  </div>
  </div>
  
  
  </div>
  <div class="col-md-4"></div>         
     </div>           
                      
               
             
         
         
      
         
         
         
         
                
  
 <div class="row">
  <div class="col-md-2"></div>
  
  <div class="col-md-8">
  <div class="pro_setting">
<a href="http://localhost/social/profile/view/about/<?php echo $_SESSION['SESS_MEMBER_ID'];?>">📄 About</a> | <a href="http://localhost/social/update/info/">⚙ Update Info</a> | <a href="http://localhost/social/view/all/track/">👁‍ Tracker</a> | <a href="http://localhost/social/shop/mypost/">🛒 Shop</a> | <a href="http://localhost/social/profile/job/mypost/">💼 Job</a> | <a href="http://localhost/social/gameclub/">🎲 GameClub</a>
  
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







   <?php
  }  
    
    ?> 





 
  <div class="row">  
 
  <div class="col-md-12 col-sm-12">
 <div class="pro_left">
 <div class="pro_left_cotent">
 <div class="left_title">
<strong>Your Trackers <?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	echo $numberOfRows; 
	?></strong>
</div>






<?php
			   include('hsd/dibba_laga.php');			
				
									$hamim2 = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($dalia1 = mysql_fetch_array($hamim2))
								  {
								  $qwe=$dalia1['addedby'];
								  $hamim3 = mysql_query("SELECT * FROM members WHERE user='$qwe' ORDER BY RAND() LIMIT 10");
								
								
								while($dalia2 = mysql_fetch_array($hamim3))
								  { 
			  
			
	  echo  '<ul class="bkt bku">';
           echo  '<li class="oq aaw">';
           echo  "<img height='40px' width='40px' class='img-circle' src='http://localhost/social/" . $dalia2["profilepic"] . "'>";
          echo  '<div class="right_user">';
            echo  '<strong>'.'<a href=http://localhost/social/user/'.$dalia2["user"] . '>' . $dalia2['fname'] . '&nbsp;'.$dalia2['lname'].'&nbsp;'.$dalia2['verified'] . '</a>'.'</strong>';
            echo  '<div class="bkx">';
              echo  '<div align="right"><a href=http://localhost/social/tracker/list/out/'.$dalia1["id"] .' title="Click to Delete Tracker from your tracker list">'.'<button class="btn button_color"> Kick Out</button>'.'</a></div>';					
								  }
             echo  '</div>';
            echo  '</div>';
           echo  '</li>';
          
         echo  '</ul>';
		
				  }
				  ?>






 </div>
 </div> 
</div>
</div>








 
 
  
  
  </div>
  
  <div class="col-md-6">

  
<?php include 'bin/access/social/post-bar.php';?>
  
  
 
 
 
 
 <div class="pro_left">

  
  
  
<?php include 'bin/access/social/myboard.php';?> 
  
  
 </div>
   
 
  
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
 
 