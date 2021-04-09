<?php
    require_once('hsd/surene_dhak.php');
?>

<?php
require_once 'hsd/dibba_laga.php';

    if($_POST['act'] == 'rate'){
    	$ip = $_SESSION['SESS_MEMBER_ID'] ;
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

    	$query = mysql_query("SELECT * FROM gau_foststar where ip= '$ip' and id_post='$thepost'"); 
    	while($data = mysql_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysql_query("INSERT INTO gau_foststar (id_post, ip, rate)VALUES('$thepost', '$ip', '$therate')");
    	}else{
    		mysql_query("UPDATE gau_foststar SET rate= '$therate' WHERE ip = '$ip' and id_post='$thepost'");
    	}
    } 
?>