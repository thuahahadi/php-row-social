
<?php
include('hsd/dibba_laga.php');

if(isset($_POST['btn-upload']))
{    




$member_id=$_POST['member_id'];
$country=$_POST['country'];
$product_poster=$_POST['product_poster'];
$email=$_POST['email'];
$phone=$_POST['phone'];
		$product_name=$_POST['product_name'];
$content=$_POST['content'];
$price=$_POST['price'];
$catagory=$_POST['catagory'];
$product_name_link=$_POST['product_name_link'];
$button_link=$_POST['button_link'];
$tag=$_POST['tag'];






     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="bin/access/images/member/shop/";
	

	$new_size = $file_size/1024;  
	
	
	
	$new_file_name = strtolower($file);
	
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{



			
			$sql="INSERT INTO shop_post (member_id, country, product_poster, email, phone, product_name, content, price, catagory, product_name_link, button_link, tag, image)
VALUES
('$member_id', '$country', '$product_poster', '$email', '$phone', '$product_name', '$content', '$price', '$catagory', '$product_name_link', '$button_link', '$tag', '$final_file')";

	mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='http://localhost/social/shop/?uploaded';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='http://localhost/social/shop/?error';
        </script>
		<?php
	}
}
?>
  