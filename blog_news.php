
<!DOCTYPE html>
<html lang="en">
<?php include 'App/Views/Utils/news_header.php'; ?>
<body>
	
	<div id="page">
		<?php include 'App/Views/Utils/inst_navs.php'; ?>	
	<!-- /header -->
	<!-- /sub_header -->
		
	<main>
		<div class="container margin_60_35">
			<div class="row" style="margin-top: 5vh;">
				<div class="col-lg-9">
					<?php include 'App/Views/Blog/news.php'; ?>
					<!-- /row -->

					<div class="pagination__wrapper add_bottom_30">
						<ul class="pagination">
							<li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
							<li>
								<a href="#0" class="active">1</a>
							</li>
							<li>
								<a href="#0">2</a>
							</li>
							<li>
								<a href="#0">3</a>
							</li>
							<li>
								<a href="#0">4</a>
							</li>
							<li><a href="#0" class="next" title="next page">&#10095;</a></li>
						</ul>
					</div>
					<!-- /pagination -->
					
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget search_blog">
						<div class="form-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search..">
							<span><input type="submit" value="Search"></span>
						</div>
					</div>
					<!-- /widget -->
					<?php include 'App/Views/Blog/recent.php'; ?>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Categories</h4>
						</div>
						<ul class="cats">
							<li><a href="#">Institution <span>(12)</span></a></li>
							<li><a href="#">Places to visit <span>(21)</span></a></li>
							<li><a href="#">New Places <span>(44)</span></a></li>
							<li><a href="#">Services <span>(31)</span></a></li>
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Popular Tags</h4>
						</div>
						<div class="tags">
							<a href="#">Irembo</a>
							<a href="#">Child Registration</a>
							<a href="#">Investing in Rwanda</a>
							<a href="#">E-filling</a>
							<a href="#">Gov.rw</a>
							<a href="#">Transports</a>
							<a href="#">Visit Rwanda</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
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

	<!-- COLOR SWITCHER  -->
	<script src="js/switcher.js"></script>

  
</body>
</html>