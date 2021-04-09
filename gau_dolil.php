<?php include 'bin/access/social/header.php';?> 
<title>About</title>


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
             
               <?php 
                                      
                                      
                                      
                                      $user_id=$_GET['id'];
                                          $member_id=$_SESSION['SESS_MEMBER_ID'];
               if ($user_id == $member_id)                       
               {
                                      ?>
              <div class="col-md-10">
             
              
           
             
             
 <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a title="Update Photo" href="http://localhost/social/update/info/<?php echo $_SESSION['SESS_MEMBER_ID'];?>"><button class="login100-form-btn">
								Update Your Information
							</button></a>
					
					</div>             
             
             
             
             
             
              
              </div>
              
              
              
              </div>
             
             
              <?php
	
                                  }
                                      else
                                      {
                                          
                                      }


                    ?>
	
             
             
             
              
              <div class="col-md-2"></div>
              
          </div>
          
          <div class="row">
              <div class="col-md-10">
              
              <div class="tracker_list">
              
              
            
              
             <div class="Right_h" align="center"><b>About</b></div><hr/>
             
             
          
        
        
			 
<p style="color:#0099cc">Bio</p>
      <?php
include('hsd/dibba_laga.php');
                  $user_id=$_GET['id'];
					$result = mysql_query("SELECT * FROM members WHERE user='$user_id'");

while($row = mysql_fetch_array($result))
								  { 
                                      
                                      ?>
								  <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
 <span class='pro_span'><strong>First Name :</strong></span>
	<?php echo $row['fname'];?>
	<br><br>
	<span class='pro_span'><strong>Surname :</strong></span>
	<?php echo $row['lname'];?>
	<br><br>
	<span class='pro_span'><strong>About :</strong></span> 
 <?php echo $row['bio'];?>
  
	<br/><br>
	<span class='pro_span'><strong>Gender :</strong></span>
	<?php echo $row['gender'];?>
	<br><br>
	<span class='pro_span'><strong>Birth Date :</strong></span>
	<?php echo $row['bday'];?>
	<br><br>
	<span class='pro_span'><strong>Experiences :</strong></span>
	<?php echo $row['experiences'];?>
	<br><br>
	<span class='pro_span'><strong>Art and entertainment : </strong></span>
	<?php echo $row['art_and_enter'];?>
	<br><br>
	</div>
 
      <br/>
      
      
      
 <p style="color:#0099cc">Education and Work</p>
    <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
  <span class='pro_span'><strong>Primary School :</strong></span>
	<?php echo $row['primary_school'];?>
	<br><br>
	<span class='pro_span'><strong>High School :</strong></span>
	<?php echo $row['high_school'];?>
	<br><br>
	<span class='pro_span'><strong>College : </strong></span>
  <?php echo $row['college'];?>
  
	<br/><br>
	<span class='pro_span'><strong>Graduation College  : </strong></span>
	<?php echo $row['graduation_college'];?>
	<br><br>
	<span class='pro_span'><strong>Work:</strong></span> 
	<?php echo $row['work'];?>
	<br><br>
	</div>
	
 
      <br/>      
      
      
      
      
      <p style="color:#0099cc">Present Address</p>
     <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
  <span class='pro_span'><strong>Address :</strong></span>
  <?php echo $row['address'];?>
  <br><br>
  <span class='pro_span'><strong>City :</strong></span>
	<?php echo $row['city'];?>
	<br><br>
	<span class='pro_span'><strong>Country : </strong></span>
	<?php echo $row['country'];?>
	<br><br>
	</div>
 
      
     <br/> 
      
      <p style="color:#0099cc">Home Town</p>
     <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
  <span class='pro_span'><strong>Address : </strong></span>
  <?php echo $row['home_address'];?>
  <br><br>
  <span class='pro_span'><strong>City : </strong></span>
	<?php echo $row['home_city'];?>
	<br><br>
	<span class='pro_span'><strong>Country : </strong></span>
	<?php echo $row['home_country'];?>
	<br><br>
	</div>
  
    <br/>  
      
      
      
      
      
      
      
      
     <p style="color:#0099cc">Contact</p>
     <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
          <?php 
                                      
                                      
                                      
                                      $user_id=$_GET['id'];
                                          $member_id=$_SESSION['SESS_MEMBER_ID'];
               if ($user_id == $member_id)                       
               {
                                      ?>
  <span class='pro_span'><strong>Email :</strong></span> 
    <?php echo $row['email'];?>
         <br><br>
         <?php
	
                                  }
                                      else
                                      {
                                          
                                      }


                    ?>
	
         <span class='pro_span'><strong>Personal contact number : </strong></span>
	<?php echo $row['contact'];?>
	<br><br>
	<span class='pro_span'><strong>Home contact number :</strong></span>
  <?php echo $row['home_contact'];?>
  
	<br/><br>
	<span class='pro_span'><strong>Office contact number :</strong></span>
	<?php echo $row['office_contact'];?>
	<br><br>
	<span class='pro_span'><strong>Sub Email :</strong></span>
	<?php echo $row['sub_email'];?>
	<br><br>
	</div>
	
 
      <br/>
       
      
      
      
      
      
      <?php 
                                      
                                      
                                      
                                      $user_id=$_GET['id'];
                                          $member_id=$_SESSION['SESS_MEMBER_ID'];
               if ($user_id == $member_id)                       
               {
                                      ?>
      
      
      <p style="color:#0099cc">Yokoll ID</p>
     <div class="mu blf abk" style="padding:8px 8px 8px 8px;">
	
	<?php echo $row['id'];?>
	<br><br>
	<span class='pro_span'><strong>Last Login : </strong></span>
	<?php echo $row['real_time'];?>
	
	<br><br>
	<span class='pro_span'><strong>Join yokoll : </strong></span>
	<?php echo $row['join_time'];?>
    <br><br>
	<span class='pro_span'><strong>Last account information update : </strong></span>
	<?php echo $row['update_time'];?>
	</div>
                  
                 
                  
                   <?php
	
                                  }
                                      else
                                      {
                                          
                                      }


                    ?>
                  
                  
                  
                  
                  
                  
                  
                  
                  <?php
	
                                  }


                    ?> 
      <br/>			 
			 
			 
			 
			 
			 
			 
			     
             
             
             
             
              
              </div>
              
              </div>
              <div class="col-md-2"></div>
              
          </div>     
              
              
              </div>
              
          </div>
          
          
          
          
          
          
          
          
          
              
          



<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/social/chat-bar.php';?>
<?php include 'bin/access/index/footer.php';?> 