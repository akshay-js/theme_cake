<!-- Page Title-->
<div class="container-fluid page-title dashboard ">	
	<div class="row dashboard">
		<div class="container main-container gery-bg">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padding user-data">
				<div class="seprator ">
					<div class="no-padding user-image"><img src="<?php echo WEBSITE_URL; ?>assets/images/job-admin.png" alt=""/></div>
					<div class="user-tag"><?php echo $jobDetails->title; ?></span></div>
				</div>
				<div class="seprator">
					<div class="user-tag"><label>Weight<span>$35000 - $38000</span></label></div>
				</div>
				 <div class="seprator">
					<div class="user-tag"><label>End Date<span>44h / week</span></label></div>
				</div>
				 <div class="seprator">
					<div class="user-tag"><label>Locations<span>Los Angeles</span></label></div>
				</div>
			</div>
	</div>
	</div>        
</div>
<!-- Page Title-->

<!-- Job Data -->
<div class="container-fluid jpd-data white-bg">
	<div class="row">
		<div class="container main-container-job">
			<div class="col-lg-9 col-md-9 col-sm-8">
				<div class="post-image">
					<img src="assets/images/job-image.png" alt=""/>
				</div>
				<div class="content">
					<h3><?php echo $jobDetails->title; ?></h3>
					<div><?php echo $jobDetails->job_details; ?></div>
			   
				<h2>Other Details:</h2>

				 </div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
				<div class="widget w1">
					<ul>
						<li>
							<a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users' ,'action' => 'jobAdd')); ?>" class="label job-type apply-job">Add new job</a>
							<a href="<?php echo $this->Url->build(array('plugin' => '','controller' => 'users' ,'action' => 'jobEdit','job_edit' => $slug)); ?>" class="label job-type apply-link">Click to edit</a>
						</li>
						<li><img src="assets/images/widget1image.png" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- Job Data-->

<!--Blue Secions --> <div class="container-fluid blue-banner" style="background:#3668d1">
		<div class="row">
			<div class="container main-container v-middle" id="style-2">
				<div class="col-lg-10 col-md-8 col-sm-8 col-xs-12  ">
					<h3 class="white-heading">Got a question?<span class="call-us">send us an email or <strong>call us at 1 (800) 555-5555</strong></span></h3>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
					<a href="#" class="btn btn-getstarted bg-red">get started now</a>
				</div>
			</div>
		</div>
	</div>
<!--blue Section -->
    