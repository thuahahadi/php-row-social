<?php include 'bin/access/social/header.php';?> 
<title>Hit's List</title>
<div class="container">
<div class="row">

<div class="col-md-12 post_area">
<div align="center">
      <h1><font color="#FF0066" size="8px">View who people Hit's this</font></h1>
         
   </div><hr/>      
         <?php 
    $hit=$_GET['id'];
 $yooo = mysql_query("SELECT * FROM thuaha WHERE post_id='$hit'");
                                    while($tuhan10 = mysql_fetch_array($yooo))
								
								
							 { 
                                 $hit=$tuhan10['hit_id'];
                                 
                                 $booo = mysql_query("SELECT * FROM members WHERE user='$hit'");
                             
                                    while($tuhan11 = mysql_fetch_array($booo))
								
								
							 { ?>
      
      <a href="http://localhost/social/user/<?php echo $tuhan10['hit_id'];?>"><img class="img-sm img-rounded"  src="http://localhost/social/<?php echo $tuhan11['profilepic'];?>" style="width:30px;" height="30px;">&nbsp;<?php echo $tuhan11['fname'];?>&nbsp;<?php echo $tuhan11['lname'];?></a>,&nbsp;
      
      
      <?php 
                             }
                                 }
                                   ?>
         
         
<br/><br/>
    </div>
</div>
</div>
<?php include 'bin/access/social/gau_notificaton_buttom.php';?>
<?php include 'bin/access/index/footer.php';?>