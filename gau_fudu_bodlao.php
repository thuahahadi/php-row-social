<?php include 'bin/access/social/header.php';?> 



<div class="row-offcanvas row-offcanvas-left">
 
 




 <div class="row">
              <div class="col-md-12">
              
         <div class="row">
              <div class="col-md-10">
              <div class="tracker_list">


<div class="Right_h" align="center"><b>Change Profile Image</b></div><hr/>

<div align="center">
<?php
include('hsd/dibba_laga.php');





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"bin/access/images/member/profile/" . $_FILES["image"]["name"]);
			
			$location="bin/access/images/member/profile/" . $_FILES["image"]["name"];
			$roomid=$_POST['firstname'];
			
			if(!$update=mysql_query("UPDATE members SET profilepic = '$location' WHERE user='$roomid'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			header("location: http://localhost/social/profile/view/about/");
			exit();
			}
			}
	}


?>

<?php
				  if (isset($_GET['id']))
	{
	include('hsd/dibba_laga.php');
		
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM members WHERE user= '$id'");

while($row = mysql_fetch_array($result))
  {
  echo "<img class='responsive img-thumbnail' alt='Unable to View' src='http://localhost/social/" . $row["profilepic"] . "'>";
  }
	echo '<form action="" method="post" enctype="multipart/form-data">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	echo '<br>';
			echo '<input type="hidden" name="firstname" value="'. $_GET['id'] .'">';
			
			echo '<br>';
			echo '<input type="file" name="image">'.'<br>';?>
			
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Change
							</button>
						</div>
					</div>
            <?php
	echo '</form>';
			}
			?>
            <br/>
            </div>
			
  </div>
              
              </div>
              <div class="col-md-2"></div>
              
          </div>     
              
              
              </div>
              
          </div>
          
          
          
          
          
          
          
          

<?php include 'bin/access/social/chat-bar.php';?>
<?php include 'bin/access/index/footer.php';?> 