<?php
	require_once('hsd/surene_dhak.php');
?>


<?php
if(isset($_POST["limit"], $_POST["start"]))
{
?>






     
<?php
			   	include('hsd/dibba_laga.php');
    $post_id=$_SESSION['SESS_MEMBER_ID'];
    
							$hamim3 = mysql_query("SELECT * FROM shop_post where member_id='$post_id' LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
								
								
								while($tuhan3 = mysql_fetch_array($hamim3))
								
								
							 { 	
                                 ?>
<div class="col-md-3">
                                  <div class="right_box_main">
         <div class="right_box">
             <div align="left" style="background-color:rgba(248, 15, 114, 0.76); width:100%; padding: 5px 5px 5px 5px; border-radius: 5px 5px 25px 25px; margin-bottom: 10px; font-famaiy: courier;">
                 <div align="center">
             <font color="#fff" size="4px;"><b>Price: $ <?php echo $tuhan3['price'];?></b></font>
             </div>
                 </div>
     
             <img src="http://localhost/social/bin/access/images/member/shop/<?php echo $tuhan3['image'];?>" class="img-responsive img-rounded">
             <hr/>
             <p><a href="http://localhost/social/shop/view/<?php echo $tuhan3['id'];?>"><big><?php echo $tuhan3['product_name'];?></big></a></p>
             <hr/>
             <font color="#ab0bff" size="2px">Post Country: <?php echo $tuhan3['country'];?></font><br/>
             <font color="#0babff" size="2px">Category: <?php echo $tuhan3['catagory'];?></font>
             
              <span class="text-muted  comment_time pull-right"><a title="Delete Shop Post" href="http://localhost/social/post/delete/shop/<?php echo $tuhan3['id'];?>"><img src="http://localhost/social/bin/access/images/icon/bin.PNG" alt="" height="16" width="16"></a></span>
             
             <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="http://localhost/social/shop/view/<?php echo $tuhan3['id'];?>"><button class="login100-form-btn">
								See This
                                </button></a>
						</div>
					</div>
             
             
             
             
         </div>
     </div>
</div>
    <?php
                             }
}
    ?>