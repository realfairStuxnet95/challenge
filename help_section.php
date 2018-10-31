
<!DOCTYPE html>
<html lang="en">
<?php include 'App/Views/Utils/header.php'; ?>

<body>
	
	<div id="page">
		
	<?php include 'App/Views/Utils/inst_navs.php'; ?>	
	<!-- /header -->
	<!-- /sub_header -->
	
	<main>
		<div class="container margin_60_35">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Select a topic</h2>
				<p>Find help from the below content and do not hesitate o request for more information.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<span><i class="pe-7s-wallet"></i></span>
						<h3>Payments</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<i class="pe-7s-users"></i>
						<h3>Personl Account</h3>
						<p>Personal account is used to request and keep track of all the requested services and information .</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<i class="pe-7s-help2"></i>
						<h3>General Usage help</h3>
						<p>Use one Government web portal to get and keep updated with the latest information and different online services and system. </p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<i class="pe-7s-global"></i>
						<h3>International</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<i class="pe-7s-note2"></i>
						<h3>Cancellation</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0">
						<i class="pe-7s-comment"></i>
						<h3>Reviews</h3>
						<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
					</a>
				</div>
			</div>
			<!--/row-->
			<div class="main_title_3 add_top_30">
					<span><em></em></span>
					<h2>Recent Document that can Help</h2>
					<p>Find the recent updated document and PDFs files that can help you request more information.</p>
				</div>
				<div class="list_articles add_bottom_30 clearfix">
					<ul>
						<li><a href="#0"><i class="icon_documents_alt"></i>Birth Certificate Request Form</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Why you need to invest in ICT Here ?</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>National ID Request Form to fill</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Online University Students Registration Requirements </a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Visit Rwanda campaign</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Irembo Social security Request Form.</a></li>
					</ul>
				</div>
				<!-- /list_articles -->
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