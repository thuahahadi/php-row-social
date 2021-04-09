
<?php
	require_once('hsd/surene_dhak.php');
?>
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
                            <div><a onclick="window.open('http://localhost/social/view/message/<?php echo $_SESSION['SESS_MEMBER_ID']; ?>&idb=<?php echo $row["user"]; ?>','_blank','height=800,width=400')" href='http://localhost/social/view/message/<?php echo $_SESSION['SESS_MEMBER_ID']; ?>&idb=<?php echo $row["user"]; ?>'><?php echo $row["fname"] . " " . $row["lname"] ?></a>  </div>
                            <div style="paddin-buttom:20px">
                                
                                
                                
                                
                                <?php
if ($ngon <100) {
             echo "<img src='http://localhost/social/bin/access/images/icon/connect.PNG'>  online";
         }
         else
         {
            echo"<img src='http://localhost/social/bin/access/images/icon/disconnect.PNG'> " . (string)$row['real_time'] ;
         }
?>
                            </div></br>
                        </div>
                    </li>
                    

                    <?php
                }
            }
                                  }
            ?>