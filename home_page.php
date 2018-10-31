<!DOCTYPE html>
<html lang="en">
<?php include 'App/Views/Utils/header.php'; ?>
<body>
		
	<div id="page">
		<!-- /header -->
		<?php include 'App/Views/Utils/top_navs.php'; ?>
		<main class="pattern">
			<section class="hero_single version_2">
				<div class="wrapper">
					<div class="container">
						<h3>Find what you need!</h3>
						<p>Discover top and popular service available from wide range of institutions.</p>
						<?php 
						include 'App/Views/Home/search_service.php';
						?>
					</div>
				</div>
			</section>
			<!-- /hero_single -->

			<?php 
			include 'App/Views/Home/main_categories.php';
			?>
			<div id="visit_rwanda" class="col-lg-2" style="min-height: 200px;background: #fff;position: absolute;left: 0;z-index: 2;">
				<img src="img/Home/visit.jpg"  class="img-responsive" alt="visit rwanda" style="max-width: 100%;">
				<div class="panel-group">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <center>
				        	<a data-toggle="collapse" href="#collapse1">
				        		Visit Rwanda
				        	</a>
				        </center>
				      </h4>
				    </div>
				    <center>
					    <div id="collapse1" class="panel-collapse collapse">
					      <div class="panel-body">
					      	Rwanda has an excellent investment climate, a robust and pro-business government, a fast growing economy and access to markets across East Africa.<br />
					      	<a href="#" class="btn_1 rounded">Learn More.</a>
					      </div>
					    </div>
				    </center>
				  </div>
				</div>
			</div>
			<div id="twitter_feeds" class="col-lg-2" style="background-color:#fff;min-height: 200px;position: absolute;right: 10px;height: 40vh;overflow: auto;z-index: 2;">
				<h5>Latest Tweets Updates</h5>
				<a class="twitter-timeline" href="https://twitter.com/RwandaGov?ref_src=twsrc%5Etfw">Tweets by RwandaGov</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<!-- /main_categories -->
			<?php include 'App/Views/Home/recent_news.php'; ?>
			<div class="container margin_60_35">
				<?php include 'App/Views/Home/sectors.php'; ?>
				<?php include 'App/Views/Home/popular_services.php'; ?>
				<!-- /row -->
				<?php include 'App/Views/Home/first_ads.php'; ?>
				<!-- /row -->
				<?php include 'App/Views/Home/destinations.php'; ?>
				<!-- /row -->
			</div>
			<!-- /container -->
			<?php include 'App/Views/Home/events.php'; ?>
			<?php include 'App/Views/Home/how_works.php'; ?>
			<!--/call_section-->
			<?php include 'App/Views/Home/app_section.php'; ?>
			<?php include 'App/Views/Home/videos_section.php'; ?>
			<?php include 'App/Views/Home/grid.php'; ?>
			<!-- /container -->
		</main>
		<!-- /main -->
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
				<div class="form-group">
					<label>Phone Number</label>
					<input type="phone" class="form-control" name="phone" id="phone">
					<i class="icon_phone"></i>
				</div>
				<div class="form-group">
					<label>Access Code</label>
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/animated_canvas_min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>
</body>
</html>