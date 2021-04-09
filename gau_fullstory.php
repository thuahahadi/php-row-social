<?php include 'bin/access/social/header.php';?> 
<title>View Full story</title>




  <?php
			  include('hsd/dibba_laga.php');		
					$commentid=$_GET['id'];
					$rrt='read';
					$th=$_SESSION['SESS_MEMBER_ID'];
								$update=mysql_query("UPDATE post_comment SET thuaha='$rrt' WHERE commentid='$commentid' and poster='$th'");
							
								
				
?>





<div class="container">
<div class="row">
<div class="col-md-12">
 <?php
			   	include('hsd/dibba_laga.php');
     $public=$_GET['id'];
							$hamim3 = mysql_query("SELECT * FROM members_post Where id='$public'");
								
								
								while($tuhan3 = mysql_fetch_array($hamim3))
								
								
							 { 	
								$kigur_post=$tuhan3['name'];	
	
		   $hamim4 = mysql_query("SELECT * FROM members where user='$kigur_post'");
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
     
   
     
     
     <div align="center">
     
     
     
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
         
         </div><br/>
        
  <div class="post_content" style="line-height: 1.4;">
 
  <?php echo $tuhan3['content'];?> 
    
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
         
         
         
         
    






<?php  
    include('hsd/dibba_laga.php');
    $post_id = $tuhan3['id']; 
?>



    <div class="rate">
        <div id="1" class="btn-1 rate-btn"></div>
        <div id="2" class="btn-2 rate-btn"></div>
        <div id="3" class="btn-3 rate-btn"></div>
        <div id="4" class="btn-4 rate-btn"></div>
        <div id="5" class="btn-5 rate-btn"></div>
    </div>
<br>





    <div class="box-result">
        <?php
        include('hsd/dibba_laga.php');
            $query = mysql_query("SELECT * FROM gau_foststar where id_post='". $tuhan3['id'] ."'"); 
                while($data = mysql_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }


        ?>



    <div class="result-container">
        <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of 5, <?php echo $rate_times; ?> viewer review(s)</p>
    </div>







<script>
$(function(){ 
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
      var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });
                           
   $('.rate-btn').click(function(){    
      var therate = $(this).attr('id');
      var dataRate = 'act=rate&post_id=<?php echo $tuhan3['id']; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "http://localhost/social/gau_strajax.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>



















         
         
  <div align="center">
      <a href="http://localhost/social/view/hit/story/<?php echo $tuhan3['id'];?>"><font color="#FF0066">View who people hit's this</font></a>
         
         
       
         
         </div><hr/>       
         
         
         
         
         
         
         
         
         
        
        
        <form action="http://localhost/social/addnew/comment.xml" method="post" enctype="multipart/form-data">
        
        
        <input name="commentid" type="hidden" value="<?php echo $tuhan3['id'];?>">
        <input name="commentname" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>">
        
       
        
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
		 $hamim6 = mysql_query("SELECT * FROM post_comment where commentid='$montobbo'");
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
		echo '<span class="text-muted  comment_time pull-right"><a title="Delete Feedback" href=http://localhost/social/post/delete/feedback/'.$tuhan5["id"] .'><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a>&nbsp;|&nbsp;
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
            <?php echo $tuhan5['comment'];?>
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
    </div>
</div>
</div>


<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/index/footer.php';?> 