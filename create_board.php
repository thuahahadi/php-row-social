
  
  
  <div align="center" style="padding:8px 8px 8px 8px;">
 
<a href="http://localhost/yokoll/make_shop_post.php" rel="facebox"><b>Sell your product on yokoll Shop</b></a>


<a href="http://localhost/yokoll/make_career_post.php" rel="facebox"><b>Make a board on yokoll Career</b></a>




<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
 <link href="http://localhost/social/bin/access/css/post-style.css" rel="stylesheet">
	
    
    
    

<?php

if(isset($_POST['btn-upload']))
{   

	$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$pakadtoan=$_POST['pakadtoan'];

		$feeling=$_POST['feeling'];
$location=$_POST['location'];
$tag=$_POST['tag'];
$link=$_POST['link'];

 
	$file = rand(100000,10000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="file/member/uploads/";
	
	// new file size in KB
	$new_size = $file_size/230024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	move_uploaded_file($file_loc,$folder.$final_file);
	
		$sql="INSERT INTO members_post(post_id, content, name, pakadtoan, feeling, location, tag, link, file, type, size) VALUES('$to', '$content', '$from', '$pakadtoan', '$feeling', '$location', '$tag', '$link', '$final_file', '$file_type', '$new_size')";
		if (!mysql_query($sql))
  {
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='home.php?board_upload_success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='home.php?board_upload_success';
        </script>
		<?php
	}
}
?>
   
    
    
    
    		
		
			<!--left-content-->
			
			
					<div class="create-posts">
                   
		  <form action="" method="post" enctype="multipart/form-data">
          
                   <input name="from" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
			  	<input name="to" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
			  	<input name="pakadtoan" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
						<div class="c-header">
							<div class="c-h-inner">
								<ul>	
									




									<li><input type="file"  onchange="readURL(this);" style="display:none;" name="file" id="uploadFile"></li>
									<li><a href="#" id="uploadTrigger" name="file">Add Photos, Video or Audio (Max size  2 mb)</a></li>
									
								</ul>
							</div>
						</div>
						<div class="c-body">
							<div class="body-left">
								<div class="img-box">
									<?php
			   include('hsd/dibba_laga.php');			
					$commentid=$_SESSION['SESS_MEMBER_ID'];
								
								$result3 = mysql_query("SELECT * FROM members where user='$commentid'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  { 
			  
			  
			  		echo '<img src="'.$row3['profilepic'].'" height="30px" width="30px" style="border-width: 0px;">';
								  
								  }
				?>
									
								</div>
							</div>
							
                            
                            
                            
                            
                            
                            
                            
								<textarea class="text-type" name="content" placeholder="What's on your mind?"></textarea>
                                
                                
                                
                                
                                
 <select class="input_place form-control" id="subject" name="feeling">


<option></option>
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
                                
                                
                                
                                
                                
<div id="Location">

 <input type="text" name="location" class="input_place form-control" placeholder="Tag location.">
</div>
<div id="With">

   <input type="text" name="tag" class="input_place form-control" placeholder="Tag your frend name">
   
</div>

<div id="link">

   <input type="text" name="link" class="input_place form-control" placeholder="Add Hyper Link. e:n: https://www.yokoll.com">
   
</div>                                  
                                
                                
                                
                                
                                
                                
                                
                                
			</div>
							<div id="body-bottom">
							<img src="#"  id="preview"/>
							</div>
						</div>
			<div class="c-footer">
							<div class="right-box">
								<ul>
									
									<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Post
							</button>
						</div>
					</div>
								</ul>
							</div>
								
			</div>
						</div>
			
		  </form>	
													




 
  </div>
  
 
<script type="text/javascript">
						 //Image Preview Function
								$("#uploadTrigger").click(function(){
								   $("#uploadFile").click();
								});
						        function readURL(input) {
						            if (input.files && input.files[0]) {
						                var reader = new FileReader();

						                reader.onload = function (e) {
						                	$('#body-bottom').show();
						                    $('#preview').attr('src', e.target.result);
						                }

						                reader.readAsDataURL(input.files[0]);
						            }
						        }

						</script>