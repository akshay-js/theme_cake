<!-- Header Image Or May be Slider-->
<?php $controller 	=	strtolower($this->request->params['controller']); ?>
<?php $action 		=	strtolower($this->request->params['action']); ?>
<div id="header" class="container-fluid <?php echo ($controller == 'users' && $action == 'index') ? 'home' :'pages'; ?>">
	  <div class="row">
		<?php if($controller == 'users' && $action == 'index'){ ?>
			<div class="header_banner">
			   <div class="slides">
					<div class="slider_items parallax-window"  data-parallax="scroll" data-image-src="assets/images/headerimage1.jpg"></div>
			   </div>
			</div>
		<?php } ?>
	 <!-- Header Image Or May be Slider-->
		<div class="top_header">
			<nav class="navbar navbar-fixed-top">				 
				 <div class="container">
					<div class="logo">
						<a href="<?php echo WEBSITE_URL; ?>"><img src="<?php echo WEBSITE_URL; ?>assets/images/logo2.png" alt="Photo" /> </a>
					</div>
					<div class="logins">
						<?php if(!empty($this->request->session()->read('Auth.User.id'))){ ?>
						<a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'jobAdd']) ?>" class="post_job"><span class="label job-type partytime">POST A JOB</span></a>
						<a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'logout']) ?>" class="post_job"><span class="label job-type partytime">Logout</span></a>
						<?php }else{ ?>
						<a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'signup']) ?>" class="post_job"><span class="label job-type partytime">Register</span></a>
						<a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'login']) ?>" class="post_job"><span class="label job-type partytime">Login</span></a>
						<?php } ?>
					</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'jobListing']) ?>">Jobs</a></li>
						<?php /*<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
							  <ul class="dropdown-menu">
								<li><a href="job-style-one.html">Job Style One</a></li>
								<li><a href="job-style-two.html">Job Style Two</a></li>
							   <li><a href="job-preview.html">Job Preview</a></li>
								<li><a href="resume.html">Resume Page</a></li>
								<li><a href="companies.html">Companies</a></li>

								
								<li><a href="pricing_table.html">Pricing Table</a></li>
							  </ul>
						</li>*/?>
						<li><a href="<?php echo $this->Url->build(["controller" => 'blogs','action' => 'blog']) ?>">Blog</a></li>
						<li><a href="how_its_work.html">How It Works</a></li>
						<li><a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'contactUs']) ?>">Contact</a></li>
						<li class="mobile-menu"><a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'jobAdd']) ?>">POST A JOB, IT’S FREE!</a></li>
						<li class="mobile-menu"><a href="<?php echo $this->Url->build(["controller" => 'users','action' => 'signup']) ?>">Register User</a></li>
					  </ul>
				 
				</div><!-- navbar-collapse -->
			
			
			</div>
			<!-- container-fluid -->
			</nav>
			<?php if($controller == 'users' && $action == 'index'){ ?>
			<div class="container slogan">
				<div class="col-lg-12">
					<h1 class="animated fadeInDown">Are you a Developer?</h1>
					<h3><span>Join us </span>& Explore thousands of jobs</h3>
					<a href="">We have <span>59</span> jobs offers for you!</a>
				</div>
			
			</div>
			<?php } ?>
			
		 </div>
	<?php if($controller == 'users' && $action == 'index'){ ?>	 
		<div class="jobs_filters">
			<div class="container">
					<form class="" action="index.html">
				<!--col-lg-3 filter_width -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
					<div class="form-group">
						<div class="dropdown">
								<button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Category
								<span class="glyphicon glyphicon-menu-down"></span>
								</button>
							
							<div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
								<ul class="tiny_scrolling" id="style-3">
									<li><a href="#">Web Developer</a></li>
									<li><a href="#">Graphic designer</a></li>
									<li><a href="#">Developer</a></li>
									<li><a href="#">UX Designer</a></li>
									 <li><a href="#">Web Developer</a></li>
									<li><a href="#">Graphic designer</a></li>
									<li><a href="#">Developer</a></li>
									<li><a href="#">UX Designer</a></li>
								</ul>
							</div>
						</div>
					</div>
					<span>e.g. Finance</span>
				</div>
				 <!--col-lg-3 filter_width -->
				 
				 <!-- col-lg-5 filter_width -->
					<div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Keyword, job title or skill">
							<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
						</div>
						<span>e.g. Designer</span>
					</div>
				 <!-- col-lg-5 filter_width -->
				 
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Location">
							<span class="glyphicon fa fa-location-arrow" aria-hidden="true"></span>
						</div>
						<span>e.g. New York</span>
					</div>
					<div class="col-lg-1 col-md-2 col-sm-6 col-xs-12 filter_width bgicon submit">
						<div class="form-group">
						   <input type="submit" class="customsubmit" name="submit" value="Search"/>
						   <span class="glyphicon fa fa-search" aria-hidden="true"></span>
						</div>
					</div>
					</form>
			</div>
 
		</div>
		<?php } ?>
	</div>
</div>
   