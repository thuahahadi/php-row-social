<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	include('dibba_laga.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	
	//Sanitize the POST values
	$a = $_POST['username'];
	$password = $_POST['password1'];
// Capture SQL Injection log error
    $a = stripcslashes($a);
    $password = stripcslashes($password);

    $a = mysql_real_escape_string($a);
    $password = mysql_real_escape_string($password);

	//Create query
	$qry="SELECT * FROM members WHERE email = '$a' AND password = '$password'";
	$result=mysql_query($qry);
	echo $qry;
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['user'];
			$_SESSION['SESS_FIRST_NAME'] = $member['fname'];
			header("location: http://localhost/social/home/");
			exit();
		}else {
			//Login failed
			header("location:http://localhost/social/404/");
			exit();
		}
	}else {
		die("Query failed");
	}
?>