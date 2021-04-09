<div class="row">
      
      <div class="col-md-4 col-sm-4">
      
      <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" data-toggle="modal" data-target="#myModal">
							<img src="http://localhost/social/bin/access/images/icon/board.png" height="30" width="30">&nbsp;&nbsp;Create board
							</button></div></div>
                            
                            
                            
                            
                            
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create a board</h4>
        </div>
        <div class="modal-body">
          
          
          
          
<form action="http://localhost/social/addnew/board.xml" method="post" enctype="multipart/form-data">
          
                   <input name="from" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
			  	<input name="to" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
			  	<input name="pakadtoan" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>">
						
<div class="wrap-input100 validate-input" data-validate = "Required">         
							Share with...	<input type="radio" name="share" value="tracker" checked>Tracker 
                                <input type="radio" name="share" value="public">Public
                
					</div> 							
								
									



<div class="wrap-input100 validate-input"> 
									<input type="file" class="input100" name="file" >
					<span class="focus-input100" data-placeholder="Add Photos, Video or Audio (Max size  2 mb)"></span>
					</div>
						
							
							
                            
                            
                            
                            
                            
                            
                   <div class="wrap-input100 validate-input" data-validate = "Required">         
								<textarea class="input100" name="content" placeholder=""></textarea>
                 <span class="focus-input100" data-placeholder="Your text (You can use startags like *yourstartags or *your_star_tags)"></span>
					</div>               
                                





                                
                                
 <div class="wrap-input100 validate-input">                               
 <select class="input100" name="feeling">


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
 <span class="focus-input100" data-placeholder="Feeling..."></span>
          </div>                                
                                
                                
                                
                                

<div class="wrap-input100 validate-input">
 <input type="text" name="location" class="input100" placeholder="">
<span class="focus-input100" data-placeholder="Tag location."></span>
          </div> 



<div class="wrap-input100 validate-input">
   <input type="text" name="tag" class="input100" placeholder="">
    <span class="focus-input100" data-placeholder="Tag your friend name"></span>
          </div> 



<div class="wrap-input100 validate-input">
   <input type="text" name="link" class="input100" placeholder="">
   <span class="focus-input100" data-placeholder="Add Hyper Link. Like: https://www.yokoll.com"></span>
          </div>                       
                                
          
          
          
        </div>
        <div class="modal-footer">
       <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="posted">
								Post
							</button>
						</div>
					</div>
                            </form>	
        
          
          
          
          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" data-dismiss="modal">
								Cancel
							</button>
						</div>
					</div>
          
          
        </div>
      </div>
      
    </div>
  </div>                       
                            
      </div>
      
      
      
      

 
  
    
      
      
      
      
      <div class="col-md-4 col-sm-4">
      
       <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
					
                    <div class="login100-form-bgbtn"></div>	
         <button class="login100-form-btn" data-toggle="modal" data-target="#myModal2"> <img src="http://localhost/social/bin/access/images/icon/job.png" height="30" width="30">&nbsp;&nbsp;Post job</button>
         </div></div>
         
         
         
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Post a job</h4>
        </div>
        <div class="modal-body">
          
          <form>
          
          
          
          
          
          
        </div>
        <div class="modal-footer">
       <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								Submit
							</button>
						</div>
					</div>
                            </form>	
        
          
          
          
          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" data-dismiss="modal">
								Cancel
							</button>
						</div>
					</div>
        </div>
      </div>
      
    </div>
  </div> 
      
      </div>
      
    
    
   
      
      
      
      
      
      <div class="col-md-4 col-sm-4">
      
       <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn"> 
         
         <div class="login100-form-bgbtn"></div> 
            <button class="login100-form-btn" data-toggle="modal" data-target="#myModal3"><img src="http://localhost/social/bin/access/images/icon/shopping.png" height="30" width="30">&nbsp;&nbsp;Sell product</button>
              </div>
					</div> 
             
 
 
 
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sell your product on Yokoll  Shop</h4>
        </div>
        <div class="modal-body">
          
          
          


<form action="http://localhost/social/addnew/shop.xml" method="post" enctype="multipart/form-data">         
    
    
    
    
 <?php
			   			
					$dalia=$_SESSION['SESS_MEMBER_ID'];
								
								$hamim2 = mysql_query("SELECT * FROM members where user='$dalia'");
								
								
								while($tuhan2 = mysql_fetch_array($hamim2))
								  { ?>   
    
 <input name="member_id" type="hidden" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>"> 
 
 
 
 
<input name="country" type="hidden" value="<?php echo $tuhan2['country'];?>"> 
 
 
 
 
 
 <input name="product_poster" type="hidden" value="<?php echo $tuhan2['fname']. $tuhan2['lname']; ?>"> 
 
 
 
 <div class="wrap-input100 validate-input"> 
<input type="text" name="email" class="input100" value="<?php echo $tuhan2['email']; ?>" required>  
 <span class="focus-input100" data-placeholder="<?php echo $tuhan2['email']; ?>"></span>
					</div>
 
 <div class="wrap-input100 validate-input"> 
<input type="text" name="phone" placeholder="Your Phone Number" class="input100" value="<?php echo $tuhan2['contact']; ?>">   
  			<span class="focus-input100" data-placeholder="<?php echo $tuhan2['contact']; ?>"></span>
					</div>
                    
                    
 <?php 
								  }
								  ?>
                                  
                                  
                <div class="wrap-input100 validate-input">                   
 <input type="text" name="product_name" class="input100" placeholder="" required> 
 <span class="focus-input100" data-placeholder="Your Product name/Title"></span></div>
 
 <div class="wrap-input100 validate-input">
 <input type="file" name="file" class="input100" required>
 <span class="focus-input100" data-placeholder="Product picture or video (Max size 2 MB)"></span></div>
 
 
 <div class="wrap-input100 validate-input">
 <textarea class="input100" name="content" required></textarea> 
  <span class="focus-input100" data-placeholder="Details"></span></div>
 
 
 <div class="wrap-input100 validate-input"> 
<input type="number" name="price" class="input100" placeholder="" value="" required> 
<span class="focus-input100" data-placeholder="Product Price $(0.00)"></span> </div>

<div class="wrap-input100 validate-input"> 
<select class="input100" name="catagory">

<option value="Other ">Other</option>
<option value="Men Product">Men Product</option>
<option value="Women Product">Women Product</option>
<option value="Kids Product">Kids Product</option>
<option value="Electronics Mobile & Computer">Electronics Mobile & Computer</option>
<option value="Collectibles & Art">Collectibles & Art</option>
<option value="Home & Garden">Home & Garden</option>
<option value="Motors">Motors</option>
<option value="Sporting Goods">Sporting Goods</option>
<option value="Application & Software">Application & Software</option>

</select>
<span class="focus-input100" data-placeholder="Product Category"></span></div>

<div class="wrap-input100 validate-input">
<input type="text" name="product_name_link" class="input100" placeholder="">
<span class="focus-input100" data-placeholder="See More Link"></span></div>

<div class="wrap-input100 validate-input">
<input type="text" name="button_link" class="input100" placeholder="">
<span class="focus-input100" data-placeholder="Buy Product Link"></span></div>

<div class="wrap-input100 validate-input">
<input type="text" name="tag" class="input100" placeholder="">
<span class="focus-input100" data-placeholder="Tag"></span></div>



       
          
          
          
          
          
      
        <div class="modal-footer">
       <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="btn-upload">
								Sell
							</button>
						</div>
					</div>
                            </form>	
        
          <br/>
 <?php
	if(isset($_GET['success']))
	{
		?>
        <label>Board Uploaded Successfully...</label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While Board Uploading!</label>
        <?php
	}
	
	?> 
          
          
          <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" data-dismiss="modal">
								Cancel
							</button>
						</div>
					</div>
        </div>
      </div>
      
    </div>
  </div>
  
 
 
 
 
 
             
             
      </div>       
              
              </div>
              <div class="col-md-3"></div>
          </div>