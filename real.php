  <?php
	require_once('hsd/surene_dhak.php');
?>


  
 <?php
include('hsd/dibba_laga.php');
$idPhong = $_SESSION['idPhong'] ;
$ida = $_SESSION['ida'];
$Ten = $_SESSION['Ten'];//my name
$Ten1 = $_SESSION['Ten1'];//riciver name




   // echo $idPhong;
    //echo $ida;
    //echo $Ten;
   // echo $Ten1;

  $sql= mysql_query("SELECT * from mess where idPhong = '$idPhong' and idGui= '$ida' or idPhong = '$ida' and idGui= '$idPhong' order by id desc");
  
  while($row = mysql_fetch_assoc($sql)) {
      if ($row['idGui'] == $ida) {
?>
     <li>
            <div class="message-data">
              <?php  echo $row['time']; ?> <span class="message-data-name"><i class="fa fa-circle online"></i> <?php echo $Ten; ?></span> 
                <span class="pull-right"><a title="Delete Post" href="http://localhost/social/message/delete/<?php  echo $row['id']; ?>"><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a></span>
            </div>
            <div class="message my-message">
                  <?php  echo $row['messs']; ?><br/>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div align="center">    
          
          
    <?php 
  						 
	$hadi=$row['type']; 					 
	if($hadi=='image/jpeg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/jpg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/png')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/gif')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
						  
						  
						  
						  
	$hadi=$row['type']; 					 
	if($hadi=='audio/mp3')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/aac')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}	
		$hadi=$row['type']; 					 
	if($hadi=='audio/wma')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/amr')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/ogg')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}						  
						  
						  
						  
						  
						  
				$hadi=$row['type']; 					 
	if($hadi=='video/mp4')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/3gp')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/avi')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}

		$hadi=$row['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/mov')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/webm')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		
		?>  
          </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
          </li>
        
       
<?php  

      }
      else{
      
        ?>
         <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-name" ><?php echo $Ten1?></span> <i class="fa fa-circle me"></i>  <?php  echo $row['time']; ?>
            </div>
            <div class="message other-message float-right">

              <?php echo $row['messs'] ; ?><br/>
                
                
                
                
                
                
                
                
                
                
              <div align="center">    
          
          
    <?php 
  						 
	$hadi=$row['type']; 					 
	if($hadi=='image/jpeg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/jpg')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/png')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
		$hadi=$row['type']; 					 
	if($hadi=='image/gif')
		{					 
						 
						 
						  echo '<img class="responsive" data-action="zoom" src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].' ">';
		}
						  
						  
						  
						  
	$hadi=$row['type']; 					 
	if($hadi=='audio/mp3')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/aac')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}	
		$hadi=$row['type']; 					 
	if($hadi=='audio/wma')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/amr')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='audio/ogg')
		{		  
		
        echo '<audio controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</audio>';
		
		}						  
						  
						  
						  
						  
						  
				$hadi=$row['type']; 					 
	if($hadi=='video/mp4')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/3gp')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/avi')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}

		$hadi=$row['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/mov')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/wmv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/flv')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		$hadi=$row['type']; 					 
	if($hadi=='video/webm')
		{		  
		
         echo '<video controls>'; 
		   
echo '<source src="http://localhost/social/bin/access/images/member/messages/'.$row['file'].'"  >';
		
		echo '</video>';
		
		}
		
		?>  
          </div> 
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
          </li>

         
<?php
      }
      
      }

?> 
          
          
          
          