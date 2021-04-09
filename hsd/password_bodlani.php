<?php
session_start();
include('dibba_laga.php');

$security_que=$_POST['security_que'];
$security_ans=$_POST['security_ans'];
$emailadd=$_POST['emailadd'];
$password=$_POST['password'];
$update_time = $_POST['date'];


function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}



$password = clean($_POST['password']);
$rpassword = clean($_POST['rpassword']);
$emailadd = clean($_POST['emailadd']);
$security_que = clean($_POST['security_que']);
$security_ans = clean($_POST['security_ans']);








	if($emailadd == '') {
		$errmsg_arr[] = '<font color="#F70707">email field is  missing</font>';
		$errflag = true;
	}

	if($password == '') {
		$errmsg_arr[] = '<font color="#F70707">Password missing</font>';
		$errflag = true;
	}

    if($security_que == '') {
		$errmsg_arr[] = '<font color="#F70707">Security question not selected</font>';
		$errflag = true;
	}

    if($security_ans == '') {
		$errmsg_arr[] = '<font color="#F70707">Security Answer fild missing</font>';
		$errflag = true;
	}

	if($rpassword == '') {
		$errmsg_arr[] = '<font color="#F70707">Confirm password missing</font>';
		$errflag = true;
	}

	if( strcmp($password, $rpassword) != 0 ) {
		$errmsg_arr[] = '<font color="#F70707">Passwords do not match</font>';
		$errflag = true;
	}













	//Check for Email
	if($emailadd != '') {
		$qry = "SELECT * FROM members WHERE email='$emailadd'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) < 1) {
				$errmsg_arr[] = '<font color="#0099cc">Emai Address do not match</font>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}

	//Check for security question
	if($security_que != '') {
		$qry = "SELECT * FROM members WHERE security_que='$security_que'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) < 1) {
				$errmsg_arr[] = '<font color="#0099cc">Security question do not matched</font>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}

	//Check for security ans
	if($security_ans != '') {
		$qry = "SELECT * FROM members WHERE security_ans='$security_ans'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) < 1) {
				$errmsg_arr[] = '<font color="#0099cc">Security answer do not matched</font>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}





	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: http://localhost/social/recover/account/password/");
		exit();
	}	



mysql_query("UPDATE members SET password='$password', update_time='$update_time' WHERE email='$emailadd' and security_que='$security_que' and security_ans='$security_ans'");
header("location: http://localhost/social/success");




mysql_close($con);
?>



