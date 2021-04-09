<?php
include('hsd/dibba_laga.php');
if(isset($_POST['posted']))
{   

	$to=$_POST['to'];
$content=$_POST['content'];
$from=$_POST['from'];
$pakadtoan=$_POST['pakadtoan'];
$share=$_POST['share'];
		$feeling=$_POST['feeling'];
$location=$_POST['location'];
$tag=$_POST['tag'];
$link=$_POST['link'];

 
	$file = rand(100000,10000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="bin/access/images/member/uploads/";
	
	// new file size in KB
	$new_size = $file_size/230024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	move_uploaded_file($file_loc,$folder.$final_file);
	
		$sql="INSERT INTO members_post(post_id, content, name, pakadtoan, share, feeling, location, tag, link, file, type, size) VALUES('$to', '$content', '$from', '$pakadtoan', '$share', '$feeling', '$location', '$tag', '$link', '$final_file', '$file_type', '$new_size')";
		if (!mysql_query($sql))
  {
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='http://localhost/social/home/?board_upload_success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='http://localhost/social/home/?board_upload_success';
        </script>
		<?php
	}
}
?>
   
   