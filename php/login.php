<!-- Registration form from: http://bootsnipp.com/snippets/featured/basic-register-page -->
<!-- Forgot inspired by: http://www.bootply.com/SIndReNe7i -->

<!DOCTYPE html>
<html>
	<head>
		<title>Sign in</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="../js/marquee.js"></script>
		<script src="../js/login.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
	</head>

	<body>
		<marquee id="quote"></marquee><br>
		<div>
			<a  href="../index.php">Home</a>
		</div>
		<div class="container" id="div-forms">
			<?php
				if(isset($_GET['redirect']))
					$action = "loginCheck.php?redirect=".$_GET['redirect'];
				else
					$action = "loginCheck.php";
			?>
			<form class="form-signin" id="login-form" method="post" action="<?php echo $action ?>">
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <label for="login-email" class="sr-only">Email address</label>
		        <input type="email" name="login-email" id="login-email" class="form-control" placeholder="Email address" required autofocus>
		        <label for="login-password" class="sr-only">Password</label>
		        <input type="password" name="login-password" id="login-password" class="form-control" placeholder="Password" required>

				<?php
					if (isset($_GET['badInfo']) and $_GET['badInfo'] == true)
					{
						?>
						<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    You entered the wrong email or password. <strong>Please Try Again</strong>
						</div>
						<?php
					}
					elseif (isset($_GET['error']) and $_GET['error'] == true)
					{
						?>
						<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Something is wrong!</strong> That's all we can tell you.<br>
						    If the problem persists, please contact the developers through the contact us page.
						</div>
						<?php
					}
					elseif (isset($_GET['notLogged']) and $_GET['notLogged'] == true)
					{
						?>
						<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>You're not logged IN!</strong>
						    Please do so and try again.
						</div>
						<?php
					}
					elseif (isset($_GET['success-pass-change']) and $_GET['success-pass-change'] == true)
					{
						?>
						<div class="alert alert-success fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Success!</strong>
						    Your password change was sucessfully processed. Please sign in using your new credetials.
						</div>
						<?php
					}
					elseif (isset($_GET['success-email-change']) and $_GET['success-email-change'] == true)
					{
						?>
						<div class="alert alert-success fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Success!</strong>
						    Your email change was sucessfully processed. Please sign in using your new credetials.
						</div>
						<?php
					}
				?>

		        <div class="checkbox" id="remember">
		          <label>
		            <input type="checkbox" name="remember" value="remember-me"> Remember me
		          </label>
		        </div>

		        <?php
		        	if (isset($_GET['redirect']) and $_GET['redirect'] == true)
		        	{
		        		?>
		        		<input type="text" hidden="hidden" name="redirect" value="<?php $_GET['redirect']?>">
		        		<?php
		        	}
		        ?>

		        <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
		        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">

		        <button class="btn btn-link" type="button" id="login-forgot">Forgot my password</button>
		        <button class="btn btn-link" type="button" id="login-register">Sign Up</button>
	        </form>

			<!-- Forgot password form -->
			<div class="col-md-4 col-md-offset-4">
				<div class="panel-body">
					<div class="text-center">
						<form id="forgot-form" method="get" method="post" action="forgotPass.php" onsubmit="return validateForgot()" hidden="hidden">
							<h3><i class="fa fa-lock fa-4x"></i></h3>
							<h2 class="text-center">Forgot Password?</h2>
							<p>You can reset your password here.</p>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
									<label for="forgot-email" class="sr-only">Email address</label>
									<input type="email" name="forgot-email" id="forgot-email" class="form-control" placeholder="Email address" required autofocus><br>
								</div>
							</div>
							<div class="form-group">
								<input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">

								<button class="btn btn-link" type="button" id="forgot-login">Sign In</button>
								<button class="btn btn-link" type="button" id="forgot-register">Sign Up</button>
							</div>
						</form>

						<div class="alert alert-danger fade in" id="emailErr" hidden="hidden">
							<?php
								if (isset($_GET['success-forgot-email']) and $_GET['success-forgot-email'] == true)
								{
									?>
									<div class="alert alert-success fade in">
									    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									    <strong>Congrats!</strong>
									    Your password was updated and emailed to you.
									</div>
									<?php
									echo $_GET['redirect'];
								}
								elseif (isset($_GET['bad-forgot-email']) and $_GET['bad-forgot-email'] == true)
								{
									?>
									<div class="alert alert-danger fade in">
									    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									    <strong>Wrong Email!</strong>
									    Your email is not in our database. Please try again.
									</div>
									<?php
									echo $_GET['redirect'];
								}
							?>
						</div>
					</div>
                </div>
			</div>

	        <!-- Register form -->
			<div class="container-fluid">
				<form  id="register-form" method="post" action="signup.php" hidden="hidden">
				    <section class="container">
						<div class="container-page">
							<div class="col-md-6">
								<h3 class="dark-grey">Registration</h3>

								<div class="form-group col-lg-12">
									<label for="signup-username" class="sr-only">Username</label>
									<input type="text" name="signup-username" id="signup-username" class="form-control" placeholder="Username" required autofocus><br>
								</div>

								<div class="form-group col-lg-6">
									<label for="signup-email" class="sr-only">Email address</label>
									<input type="email" name="signup-email" id="signup-email" class="form-control" placeholder="Email address" required autofocus><br>
								</div>

								<div class="form-group col-lg-6">
									<label for="signup-re-email" class="sr-only">Repeat Email Address</label>
									<input type="email" id="signup-re-email" class="form-control" placeholder="Re-enter Email address" required autofocus><br>
								</div>

								<div class="form-group col-lg-6">
									<label for="signup-password" class="sr-only">Password</label>
							        <input type="password" name="signup-password" id="signup-password" class="form-control" placeholder="Password" required>
								</div>

								<div class="form-group col-lg-6">
									<label for="signup-re-password" class="sr-only">Repeat Password</label>
							        <input type="password" id="signup-re-password" class="form-control" placeholder="Re-enter Password" required>
								</div>

								<div class="col-sm-6">
									<input type="checkbox" class="checkbox" />Sigh up for our newsletter
								</div>

								<div class="col-sm-6">
									<input type="checkbox" class="checkbox" />Send notifications to this email
								</div>

							</div>

							<div class="col-md-6">
								<h3 class="dark-grey">Terms and Conditions</h3>
								<p>
									By clicking on "Register", you understand that we do nothing more than connect
									students togheter.
								</p>
								<p>
									We don not even host a payment option.
								</p>
								<p>
									You also fully understand that should an issue arise with a transcation, we are neither responsible nor can we help in any way.
								</p>
								<p>
									If some of this does not make sense, feel free to reach out to us through
									the contact page.
								</p>
								<button class="btn btn-md btn-primary btn-block" type="submit">Sign up</button>

						        <button class="btn btn-link" type="button" id="register-login">Sign In</button>
						        <button class="btn btn-link" type="button" id="register-forgot">Forgot my password</button>
							</div>
						</div>
					</section>
				</form>
			</div>
			<div class="alert alert-danger fade in" id="emailErr" hidden="hidden">
				<?php
					if (isset($_GET['success-signup']) and $_GET['success-signup'] == true)
					{
						?>
						<div class="alert alert-success fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Congrats!</strong>
						    Your password was updated and emailed to you.
						</div>
						<?php
						echo $_GET['redirect'];
					}
					elseif (isset($_GET['bad-signup-username']) and $_GET['bad-signup-username'] == true)
					{
						?>
						<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Duplicate Username!</strong>
						    This username is already taken.
						</div>
						<?php
						echo $_GET['redirect'];
					}
					elseif (isset($_GET['bad-signup-email']) and $_GET['bad-signup-email'] == true)
					{
						?>
						<div class="alert alert-danger fade in">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Duplicate Email!</strong>
						    This email is already taken.
						</div>
						<?php
						echo $_GET['redirect'];
					}
				?>
			</div>
		</div>

		<footer class="panel-footer footer">
		<!-- <footer class="footer"> -->
	 	    <div class="container">
		 	    <p class="text-muted">Designed by the people of BC for the People of BC</p>
	 	    </div>
 	    </footer>
	</body>
</html>