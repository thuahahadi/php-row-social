<?php
	require_once('hsd/surene_dhak.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
  <link rel="icon" href="http://localhost/social/bin/access/images/icon/icon.PNG" type="image" />  
    
    
    
    
    
    
    
    
    
<link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/yokoll.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/all.css">
    
   <link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/star.css"> 
	<link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/chat-aria.css">
	

	<link rel="stylesheet" type="text/css" href="http://localhost/social/bin/access/css/main.css">
    
    
    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    
    
    
    
    
    
    
    
<?php
setOnLine();

function setOnLine(){
include('hsd/dibba_laga.php');
	$a = $_SESSION['SESS_MEMBER_ID'] ;
//echo $a;

 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $time = date("Y-m-d H:i:s");
//echo $time;
$sql = ("UPDATE members SET real_time = '$time' WHERE user = '$a'")or die("hẹo" . mysql_error());
$query = mysql_query($sql);

}





?>     
    
    
    
    
    
    
    
    
    
    
    
    

</head>
<body>

<br/><br/><br/><br/><br/><br/>









<div class="navbar-main navbar-primary navbar-fixed-top" role="navigation">
     
        



 <nav class="navbar navbar-expand-lg navbar fixed-top">
 
      <div class="container-fluid fild">
      
        <a class="navbar-brand" href="#" title="yokoll">
          <img src="http://localhost/social/bin/access/images/logo/yokoll.png" width="80" height="30" alt="yokoll">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <img src="http://localhost/social/bin/access/images/icon/menu.png" alt="|||"  width="45" height="45">
            
            
            
        </button>
		<div class="topnav-right">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link space" href="http://localhost/social/home/" title="Home">
 <img src="http://localhost/social/bin/access/images/icon/menu/home.PNG" alt="Home" height="27" width="27">               
              </a>
            </li>
             <li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/user/<?php echo $_SESSION['SESS_MEMBER_ID'];?>" title="Profile" ><img src="http://localhost/social/bin/access/images/icon/menu/profile.PNG" alt="Profile" height="27" width="27"></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/view/all/track/request/" title="Tracker Request" ><img src="http://localhost/social/bin/access/images/icon/menu/tracker.PNG" alt="Tracker Request" height="27" width="27">&nbsp;
        
        <font id="tracker-number"></font>
        
      
        
        <script>
    
        $(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'http://localhost/social/gau_header_tracker.php',
      success: function(data){
        $('#tracker-number').html(data);
      }
    });

  },1000);

  
});
    
    </script>
        
        
        
        </a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/messages/" title="Unread Messages" ><img src="http://localhost/social/bin/access/images/icon/menu/message.PNG" alt="Unread Message" height="27" width="27">&nbsp;
            <font id="chat-number"></font>
           <script>
    
        $(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'http://localhost/social/gau_header_message.php',
      success: function(data){
        $('#chat-number').html(data);
      }
    });

  },1000);

  
});
    
    </script>
           </a>
      </li>
      
      
      
           <li class="nav-item">
        <a class="nav-link space" target="_blank" href="nboard/" title="Yokoll InfoBoard" ><img src="http://localhost/social/bin/access/images/icon/menu/infoboard.PNG" alt="InfoBoard" height="27" width="27"></a>
      </li>
       <li class="nav-item">
        <a class="nav-link space" href="job/" title="Yokoll Job" target="_blank"><img src="http://localhost/social/bin/access/images/icon/menu/job.PNG" alt="Career" height="27" width="27"></a>
      </li>
		<li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/shop/" title="Yokoll Shop" target="_blank"><img src="http://localhost/social/bin/access/images/icon/menu/shop.PNG" alt="Shop" height="27" width="27"></a>
      </li>
      
      
          <li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/notified/" title="Notifications" ><img src="http://localhost/social/bin/access/images/icon/menu/notification.PNG" alt="Notifications" height="24" width="24">
              
            <font id="notification-number"></font>  
              
             
              
              
              
       <script>
    
        $(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'http://localhost/social/gau_header_notification.php',
      success: function(data){
        $('#notification-number').html(data);
      }
    });

  },1000);

  
});
    
    </script>       
              
              
              
              </a>
      </li>     
              
              
              
       <li class="nav-item">
        <a class="nav-link space" href="http://localhost/social/" title="Login Out" ><img src="http://localhost/social/bin/access/images/icon/menu/logout.PNG" alt="Log Out" height="27" width="27"></a>
      </li>
			
          </ul>
          
        </div>
      </div>
	  
      <div align="right" style="margin-top:-15px;" class="container-login100-form-btn">
						<form action="http://localhost/social/search/search/" method="GET"><input class="input100 searchbar" type="text" name="query" value="Search..." placeholder=" Search...">
                        <span class="focus-input100" data-placeholder=""></span>
                        </form>
						
						</div>
    </nav>

</div>





		

      </div>
	  
    

 <div class="st-container">
 