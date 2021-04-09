 <div align="center">
      
        <?php
			   include('hsd/dibba_laga.php');			
					$dalia=$_SESSION['SESS_MEMBER_ID'];
								
								$hamim = mysql_query("SELECT * FROM members where user='$dalia'");
								
								
								while($tuhan = mysql_fetch_array($hamim))
								  { 
			  ?>
			  <div class="row">
                 
        <div class="col-md-12 col-sm-12">
			  <div align="center">
			  		<a title="Update Photo" href="http://localhost/social/update/picture/<?php echo $tuhan['user'];?>"><img src="http://localhost/social/<?php echo $tuhan['profilepic'];?>" height="150" width="150" class="img-responsive img-rounded"></a>
            </div>
                    
     <br/>
     
     <div style="width:200px;">
         <strong><a href="http://localhost/social/user/<?php echo $tuhan['user'];?>" alt="Login as <?php echo $tuhan['fname'];?> <?php echo $tuhan['lname'];?>"><font class="name-font"><?php echo $tuhan['fname'];?>&nbsp;<?php echo $tuhan['lname'].$tuhan['verified'];?></font></a></strong>
         </div>
         </div>
     
     
      
			</div>					 

        
        
        <div class="row">
        <div class="col-md-12 col-sm-12">
        
        <div class="row">
     <div class="col-md-12">
         <div align="center">
         <a class="nav-link space" href="http://localhost/social/messages/" title="Unread Message" >✉ <font color="#b621ff"><b>Message <?php
	include('hsd/dibba_laga.php');

$result11 = mysql_query("SELECT * FROM mess WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
	
	$numberOfRows4 = MYSQL_NUMROWS($result11);	
	
	echo '<font>' . $numberOfRows4 . '</font>'; 
	
	?></b></font></a>
     
            
     <a class="nav-link space" href="http://localhost/social/view/all/track/request/" title="Tracker Request" >👁‍ <font color="#27cefd"><b>Tracker  <?php
	include('hsd/dibba_laga.php');

$result = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='pending' ORDER BY requested ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	
	
	 
	
	
	echo '<font>' . $numberOfRows . '</font>'; 
	
	 
	?></b></font></a>
     </div>
            </div>   
         
         
     </div>
        
        
        
        </div>
        </div>
   
      
       <div class="row">
     
        <div class="col-md-10 col-sm-12">
            <div align="center">

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a title="Update Photo" href="http://localhost/social/update/info/<?php echo $tuhan['user'];?>"><button class="login100-form-btn">
								Update Info
							</button></a>
						</div>
					</div>
                <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a title="🎲 GameClub" href="http://localhost/social/gameclub/" target="_blank"><button class="login100-form-btn">
								game club
							</button></a>
						</div>
					</div> 
                </div>
           </div>
      </div>
      
        <div style="overflow: auto;"> 
        
      
      
       <div class="bio">
	   <?php echo $tuhan['bio'];?>
       </div>
            
       <div align="left">
           <ul>
               <li>
       <div class="basic-info">Address:</div>
       <div class="basic-info-fild">
	   <?php echo $tuhan['address'];?>
       </div>
                   </li>
               <li>
       <div class="basic-info">Email:</div>
	   <div class="basic-info-fild"><?php echo $tuhan['email'];?>
       </div>
               </li>
               <li>
       <div class="basic-info">Phone:</div>
       <div class="basic-info-fild">
	   <?php echo $tuhan['contact'];?>
       </div>
               </li> 
                   <li>
       <div class="basic-info">Country:</div>
       <div class="basic-info-fild">
	   <?php echo $tuhan['country'];?>
       </div>
               </li>  
                       <li>
       <div class="basic-info">Gender:</div>
       <div class="basic-info-fild">
	   <?php echo $tuhan['gender'];?>
       </div>
               </li>
         </ul>  
       </div>
        
       
            
     </div>   
       
       
       
       
       
       
       
       <?php
	    }
				?>
                
                </div>