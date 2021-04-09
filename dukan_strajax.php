<?php
require_once 'hsd/dibba_laga.php';

    if($_POST['act'] == 'rate'){
    	$ip = $_SERVER["REMOTE_ADDR"];
    	$therate = $_POST['rate'];
    	$thepost = $_POST['post_id'];

    	$query = mysql_query("SELECT * FROM shop_star where ip= '$ip' and id_post='$thepost'"); 
    	while($data = mysql_fetch_assoc($query)){
    		$rate_db[] = $data;
    	}

    	if(@count($rate_db) == 0 ){
    		mysql_query("INSERT INTO shop_star (id_post, ip, rate)VALUES('$thepost', '$ip', '$therate')");
    	}else{
    		mysql_query("UPDATE shop_star SET rate= '$therate' WHERE ip = '$ip' and id_post='$thepost'");
    	}
    } 
?>