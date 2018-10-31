
<!DOCTYPE html>
<html lang="en">
<?php include 'App/Views/Utils/header.php'; ?>
<body>
	
	<div id="page" class="theia-exception">
    <?php include 'App/Views/Utils/inst_navs.php'; ?>	
	<main>		
        <?php include 'App/Views/Details/first_section.php'; ?>
		<!--/hero_in-->
		<?php include 'App/Views/Details/menu.php'; ?>
		<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
                        <?php include 'App/Views/Details/description.php'; ?>
                        <?php //include 'App/Views/Details/about_us.php'; ?>
						<?php include 'App/Views/Details/reviews.php'; ?>
						<?php include 'App/Views/Details/service.php'; ?>
						<!-- /section -->
						<hr>
                        <?php include 'App/Views/Details/contact.php'; ?>
					</div>
					<!-- /col -->
					
                    <?php include 'App/Views/Details/request_service.php'; ?>
				</div>
				<!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
    <?php include 'App/Views/Utils/web_footer.php'; ?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map_single_shop.js"></script>
	<script src="js/infobox.js"></script>
  
</body>
</html>