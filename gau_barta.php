<?php include 'bin/access/social/header.php';?> 
<title>My Tracker List</title>


<div class="row-offcanvas row-offcanvas-left">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12">
      <div class="static">
     
 <?php include 'bin/access/social/left_bar_content.php';?>    
     
     
     
       </div>
      </div>
  </div>
 














 <div class="row">
              <div class="col-md-12">
              
         <div class="row">
              <div class="col-md-9">
              <div class="tracker_list">
              
             <div class="Right_h" align="center"><b>✉ Unread Message <?php
	include('hsd/dibba_laga.php');

$result11 = mysql_query("SELECT * FROM mess WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
	
	$numberOfRows4 = MYSQL_NUMROWS($result11);	
	
	echo '<font>' . $numberOfRows4 . '</font>'; 
	
	?></b></div><hr/>
             
             
            <?php
			   include('hsd/dibba_laga.php');		
				
								
                  
                  
                  
                  						$thuaha = mysql_query("SELECT * FROM mess WHERE idPhong='".$_SESSION['SESS_MEMBER_ID'] ."' and status='unread'");
								
								
								while($hadi = mysql_fetch_array($thuaha))
								  {
								  $qwe=$hadi['idGui'];
								  $dalia1 = mysql_query("SELECT * FROM members WHERE user='$qwe'");
								
								
								while($tuhan1 = mysql_fetch_array($dalia1))
								  { 
                  
                  
                  
                  
                  
                  
                  
								
			  
			  echo '<div>';
			  echo '<div style="float:left">';
			  echo '<div style=" margin-right:3px; float:left">';
			  		echo '<img class="img-circle" src="http://localhost/social/'.$tuhan1['profilepic'].'" height="30" width="30">';
					echo '</div>';
					echo '<div style="margin-top:-5px; float:right">';
					 echo  '<a href=http://localhost/social/user/'.$tuhan1['user'] .'><strong>'.$tuhan1['fname'].' '.$tuhan1['lname'].'</strong></a><br/>';
					  echo  '<font size="2px" color="#b621ff">'.$tuhan1['city'].'</font>&nbsp;|&nbsp;<font size="2px" color="#27cefd">'. $tuhan1['country'].'</font>';
					
					echo '</div>';
				echo '</div>';
				echo '<div style="float:right">';	
					echo '<a href=http://localhost/social/view/message/'.$_SESSION['SESS_MEMBER_ID'] .'&idb='.$tuhan1['user'] .' title="Message Box">'.'Inbox'.'</a>';
					
					echo '</div>';
			   echo '</div>';
			   echo '<br><br><hr/><br/>';
			   
								  }
								  }
				?> 
             
            
             
             
             
              
              </div>
              
              
              
              </div>
              
              <div class="col-md-3"></div>
              
          </div>
          
           
              
              
              </div>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
 <div class="col-md-12">
              
         <div class="row">
              <div class="col-md-9">
              <div class="tracker_list">
              
             <div class="Right_h" align="center"><b>🤚 Your Trackers Activity</b></div><hr/>
                  
                  
                  
                  
                  
                  
                  
                  
<?php
$cc = $_SESSION['SESS_MEMBER_ID'] ;


?>
             <?php
			   include('hsd/dibba_laga.php');		
				
								
								$hamim2 = mysql_query("SELECT * FROM friends WHERE requested='".$_SESSION['SESS_MEMBER_ID'] ."' and status='accepted' ORDER BY requested ASC");
								
								
								while($dalia2 = mysql_fetch_array($hamim2))
								  {
								$mdth=$dalia2['addedby'];	  
								 

            $sql = "SELECT * from members WHERE user='$mdth'";   $result = mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {


                if ($row['id'] != $cc) {

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $datetime = date("Y-m-d H:i:s");

           $ngon = abs (strtotime($datetime) -strtotime($row['real_time']));

         
        // echo $datetime->format("l");
         


                    ?>
                    
                    <li class="clearfix">
                        <img src="http://localhost/social/<?php echo $row["profilepic"]; ?>" height="30px" width="30px" class="img-circle responsive"/>
                        <div style="margin: -30px 0px 0px 33px;">
                            <div><a href='http://localhost/social/user/<?php echo $row["user"]; ?>'><?php echo $row["fname"] . " " . $row["lname"] ?></a></div>
                            <div style="paddin-buttom:20px">
                                
                                
                                
                                
                                <?php
if ($ngon <50) {
             echo "<img src='http://localhost/social/bin/access/images/icon/connect.PNG'>  online";
         }
         else
         {
            echo"<img src='http://localhost/social/bin/access/images/icon/disconnect.PNG'> " . (string)$row['real_time'] ;
         }
?>
                            </div>
                            <div align="right" style="margin-top:-20px;">
					<a href='http://localhost/social/view/message/<?php echo $_SESSION['SESS_MEMBER_ID']; ?>&idb=<?php echo $row["user"]; ?>'>Message</a>
                                
					
					</div>
                        </div>
                    </li>
                    <hr/><br/>


                    <?php
                }
            }
                                  }
            ?>                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
           
             
             
              
              </div>
              
              
              
              </div>
              
              <div class="col-md-2"></div>
              
          </div>
          
           
              
              
              </div>    
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
              
          </div>
          
          
          
          
          
          
          
          
          
              
          



<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/social/chat-bar.php';?>
<?php include 'bin/access/index/footer.php';?> 