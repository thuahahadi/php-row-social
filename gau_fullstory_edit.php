<?php include 'bin/access/social/header.php';?> 
<title>Edit Post</title>

<style>



</style>






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
		echo '<span class="delete_post pull-right"><a title="Delete Post" href=http://localhost/social/post/delete/'.$tuhan3["id"] .'><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a></span>';
		}
		else{
			}?>    
     
     <!---------------------------------------------------------------------------------------------------------------------------------->
     
     <form action="http://localhost/social/update/board.xml" method="post">
     
     <input type="hidden" name="post_id" value="<?php echo $_GET['id'];?>">
     
     <img src="http://localhost/social/bin/access/images/icon/feeling.PNG" alt="" height="16" width="16"> Feeling: 
         
         
         <select class="input100" name="feeling">


<option value="<?php echo $tuhan3['feeling'];?>"><?php echo $tuhan3['feeling'];?></option>
<option value=" feeling accomplished ">feeling accomplished</option>
<option value=" feeling aggravated ">feeling aggravated</option>
<option value=" feeling alive ">feeling alive</option>
<option value=" feeling alone ">feeling alone</option>
<option value=" feeling amazed ">feeling amazed</option>
<option value=" feeling amazing ">feeling amazing</option>
<option value=" feeling amused ">feeling amused</option>
<option value=" feeling angry ">feeling angry</option>
<option value=" feeling annoyed ">feeling annoyed</option>
<option value=" feeling anxious ">feeling anxious</option>
<option value=" feeling awesome ">feeling awesome</option>
<option value=" feeling awful ">feeling awful</option>
<option value=" feeling bad</">feeling bad</option>
<option value=" feeling beautiful ">feeling beautiful</option>
<option value=" feeling better ">feeling better</option>
<option value=" feeling blah ">feeling blah</option>
<option value=" feeling blessed ">feeling blessed</option>
<option value=" feeling bored ">feeling bored</option>
<option value=" feeling broken ">feeling broken</option>
<option value=" feeling chill ">feeling chill</option>
<option value=" feeling cold ">feeling cold</option>
<option value=" feeling comfortable ">feeling comfortable</option>
<option value=" feeling confident ">feeling confident</option>
<option value=" feeling confused ">feeling confused</option>
<option value=" feeling content ">feeling content</option>
<option value=" feeling cool ">feeling cool</option>
<option value=" feeling crappy ">feeling crappy</option>
<option value=" feeling crazy ">feeling crazy</option>
<option value=" feeling curious ">feeling curious</option>
<option value=" feeling depressed ">feeling depressed</option>
<option value=" feeling determined ">feeling determined</option>
<option value=" feeling disappointed ">feeling disappointed</option>
<option value=" feeling down ">feeling down</option>
<option value=" feeling drained ">feeling drained</option>
<option value=" feeling drunk ">feeling drunk</option>
<option value=" feeling ecstatic ">feeling ecstatic</option>
<option value=" feeling emotional ">feeling emotional</option>
<option value=" feeling energized ">feeling energized</option>
<option value=" feeling excited ">feeling excited</option>
<option value=" feeling exhausted ">feeling exhausted</option>
<option value=" feeling fantastic ">feeling fantastic</option>
<option value=" feeling fat ">feeling fat</option>
<option value=" feeling free ">feeling free</option>
<option value=" feeling fresh ">feeling fresh</option>
<option value=" feeling frustrated ">feeling frustrated</option>
<option value=" feeling full ">feeling full</option>
<option value=" feeling funny ">feeling funny</option>
<option value=" feeling good ">feeling good</option>
<option value=" feeling grateful ">feeling grateful</option>
<option value=" feeling great ">feeling great</option>
<option value=" feeling guilty ">feeling guilty</option>
<option value=" feeling happy ">feeling happy</option>
<option value=" feeling heartbroken ">feeling heartbroken</option>
<option value=" feeling helpless ">feeling helpless</option>
<option value=" feeling hopeful ">feeling hopeful</option>
<option value=" feeling hopeless ">feeling hopeless</option>
<option value=" feeling horrible ">feeling horrible</option>
<option value=" feeling hot ">feeling hot</option>
<option value=" feeling hungry ">feeling hungry</option>
<option value=" feeling hurt ">feeling hurt</option>
<option value=" feeling ill ">feeling ill</option>
<option value=" feeling impatient ">feeling impatient</option>
<option value=" feeling in love ">feeling in love</option>
<option value=" feeling incomplete ">feeling incomplete</option>
<option value=" feeling inspired ">feeling inspired</option>
<option value=" feeling irritated ">feeling irritated</option>
<option value=" feeling lazy ">feeling lazy</option>
<option value=" feeling lonely ">feeling lonely</option>
<option value=" feeling lost ">feeling lost</option>
<option value=" feeling loved ">feeling loved</option>
<option value=" feeling lovely ">feeling lovely</option>
<option value=" feeling lucky ">feeling lucky</option>
<option value=" feeling mad ">feeling mad</option>
<option value=" feeling miserable ">feeling miserable</option>
<option value=" feeling motivated ">feeling motivated</option>
<option value=" feeling nervous ">feeling nervous</option>
<option value=" feeling nostalgic ">feeling nostalgic</option>
<option value=" feeling OK ">feeling OK</option>
<option value=" feeling old ">feeling old</option>
<option value=" feeling optimistic ">feeling optimistic</option>
<option value=" feeling overwhelmed ">feeling overwhelmed</option>
<option value=" feeling pained ">feeling pained</option>
<option value=" feeling pissed ">feeling pissed</option>
<option value=" feeling pissed off ">feeling pissed off</option>
<option value=" feeling positive ">feeling positive</option>
<option value=" feeling pretty ">feeling pretty</option>
<option value=" feeling proud ">feeling proud</option>
<option value=" feeling pumped ">feeling pumped</option>
<option value=" feeling ready<">feeling ready</option>
<option value=" feeling refreshed ">feeling refreshed</option>
<option value=" feeling relaxed ">feeling relaxed</option>
<option value=" feeling relieved ">feeling relieved</option>
<option value=" feeling rough ">feeling rough</option>
<option value=" feeling sad ">feeling sad</option>
<option value=" feeling safe ">feeling safe</option>
<option value=" feeling satisfied ">feeling satisfied</option>
<option value=" feeling scared ">feeling scared</option>
<option value=" feeling shocked ">feeling shocked</option>
<option value=" feeling sick ">feeling sick</option>
<option value=" feeling silly ">feeling silly</option>
<option value=" feeling sleepy ">feeling sleepy</option>
<option value=" feeling sore ">feeling sore</option>
<option value=" feeling sorry ">feeling sorry</option>
<option value=" feeling special ">feeling special</option>
<option value=" feeling stressed ">feeling stressed</option>
<option value=" feeling strong ">feeling strong</option>
<option value=" feeling stupid ">feeling stupid</option>
<option value=" feeling super ">feeling super</option>
<option value=" feeling surprised ">feeling surprised</option>
<option value=" feeling terrible ">feeling terrible</option>
<option value=" feeling thankful ">feeling thankful</option>
<option value=" feeling tired ">feeling tired</option>
<option value=" feeling uncomfortable ">feeling uncomfortable</option>
<option value=" feeling upset ">feeling upset</option>
<option value=" feeling weak ">feeling weak</option>
<option value=" feeling weird ">feeling weird</option>
<option value=" feeling well ">feeling well</option>
<option value=" feeling wonderful ">feeling wonderful</option>
<option value=" feeling worried ">feeling worried</option>
</select>  
     
     
     <img src="http://localhost/social/bin/access/images/icon/with.PNG" alt="With: " height="16" width="16"> With: <input placeholder="Tag your friend" type="text" name="tag" value="<?php echo $tuhan3['tag'];?>">
     
     
     <img src="http://localhost/social/bin/access/images/icon/at.PNG" alt="At: " height="16" width="16"> At:  <input type="text" name="location" value="<?php echo $tuhan3['location'];?>" placeholder="Tag Location">
     
     
     
   <br/><br/>
         Share with :
                  <select class="input100" name="share">


<option value="<?php echo $tuhan3['share'];?>"><?php echo $tuhan3['share'];?></option>
<option value="public">public</option>
<option value="tracker">tracker</option>
         </select>
     
     
     
     

     
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
        
  <div class="post_content" >
 
 <textarea style="height:100%; width:100%" name="content" placeholder="write something..."> <?php echo $tuhan3['content'];?> </textarea>
    
    </div>            
     
         
    <br/>   
 <input type="link" style="width:100%" name="link" value="<?php echo $tuhan3['link'];?>" placeholder="you can insert any valid web link">  
        
    <br/> <br/>
        <button class="btn btn-info" name="submit" type="submit">Update Board</button>

         
  </form>       
         
         
         
         
         

         
         
         
         
         
         
         
         
         
        
        

        
        
        
        
   
    
    
    
    
    
    
    <?php 
                                  }
                            
                             }
    ?>
         <br/><br/>
    </div>
</div>
</div>



<?php include 'bin/access/index/footer.php';?> 