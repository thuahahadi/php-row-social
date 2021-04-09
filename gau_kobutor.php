<?php include 'bin/access/social/header.php';?>

<?php
include('hsd/dibba_laga.php');
$ida=$_GET['ida'];//my
$idb=$_GET['idb'];//friend

//echo $_GET['idb'];
$_SESSION['SESS_MY_ID']=$ida;
$_SESSION['SESS_UID_ID']=$idb;




$sql = "SELECT * from members where user = '{$ida}' ";
$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
$TenDem = $row['fname'];
$Ten    = $row['lname'];
}


$sql1 = "SELECT * from members where user = '{$idb}' ";
$result1 = mysql_query($sql1);

while ($row1 = mysql_fetch_assoc($result1)) {
$TenDem1 = $row1['lname'];
$Ten1    = $row1['fname'];
$tuaha    = $row1['profilepic'];
$hadi    = $row1['user'];
}

$TenPhong1=$ida.$idb;
$TenPhong2=$idb.$ida;

  function KiemTraTen($so1,$so2) {
  $sql = "SELECT * from box ";
  $result = mysql_query($sql);
  $a=0;
  
  while ($row = mysql_fetch_assoc($result)) {
        // echo $row['name'];

        if ($row['name'] == $so1) {

          $a=1;
          
        }
        else{
          if ($row['name'] == $so2) {
          $a=2;
          }
         
        }
      }
       
       return $a;
  
}

//echo $TenPhong1;
//echo $TenPhong2;

$concac = KiemTraTen($TenPhong1,$TenPhong2);
//echo $concac;

if ($concac == 1) {
 // echo " </br> had room with name room TenPhong1";
  $sql = "SELECT * from box where name = $TenPhong1 ";
  $result = mysql_query($sql);
  $row = mysql_fetch_assoc($result);
  $idPhong = $row['id'];
 // echo '<br/> id phòng'. $idPhong;

}
else if($concac == 2){
 // echo " </br> had room with name room TenPhong2";
  $sql = "SELECT * from box where name = $TenPhong2 ";
  $result = mysql_query($sql);
  $row = mysql_fetch_assoc($result);
  $idPhong = $row['id'];
//  echo '<br/> id phòng'. $idPhong;
}else{

 // echo "no room available. must create room";
    $sql = "INSERT INTO `box` (`id`, `idUser1`, `idUser2`, `name`) 
          VALUES (NULL,$ida , $idb, $TenPhong1)";
          $result = mysql_query($sql);
}

?>

<html >


  <title>Inbox | <?php echo $Ten1 .' '.  $TenDem1; ?></title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="http://localhost/social/bin/access/css/style.css">

  
<style>


    .spinner {
        margin: 10px auto;
        width: 50px;
        height: 40px;
        text-align: center;
        font-size: 10px;
		
    }

    .spinner > div {
        background-color: #b327ff;
        height: 100%;
        width: 6px;
        display: inline-block;

        -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
        animation: sk-stretchdelay 1.2s infinite ease-in-out;
    }

    .spinner .rect2 {
        -webkit-animation-delay: -1.1s;
        animation-delay: -1.1s;
		background-color: #9648ff;
    }

    .spinner .rect3 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
		background-color: #7076fe;
    }

    .spinner .rect4 {
        -webkit-animation-delay: -0.9s;
        animation-delay: -0.9s;
		background-color: #43acfd;
    }

    .spinner .rect5 {
        -webkit-animation-delay: -0.8s;
        animation-delay: -0.8s;
		background-color: #22d2fd;
    }

    @-webkit-keyframes sk-stretchdelay {
        0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
        20% { -webkit-transform: scaleY(1.0) }
    }

    @keyframes  sk-stretchdelay {
        0%, 40%, 100% {
            transform: scaleY(0.4);
            -webkit-transform: scaleY(0.4);
        }  20% {
               transform: scaleY(1.0);
               -webkit-transform: scaleY(1.0);
           }
    }



  
</style>


    
    
    
    
    
    <!-- <?php
			  include('hsd/dibba_laga.php');		
					$commentid=$idb;
					$rrt='read';
					$th=$_SESSION['SESS_MEMBER_ID'];
								$update=mysql_query("UPDATE mess SET status='$rrt' WHERE idGui='$commentid' and idPhong='$th'");
							
								
				
?> -->
    
    
    
    
    
    
    
    
    

    <div class="container-fluid">
        
        
       <div class="row"> 
        
    <div class="col-md-3"></div>
           
           
           <div class="col-md-6">
    
    <div class="chat" id = "messages">





      <div class="chat-header clearfix">
        <img src="http://localhost/social/<?php echo $tuaha;?>" height="50" width="50"  class="img-circle"/>
        
        <div class="chat-about">
          <div class="chat-with">Conversation with <a href="http://localhost/social/user/<?php echo $hadi;?>"><?php echo $Ten1 .' '.  $TenDem1; ?></a></div>
          
        </div>
       
      </div> <!-- end chat-header -->
      
      <div class="chat-history" id="chat-history">
        <ul>

<div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>

        </ul>
        
      </div> <!-- end chat-history -->
  
<?php
include('hsd/dibba_laga.php');
$_SESSION['idPhong']=$_GET['idb'];//get
$_SESSION['ida']=$ida;
$_SESSION['Ten']=$Ten;
$_SESSION['Ten1']=$Ten1;
        
        
        //echo $_SESSION['idPhong'];

if (isset($_POST["btn"])  && ($_POST["message-to-send"])!="") {

    $idNguoiGui = $ida;
    $messss = $_POST["message-to-send"];
    $idPhong= $_GET['idb'];
    
    $status='unread';
    
$file = rand(100000,10000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="bin/access/images/member/messages/";
	
	// new file size in KB
	$new_size = $file_size/230024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	move_uploaded_file($file_loc,$folder.$final_file);

  //echo $messss; 
  //echo $idPhong;
    //echo $idNguoiGui;
    
 $sql = "INSERT INTO mess (idGui, idPhong, messs, status, file, type, size) 
          VALUES ('$idNguoiGui', '$idPhong', '$messss', '$status', '$final_file', '$file_type', '$new_size')";
          $result = mysql_query($sql);

$messss="";

}

?> 

<form id= "bb" action="" method="post"  enctype="multipart/form-data">
 <div class="chat-message clearfix">
        <img id="myImg" src="#" alt=" " />
        <textarea  id ="cc" name="message-to-send" placeholder ="Type your message" rows="3" required></textarea>
            
        <input id ="cc" type="file" name="file">
        <button onClick="Scroll()" name="btn" type="submit" onmousedown="bleep.play()" title="Send"><img src="http://localhost/social/bin/access/images/icon/send.PNG" alt="Send" height="26" width="26"></button>

      </div> <!-- end chat-message -->
  
</form>
        
        
        
        <script>

var bleep = new Audio();
bleep.src = "http://localhost/social/bin/access/notification.mp3";

</script>
      
     
        
      <script>
        
        $(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
        </script>
      


      
    </div> <!-- end chat -->
        
        
        
        
        
        
           </div> 
        
        
        
        
        <div class="col-md-3"></div>
        
        
        
        
        
    </div>    
        
    
  </div> <!-- end container -->
    <script>
    
        $(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'http://localhost/social/real.php',
      success: function(data){
        $('#chat-history').html(data);
      }
    });

  },1000);

  var intercal = setInterval(function()
  {
    $.ajax({
      url: ''
    });

  },1000);

  
});
    
    </script>




    <?php include 'bin/access/index/footer.php';?>