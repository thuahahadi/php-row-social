<?php include 'bin/access/social/header.php';?> 
<title>Edit Sub-comment</title>
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
            
            
            
            
            
            
        <form action="http://localhost/social/answer/update.xml" method="post">
          
  <input type="hidden" name="post_id" value="<?php echo $_GET['id'];?>">
            
            <textarea name="content" placeholder="write something..." style="height:100%; width:100%";><?php echo $tuhan3['comment']; ?></textarea>
            
            
            <br/><br/>
            <button class="btn btn-info" name="submit" type="submit">Update Feedback</button>
            
            </form>
            
            
    <hr/>   
      
      
      
      

                
                
                
                
            </div>
            
            
        
          
          
          
          
          
          
          
            
          
     
        
        
     

    

               </div>           
            
            
            
            
            
                                 
                                 
                 <?php                
            
                             }
            ?>
    
    
        </div>
    </div>
</div>
<?php include 'bin/access/index/footer.php';?> 