<?php include 'bin/access/shop/header.php';?> 
<title>yokoll | Shop</title>

<div class="container">

<div class="row">
 <div class="col-md-12">
     
     
     
  <div class="alert alert-dismissible" role="alert">   
     <div class="right_box_main">
         <div class="right_box">
     gdeygdyegdyegdeydgyedgeydgey
             <div align="right">
             <button type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><img src="http://localhost/social/bin/access/images/icon/cross.PNG" alt="Time" height="16" width="16"></span></button>
                 </div>
         </div>
     </div>
     </div>
     
     
</div>   
    
</div>

</div>



<div class="container-fluid">

<div class="row">

 <div class="col-md-3">
    
    
<div class="right_box">    
 <div class="alert oj alert-dismissible ro sp" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <?php
	$current=date("d/m/y");
	$timeset=strtotime("+6 hour");
	$time = date ("H");
	   
			   echo '<font color="#000000">Hello!</font>';
				
	if ($time < 12) {
	echo "<font color='#000000'> Good Morning</font> <img src='http://localhost/social/bin/access/images/icon/morning.png'>";
	}
	elseif ($time < 16){
	echo "<font color='#000000'> Good Afternoon</font> <img src='http://localhost/social/bin/access/images/icon/noon.png'>";
	}
	elseif ($time< 20){
	echo "<font color='#000000'> Good Evening</font> <img src='http://localhost/social/bin/access/images/icon/evening.png'>";
	}
	elseif ($time< 24){
	echo "<font color='#000000'> Good Night</font> <img src='http://localhost/social/bin/access/images/icon/night.png'>";
	}


?><font color="#000000"> Welcome to the Yokoll Shops Service. Are you interested in buy or sell any product?  If you want to sell your product in Yokoll shop, then you must have a Yokoll account.</font> 
    </div>   
    
   
    
    
    
    
    
<?php include 'bin/access/shop/country.php';?>            
            
            
            
            
            
            
            
            
            
         <h6 class="abd">Yokoll Shop (Category)</h6>
          <ul class="dc atd">
        
        
          </ul>
          
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
    
    </div>  
    
    
    
    
    
    
    
    
    
    

<div class="col-md-9">
  <div class="row">
    
<?php include 'bin/access/shop/all_product.php';?>
    
    
    </div>
   
</div>

</div>


<?php include 'bin/access/index/footer.php';?> 