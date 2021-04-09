<?php include 'bin/access/shop/header.php';?> 
<?php
			   	include('hsd/dibba_laga.php');

                            $product_id=$_GET['id'];
    
							$hamim3 = mysql_query("SELECT * FROM shop_post where id='$product_id'");
								
								
								while($tuhan3 = mysql_fetch_array($hamim3))
								
								
							 { 	
                                 ?>

<title>View: <?php echo $tuhan3['product_name'];?></title>

<div class="container">
<div class="row">
    
    
    <div class="col-md-12">
    
        <div align="center">
        
        <img src="http://localhost/social/bin/access/images/member/shop/<?php echo $tuhan3['image'];?>" class="img-responsive img-rounded">
             
        
        
        
        
    <hr/>
    <font size="7px" color="#a3009d" style="font-weight: bold;"><b><?php echo $tuhan3['product_name'];?></b></font>
    
    </div> 
    </div>
    
    
    
    
    
    <div class="col-md-12">
    <div class="right_box_main">
         <div class="right_box">
    <div  style="line-height: 1.4;">
        <?php echo $tuhan3['content'];?><br/><br/>
    </div>
    
             
             
    <span class="pro_span"><font style="font-weight: bold;">Price:&nbsp; </font></span><font color="#af0000"> $ <?php echo $tuhan3['price'];?></font><br/><br/>
             <span class="pro_span"><font style="font-weight: bold;">Post by:&nbsp; </font></span><a target="_blank" href="http://localhost/social/user/<?php echo $tuhan3['member_id'];?>"><?php echo $tuhan3['product_poster'];?></a><br/><br/>
             
             
             
              <span class="pro_span"><font style="font-weight: bold;">Email:&nbsp; </font></span> <?php echo $tuhan3['email'];?><br/><br/>
             
             <span class="pro_span"><font style="font-weight: bold;">Phone:&nbsp; </font></span> <?php echo $tuhan3['phone'];?><br/><br/>
             
             <span class="pro_span"><font style="font-weight: bold;">Country:&nbsp; </font></span> <?php echo $tuhan3['country'];?><br/><br/>
             
             <span class="pro_span"><font style="font-weight: bold;">Category:&nbsp; </font></span> <?php echo $tuhan3['catagory'];?><br/><br/>
             
             <span class="pro_span"><font style="font-weight: bold;">Tag:&nbsp; </font></span> <?php echo $tuhan3['tag'];?><br/><br/>
             



<?php  
    include('hsd/dibba_laga.php');
    $post_id = $_GET['id']; // yor page ID or Article ID
?>



    <div class="rate">
        <div id="1" class="btn-1 rate-btn"></div>
        <div id="2" class="btn-2 rate-btn"></div>
        <div id="3" class="btn-3 rate-btn"></div>
        <div id="4" class="btn-4 rate-btn"></div>
        <div id="5" class="btn-5 rate-btn"></div>
    </div>
<br>





    <div class="box-result">
        <?php
            $query = mysql_query("SELECT * FROM shop_star where id_post='$post_id'"); 
                while($data = mysql_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        ?>
    <div class="result-container">
        <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
        <div class="rate-stars"></div>
    </div>
        <p style="margin:5px 0px; font-size:16px; text-align:center">Rated <strong><?php echo substr($rate_value,0,3); ?></strong> out of 5, <?php echo $rate_times; ?> Customer Review(s)</p>
    </div>







<script>
$(function(){ 
   $('.rate-btn').hover(function(){
   $('.rate-btn').removeClass('rate-btn-hover');
      var therate = $(this).attr('id');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-hover');
       };
     });
                           
   $('.rate-btn').click(function(){    
      var therate = $(this).attr('id');
      var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
   $('.rate-btn').removeClass('rate-btn-active');
      for (var i = therate; i >= 0; i--) {
   $('.btn-'+i).addClass('rate-btn-active');
      };
   $.ajax({
      type : "POST",
      url : "http://localhost/social/dukan_strajax.php",
      data: dataRate,
      success:function(){}
    });
  });
});
</script>





<!--<?php echo $post_id;?>-->






             <a target="_blank" href="http://localhost/social/user/<?php echo $tuhan3['member_id'];?>"><button class="btn btn-info">User Profile</button></a>
             
             
             <a target="_blank" href="<?php echo $tuhan3['button_link'];?>"><button class="btn btn-danger">Buy Link</button></a>
             
             <a target="_blank" href="<?php echo $tuhan3['product_name_link'];?>"><button class="btn btn-warning">Home Page</button></a>
             <br/><br/>
    
        </div>
        </div>
    </div>
    
    
    
    </div>
</div>























                                <?php
                             }
                                 ?>


<?php include 'bin/access/index/footer.php';?> 