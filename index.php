<title>Welcome to yokoll</title>
<?php include 'bin/access/index/header.php';?> 





	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
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

						<a class="txt2" title="create a new account" href="./signup/">
							Create a new account
						</a>
					</div>
				</form>
			</div>
		</div>
			</div>
			
<?php include 'bin/access/index/footer.php';?>  