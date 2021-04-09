
<?php include 'bin/access/social/header.php';?> 



<?php 

$_SESSION['search']= $_GET['query'];


?>


<title>Search for "<?php echo $_SESSION['search'];?>"</title>





<div class="container">
    <div align="center">

    <font class="name-font">Search for "<?php echo $_SESSION['search'];?>"</font>

        </div><hr/>
<nav class="navbar">
  
   
    <ul class="nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Social
        </a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/social/search/post/location/?query=<?php echo $_SESSION['search'];?>"><?php echo $_SESSION['search'];?> Tracker</a></li>
          <li><a href="http://localhost/social/search/post/location/<?php echo $_SESSION['search'];?>">Tag Location</a></li>
          <li><a href="#">With</a></li>
            <li><a href="http://localhost/social/startags/<?php echo $_SESSION['search'];?>">"*<?php echo $_SESSION['search'];?>" (startags)</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">All "<?php echo $_SESSION['search'];?>"</a></li>
          <li><a href="#">Country</a></li>
          <li><a href="#">"<?php echo $_SESSION['search'];?>" Tag</a></li>
        </ul>
      </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">All "<?php echo $_SESSION['search'];?>"</a></li>
          <li><a href="#">County</a></li>
          <li><a href="#">"<?php echo $_SESSION['search'];?>" Tag</a></li>
        </ul>
      </li>
      <li><a href="#">InfoBoard</a></li>
    </ul>
  
</nav>



    
    
    
    
    
    
    
    
  <div class="row">
      
      
       <div class="col-md-2"></div>
      
      
              <div class="col-md-8">
              
              <div class="tracker_list">
              
              
            
              
             <div class="Right_h" align="center"><b>Search Result: Trackers-"<?php echo $_SESSION['search'];?>"</b></div><hr/>
             
             
             
             
          <?php
			   include('hsd/dibba_laga.php');
                  $q=$_SESSION['search'];
			   $hamim8 = mysql_query("SELECT * FROM members where search_name like '%$q%' or fname like '%$q%' or lname like '%$q%' or user like '%$q%' or email like '%$q%' or contact like '%$q%' or sub_email like '%$q%' order by id");


while($tuhan9 = mysql_fetch_array($hamim8))
  {
	  ?>
	 

<img class="img-circle" src="http://localhost/social/<?php echo $tuhan9["profilepic"] ;?>" height="40px" width="40px">
          <div class="right_user">
        <strong><a href="http://localhost/social/user/<?php echo $tuhan9["user"];?>"><?php echo $tuhan9['fname'] . '&nbsp;'.$tuhan9['lname'] .'&nbsp;'.$tuhan9['verified'];?></a></strong></div>
        <div class="right_info">
        <font color="#27cefd"><?php echo $tuhan9["gender"];?></font>&nbsp;|&nbsp;<font color="#b621ff"><?php echo $tuhan9["country"];?></font>
        </div>
        
         <?php
					
					$commentid=$tuhan9["user"];
					$rrr=$_SESSION['SESS_MEMBER_ID'];
					
								$qry="SELECT * FROM friends WHERE addedby = '$rrr' AND requested = '$commentid' AND status='accepted'";
						$result=mysql_query($qry);
						//Check whether the query was successful or not
						
							if(mysql_num_rows($result) > 0) {?>
								
							<?php	
							}else {
								?>
                                
                                
                                
                                       

                                
           <div align="right">
            <a href="http://localhost/social/tracker/list/addnew/<?php echo $tuhan9["user"];?>" title="Click to track this person">
            
						
						
							Track
							
                            </a>
                            </div>	
                           
                              <?php
							}
						?>  				
				   
        
          
        
		<?php
				  }
				  ?>     
              <hr/>
             
             
             
              
              </div>
              
              </div>   
    
    
     <div class="col-md-2"></div>
    
    </div>
    
    
    
    
    
    
    
    
    
    

</div>







<?php include 'bin/access/index/footer.php';?> 