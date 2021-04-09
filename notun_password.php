
<?php include 'bin/access/index/header.php';?> 
	<title>New password request</title>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <div align="center">
<h2><b>🔏 <font color="#9e2aeb">Recover Password</font></b></h2>
 
</div>	<hr/>
                
                <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
                
                
                
                
			<form class="login100-form validate-form" role="form" action="http://localhost/social/recover/account/password/submit.xml" method="post">
                <input type="hidden" name="date" value="<?php echo '20'.$current=date("y-m-d");?>">
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="emailadd">
						<span class="focus-input100" data-placeholder="Insert Your Email"></span>
					</div>
                
                
                 <div class="wrap-input100 validate-input" data-validate = "Selects your question.">
						<select name="security_que" class="input100">
						<option></option>
      <option value="What was your childhood nickname?">What was your childhood nickname? </option>
<option value="What is the name of your favorite childhood friend?">What is the name of your favorite childhood friend? </option>
<option value="In what city or town did your mother and father meet?">In what city or town did your mother and father meet? </option>
<option value="What is the middle name of your oldest child?">What is the middle name of your oldest child? </option>
<option value="What is your favorite team?">What is your favorite team? </option>
<option value="What is your favorite movie?">What is your favorite movie? </option>
<option value="What is your favorite color?">What is your favorite color? </option>
<option value="What is your favorite place?">What is your favorite place? </option>
<option value="What was your favorite sport in high school?">What was your favorite sport in high school? </option>
<option value="What was your favorite food as a child?">What was your favorite food as a child? </option>
<option value="What was the name of the hospital where you were born?">What was the name of the hospital where you were born? </option>
<option value="Who is your childhood sports hero?">Who is your childhood sports hero? </option>
<option value="What school did you attend for sixth grade?">What school did you attend for sixth grade? </option>
<option value="What was the last name of your third grade teacher?">What was the last name of your third grade teacher? </option>
<option value="In what town was your first job?">In what town was your first job? </option>
<option value="What was the name of the company where you had your first job?">What was the name of the company where you had your first job? </option>

    </select>
						<span class="focus-input100" data-placeholder="Input your question."></span>
					</div> 
                    
                    
                    
                    
                    
                    <div class="wrap-input100 validate-input" data-validate="Type your answer">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="text" name="security_ans">
						<span class="focus-input100" data-placeholder="Type your answer"></span>
					</div>
                
                
                
            
                
       <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="New Password"></span>
					</div>
					
					
					
					
					
					
					<div class="wrap-input100 validate-input" data-validate="Retype password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="rpassword">
						<span class="focus-input100" data-placeholder="Retype your new password"></span>
					</div>         
                
                
                
                
                
                
                
                
                <div class="wrap-login100-form-btn">
						
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Change Password
							</button>
						</div>
                
                
                
                
                
                
					<br/>
					<div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" title="create a new account" href="http://localhost/social/signup/">
							Create a new account
						</a>
					</div>
				</form>
			</div>
		</div>
<?php include 'bin/access/index/footer.php';?> 