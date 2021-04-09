<?php include 'bin/access/social/header.php';?> 
<title>Post Sub-comment</title>
  <?php
			  include('hsd/dibba_laga.php');		
					$commentid=$_GET['id'];
					$rrt='read';
					$th=$_SESSION['SESS_MEMBER_ID'];
								$update=mysql_query("UPDATE post_sub_comment SET thuaha='$rrt' WHERE commentid='$commentid' and poster='$th'");
							
								
				
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 post_area">
            
<?php 
            
            include('hsd/dibba_laga.php');
            
             $comment=$_GET['id'];
            
            $hamim3 = mysql_query("SELECT * FROM post_comment Where id='$comment'");
								
								
								while($tuhan3 = mysql_fetch_array($hamim3))
								
								
							 { 	
            
            
            
            $user=$tuhan3['commentname'];
            
             $hamim1 = mysql_query("SELECT * FROM members Where user='$user'");
								
								
								while($tuhan1 = mysql_fetch_array($hamim1))
								
								
							 { ?>
            
            <img src="http://localhost/social/<?php echo $tuhan1['profilepic']; ?>" class="img-circle post_img">   
     
     
     
     <div class="poster_name">
     <?php $naam=$tuhan1['fname'].' '.$tuhan1['lname'].'&nbsp;'.$tuhan1['verified'];?>
     </div>
     
     <strong><?php echo '<a style="text-decoration:none" href=http://localhost/social/user/'.$tuhan3["commentname"] .'>'.$naam.'</a>';?></strong>
     
     <div class="post_time">
     <img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="Time" height="16" width="16"> <?php echo $tuhan3['comment_time'];?>
     </div>
                                 
                                 
                   
                                 
                                 
                                 
                                 
                   <?php              
                                 
                                 
                             }
            
            
            
            
            
            
            
            
            ?>
            
            
            
    <hr/>        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div align="center">
              <?php 
  						 
	$hadi=$tuhan3['type']; 					 
	if($hadi=='image/jpeg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/jpg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/png')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/gif')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].' ">';
		}
						  
						  
						  
						  
	$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/mp3')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/aac')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</audio>';
		
		}	
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/wma')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/amr')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/ogg')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</audio>';
		
		}						  
						  
						  
						  
						  
						  
				$hadi=$tuhan3['type']; 					 
	if($hadi=='video/mp4')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/3gp')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/avi')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}

		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/mov')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/webm')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan3['images'].'"  >';
		
		echo '</video>';
		
		}
		
		?>  
            
      </div>      
            
            
            
            
            
            
        
          
  <div  style="line-height: 1.4;">
            
            <?php echo $tuhan3['comment']; ?>
            
            </div>     
            
            
            
            
            
    <hr/>   
      
      
      
      
        <form action="http://localhost/social/addnew/comment/answer.xml" method="post">
        
        
        <input name="commentid" type="hidden" value="<?php echo $comment;?>">
        <input name="commentname" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>">
        
       <input name="poster" type="hidden" value="<?php echo $tuhan3["commentname"];?>">
        
        <div class="wrap-input100 validate-input" data-validate = "Type something">
						<input class="input100" type="text" name="comment" required>
						<span class="focus-input100" data-placeholder="Post your answer"></span>
					</div>
                    <div class="container-login100-form-btn">
                   
						<button class="btn"><div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
								<font color="#FFFFFF"><b>Answer This Feedback</b></font>
							
						</div>
					</button></div>
        
        </form>
        
        
        <hr/>         
            
            
            
            
  <div class="comment_area">
        
        <?php
		 $hamim6 = mysql_query("SELECT * FROM post_sub_comment where commentid='$comment'");
			while($tuhan5 = mysql_fetch_array($hamim6))
			 { 					
			
			$halima=$tuhan5['commentname'];
			$hamim7 = mysql_query("SELECT * FROM members where user='$halima'"); 
			while($tuhan6 = mysql_fetch_array($hamim7))
			{ 		?>
            
            
         
            
            
            <div class="commenter_image">
            <img class="img-circle img-sm"  src="http://localhost/social/<?php echo $tuhan6['profilepic'];?>" style="max-width: 30px; float:left;">
            </div>
            
            
            
            <div class="commenter_name" style="margin-left:30px;">
            <?php echo' <a href=http://localhost/social/user/'.$tuhan6["user"] .'><font size="3px">'.$tuhan6['fname'].' '.$tuhan6['lname'].'</font>&nbsp;'.$tuhan6['verified'].'</a>';?><br/>
            
            
            <?php
			$tuaha=$tuhan5['id']; 
     $hadi=$tuhan5['commentname']; 					 
	if(($hadi==$_SESSION['SESS_MEMBER_ID']) && ($tuaha==$tuhan5['id']))
		{	
		echo '<span class="text-muted  comment_time pull-right"><a title="Delete Feedback" href=http://localhost/social/post/delete/feedback/sub/'.$tuhan5["id"] .'><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a></span>';
		}
		else{
			}?>
            
            
            
           </div>
            <div class="comment_time">
           <img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="Time" height="16" width="16"> 
			
			
			<?php echo $tuhan5['time'];?> 
			</div>
			
			
            
            <div class="comment_content"  style="line-height: 1.4;">
            <?php echo $tuhan5['comment'];?> 
                
                
                
                
                
                
            </div>
            
            
        
          
          
          
          
          
          
          
            
          
     
        
        
     

    
     
     
     
 <?php 
						}
			 }
			 
			 ?>
               </div>           
            
            
            
            
            
                                 
                                 
                 <?php                
            
                             }
            ?>
    
    
        </div>
    </div>
</div>
<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/index/footer.php';?> 