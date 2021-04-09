<?php
session_start();
include('dibba_laga.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['user'];
$emailadd=$_POST['emailadd'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$security_que=$_POST['security_que'];
$security_ans=$_POST['security_ans'];
$search_name= $_POST['fname'].' '.$_POST['lname'];
$time = date("Y-m-d H:i:s");
//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$user = clean($_POST['user']);
	$password = clean($_POST['password']);
	$rpassword = clean($_POST['rpassword']);
	$emailadd = clean($_POST['emailadd']);
	$gender = clean($_POST['gender']);
    $security_que = clean($_POST['security_que']);
    $security_ans = clean($_POST['security_ans']);
	$country = clean($_POST['country']);
    $search_name= clean($_POST['fname'].' '.$_POST['lname']);
	
	//Input Validations
	
	/*if($bdate == '') {
		$errmsg_arr[] = 'birthdate field is  missing';
		$errflag = true;
	}*/

	if($gender == '') {
		$errmsg_arr[] = '<font color="#F70707">gender field is  missing</font>';
		$errflag = true;
	}
	if($country == '') {
		$errmsg_arr[] = '<font color="#F70707">country field is  missing</font>';
		$errflag = true;
	}
	if($emailadd == '') {
		$errmsg_arr[] = '<font color="#F70707">email field is  missing</font>';
		$errflag = true;
	}
	

	if($fname == '') {
		$errmsg_arr[] = '<font color="#F70707">First name missing</font>';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = '<font color="#F70707">Last name missing</font>';
		$errflag = true;
	}
	if($user == '') {
		$errmsg_arr[] = '<font color="#F70707">User name missing</font>';
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
	
	//Check for duplicate login ID
	if($user != '') {
		$qry = "SELECT * FROM members WHERE user='$user'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = '<font color="#0099cc">User Name already in use</font>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//Check for duplicate Email ID
	if($emailadd != '') {
		$qry = "SELECT * FROM members WHERE email='$emailadd'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = '<font color="#0099cc">Email already in use</font>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: http://localhost/social/");
		exit();
	}	
	
	
	
mysql_query("INSERT INTO members(fname, lname, user, email, password, gender, country, profilepic, coverphoto, real_time, join_time, search_name, security_que, security_ans)VALUES('$fname', '$lname', '$user', '$emailadd', '$password', '$gender', '$country', 'bin/access/images/member/profile/auto/profile.jpg', 'bin/access/images/member/cover/auto/cover.jpg', '$time', '$time', '$search_name', '$security_que', '$security_ans')");
header("location: http://localhost/social/success");


$home='public';

mysql_query("INSERT INTO hadi(user, home)VALUES('$user', '$home')");



mysql_close($con);
?>