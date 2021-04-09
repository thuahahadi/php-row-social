<title>404 Error!</title>
<?php include 'bin/access/index/header.php';?> 
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <div align="center">
<h2><font color="#ff2d2d"><b>⚠ ERROR</b></font></h2>
 
</div>	<hr/>
			<form class="login100-form validate-form" role="form" action="http://localhost/social/member/login.xml" method="post">
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password1">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<br/>
					<div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" title="create a new account" href="http://localhost/social/signup/">
							Create a new account
						</a><br/>
                        <span class="txt1">
							Forget your password? 
						</span>

						<a class="txt2" title="New password request" href="http://localhost/social/recover/account/password/">
							Recover password
						</a>
					</div>
				</form>
			</div>
		</div>
<?php include 'bin/access/index/footer.php';?> 