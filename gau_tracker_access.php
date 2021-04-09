      
<?php
	require_once('hsd/surene_dhak.php');
?>

<?php
if(isset($_POST["limit"], $_POST["start"]))
{
?>


<?php
			   	include('hsd/dibba_laga.php');
				
				
				$post_id=$_SESSION['user_profile_access'];
		$hamim3 = mysql_query("SELECT * FROM members_post Where pakadtoan='$post_id' or name='$post_id' ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
								
								  
								while($tuhan3 = mysql_fetch_array($hamim3))
								
								
							 { 	
								$kigur_post=$tuhan3['name'];	
	
		   $hamim4 = mysql_query("SELECT * FROM members where user='$kigur_post' ORDER BY id DESC");
		   while($tuhan4 = mysql_fetch_array($hamim4))
			
			
						
								  {?>   
                                  
                                  
  <div class="post_area col-md-12 col-sm-12">                                 
  
  
                   
  <img src="http://localhost/social/<?php echo $tuhan4['profilepic']; ?>" class="img-circle post_img">   
     
     
     
     <div class="poster_name">
     <?php $naam=$tuhan4['fname'].' '.$tuhan4['lname'].'&nbsp;'.$tuhan4['verified'];?>
     </div>
     
     <strong><?php echo '<a style="text-decoration:none" href=http://localhost/social/user/'.$tuhan4["user"] .'>'.$naam.'</a>';?></strong>
     
     <div class="post_time">
     <img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="Time" height="16" width="16"> <?php echo $tuhan3['time'];?>
     </div>
     
     
     
     
     
      <?php 
     $hadi=$tuhan3['name']; 					 
	if($hadi==$_SESSION['SESS_MEMBER_ID'])
		{	
		echo '<span class="delete_post pull-right"><a title="Delete Post" href=http://localhost/social/post/delete/'.$tuhan3["id"] .'><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a> &nbsp;
		<a title="Edit Post" href=http://localhost/social/post/edit/'.$tuhan3["id"] .'><img src="http://localhost/social/bin/access/images/icon/edit.PNG" alt="" height="18" width="18"></a></span>';
		}
		else{
			}?>    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <?php 
     $hadi=$tuhan3['feeling']; 					 
	if($hadi)
		{	
		echo '<img src="http://localhost/social/bin/access/images/icon/feeling.PNG" alt="" height="16" width="16"> '.$tuhan3['feeling'];
		}
		else{
			}?>
        
        
        <?php 
     $hadi=$tuhan3['tag']; 					 
	if($hadi)
		{	
		echo '<img src="http://localhost/social/bin/access/images/icon/with.PNG" alt="With: " height="16" width="16"> '.$tuhan3['tag'];
		}
		else{
			}?>
     
     <?php 
     $hadi=$tuhan3['location']; 					 
	if($hadi)
		{	
		echo '<img src="http://localhost/social/bin/access/images/icon/at.PNG" alt="At: " height="16" width="16"> '.$tuhan3['location'];
		}
		else{
			}?>
     
     
     
     <hr/>
     
   
     
     
     
     
     
     
  <?php 
  						 
	$hadi=$tuhan3['type']; 					 
	if($hadi=='image/jpeg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/jpg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/png')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].' ">';
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='image/gif')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].' ">';
		}
						  
						  
						  
						  
	$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/mp3')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/aac')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</audio>';
		
		}	
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/wma')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/amr')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='audio/ogg')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</audio>';
		
		}						  
						  
						  
						  
						  
						  
				$hadi=$tuhan3['type']; 					 
	if($hadi=='video/mp4')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/3gp')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/avi')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/mov')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$row3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$tuhan3['type']; 					 
	if($hadi=='video/webm')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/uploads/'.$tuhan3['file'].'"  >';
		
		echo '</video>';
		
		}
		
		?>   
        
 <div class="post_content" style="line-height: 1.4;">
 
  <?php $limit=$tuhan3['content'];
      
      if($limit>(substr($limit,0,1500)))
		{
      echo substr($limit,0,1500);
    echo '<a href="http://localhost/social/view/story/'.$tuhan3['id'].'"><font color="#CC3366">...Continue</font></a>';
        }
                                   else{
                                       echo $limit;
                                   }
      
      ?> 
    
    </div>           
     
         
        
 <a href='<?php echo $tuhan3['link'];?>' target="_blank"><?php echo $tuhan3['link'];?></a>   
        
    
        
        
<div class="post_comment_count"> 



<div class="activity">





      
        
      <?php  
        
        $montobbo=$tuhan3['id'];
$hamim5 = mysql_query("SELECT * FROM post_comment where commentid='$montobbo'");	
	
	$numberOfRows = MYSQL_NUMROWS($hamim5);	
	
	echo '<img src="http://localhost/social/bin/access/images/icon/comment.PNG" alt="Feedback" height="16" width="16"> '.$numberOfRows.'     Feedback | ';	
        ?>
        
  
  <form action="http://localhost/social/addnew/nice.xml" enctype="multipart/form-data" method="post">

<input type="hidden" name="post_id" value="<?php echo $tuhan3['id'];?>">
<input type="hidden" name="hit_id" value="<?php echo $_SESSION['SESS_MEMBER_ID'] ;?>">
<div class="hits">
<button><img src="http://localhost/social/bin/access/images/icon/nice.PNG" height="16" width="16"></button>
</div>

</form>



 <?php      
 $result2 = mysql_query("SELECT * FROM thuaha WHERE post_id='". $tuhan3['id'] ."'"); 
  while($tuhan8 = mysql_fetch_array($result2))
								
								
							 { 
  $hadi=$tuhan8['hit_id'];
  
  if($hadi==$_SESSION['SESS_MEMBER_ID'])
		{		  
		
         echo '<div class="unlike"><a href=http://localhost/social/dislike/'.$tuhan8["id"] .'><img src="http://localhost/social/bin/access/images/icon/unhit.PNG" height="34" width="31"></a></div>'; 
		   
		}
		
		
		}
  
  ?>
  
        
        
        
        
  <?php      
 $result1 = mysql_query("SELECT * FROM thuaha WHERE post_id='". $tuhan3['id'] ."'");


if($tuhan7 = mysql_fetch_array($result1))
  {
  $numberOfRows = MYSQL_NUMROWS($result1);	
  $numberoflikes=$numberOfRows;
  $numberoflikes1=$numberOfRows-1;
 if  (($tuhan7['hit_id'])==($_SESSION['SESS_MEMBER_ID']) && ($numberoflikes1 > 0))
  {
  
  echo '<div class="you_hit_count"><font color="#FF0066"><b>You&nbsp;&&nbsp;' . $numberoflikes1 . '</b></font>&nbsp;People&nbsp;hit&nbsp;this </div> ';
  }
  elseif (($tuhan7['hit_id'])==($_SESSION['SESS_MEMBER_ID'])&& ($numberoflikes1 == 0))
  {
  echo '<div class="you_hit_count"><font color="#FF0066"><b>You</b></font>&nbsp;hit&nbsp;this</div>';
  }
  elseif ($numberoflikes > 0)
  {
  echo '<div class="hit_count"><font color="#CC3366"><b>' . $numberoflikes .'</b></font>&nbsp;people&nbsp;hit&nbsp;this</div>';
  }
 
  
  }?>       
        
      
     </div>
       </div> 
        
       <div align="center">
        <a title="View full story" href="http://localhost/social/view/story/<?php echo $tuhan3['id'];?>"><img src="http://localhost/social/bin/access/images/icon/full.PNG" height="18px" width="18px" alt="View"><font color="#FF0066">View full story</font></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://localhost/social/view/hit/story/<?php echo $tuhan3['id'];?>"><img src="http://localhost/social/bin/access/images/icon/nice.PNG" height="18px" width="18px" alt="Hit"><font color="#FF0066">View all Hit's</font></a>  
         
         
       
         
         </div><hr/> 
      
      
             <form action="http://localhost/social/addnew/comment.xml" method="post" enctype="multipart/form-data">
        
        <form action="http://localhost/social/addnew/comment.xml" method="post" enctype="multipart/form-data">
        
        
        <input name="commentid" type="hidden" value="<?php echo $tuhan3['id'];?>">
        <input name="commentname" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>">
        
       <input name="poster" type="hidden" value="<?php echo $tuhan4["user"];?>">
        
        <div class="wrap-input100 validate-input" data-validate = "Type something">
						<input class="input100" type="text" name="comment">
						<span class="focus-input100" data-placeholder="Post your Feedback"></span>
					</div>
                    <div class="container-login100-form-btn">
                    <input type="file" name="file" class="lev_comment form-control">
						<button class="btn"><div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
								<font color="#FFFFFF"><b>Leave A Feedback</b></font>
							
						</div>
                        </button></div>
        
        </form>
        
        
        <hr/> 
        
        
        
        
        
        
      <div class="comment_area">
        
        <?php
		 $hamim6 = mysql_query("SELECT * FROM post_comment where commentid='$montobbo' ORDER BY RAND() LIMIT 6");
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
            <?php echo'<a href=http://localhost/social/user/'.$tuhan6["user"] .'><font size="3px">'.$tuhan6['fname'].' '.$tuhan6['lname'].'</font>&nbsp;'.$tuhan6['verified'].'</a>';?><br/>
            
            
            <?php
			$tuaha=$tuhan5['id']; 
     $hadi=$tuhan5['commentname']; 					 
	if(($hadi==$_SESSION['SESS_MEMBER_ID']) && ($tuaha==$tuhan5['id']))
		{	
		echo '<span class="text-muted  comment_time pull-right"><a title="Delete Feedback" href=http://localhost/social/post/delete/feedback/'.$tuhan5["id"] .'><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a>&nbsp;
		<a title="Edit Feedback" href=http://localhost/social/post/edit/feedback/'.$tuhan5["id"] .'><img src="http://localhost/social/bin/access/images/icon/edit.PNG" alt="" height="18" width="18"></a></span>';
		}
		else{
			}?>
            
            
            
           </div>
            <div class="comment_time">
           <img src="http://localhost/social/bin/access/images/icon/time.PNG" alt="Time" height="16" width="16"> 
			
			
			<?php echo $tuhan5['comment_time'];?> 
			</div>
			
			
            
            <div class="comment_content" style="line-height: 1.4;">
            <?php $limita=$tuhan5['comment'];
      
      if($limita>(substr($limita,0,600)))
		{
      echo substr($limita,0,600);
    echo '<a href="http://localhost/social/view/story/'.$tuhan3['id'].'"><font color="#CC3366">...Continue</font></a>';
        }
                                   else{
                                       echo $limita;
                                   }
     
      
      ?> 
            </div>
            
            
        
          
          <div align="center"> 
          
          
          
    <?php 
  						 
	$hadi=$tuhan5['type']; 					 
	if($hadi=='image/jpeg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].' "><br/><br/>';
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='image/jpg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].' "><br/><br/>';
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='image/png')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].' "><br/><br/>';
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='image/gif')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].' "><br/><br/>';
		}
						  
						  
						  
						  
	$hadi=$tuhan5['type']; 					 
	if($hadi=='audio/mp3')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</audio><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='audio/aac')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</audio><br/><br/>';
		
		}	
		$hadi=$tuhan5['type']; 					 
	if($hadi=='audio/wma')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</audio><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='audio/amr')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</audio><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='audio/ogg')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</audio><br/><br/>';
		
		}						  
						  
						  
						  
						  
						  
				$hadi=$tuhan5['type']; 					 
	if($hadi=='video/mp4')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/3gp')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/avi')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}

		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/mov')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		$hadi=$tuhan5['type']; 					 
	if($hadi=='video/webm')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/comment/'.$tuhan5['images'].'"  >';
		
		echo '</video><br/><br/>';
		
		}
		
		?> 
          
                 </div>
     <div align="right" style="margin-top:-17px">
         
         <a href="http://localhost/social/feedback/replay/<?php echo $tuhan5['id'];?>"><font color="#D320F3">
          
          
          
           <?php  
        
        $montobbo=$tuhan5['id'];
$hamim5 = mysql_query("SELECT * FROM post_sub_comment where commentid='$montobbo'");	
	
	$numberOfRows = MYSQL_NUMROWS($hamim5);	
	
	echo $numberOfRows;	
        ?>&nbsp;Answer</font></a> 
          </div>
          
<hr/>         
          
            
          
     
        
        
     

    
     
     
     
 <?php 
						}
			 }
			 
			 ?>
               </div> 
			 </div>
			 <?php
								  }
								  
								  }
 ?>    
 
  <?php
}
 
?>  