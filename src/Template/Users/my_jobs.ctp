	<!-- Page Title-->
    	<div class="container-fluid blue-banner page-title bg-image">
			<div class="row section-title">
            	<div class="container main-container">
                	<div class="col-lg-8 col-md-8 col-sm-8">
                		<h3 class="white-heading">Web designer</h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                		<div class="favourite">Save Job<i class="fa fa-star-o"></i><span>Posted on March 2016</span></div>
                    </div>
                </div>
            </div>  
            <div class="row section-jobcategories">
                <div class="container main-container">
                	<div class="col-lg-12">
                   <ul class="top_filters">
                    <li><input name="freelance" type="checkbox"><label>Freelance</label></li>
                    <li><input name="Partytime" type="checkbox"><label>Partytime</label></li>
                    <li><input name="Contract" type="checkbox"><label>Contract</label></li>
                    <li><input name="Intership" type="checkbox"><label>Intership</label></li>
                </ul>
                	</div>
                </div>
            </div>  
                 
        </div>
    <!-- Page Title-->
  
  	<!-- Job Categories Filters -->
        <div class="jobs_filters">
            <div class="container">
                    	<form class="" action="browse-jobs.html">
                <!--col-lg-3 filter_width -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                    <div class="form-group">
                        <div class="dropdown">
                                <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Category
                                <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                            
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
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
                           <input type="submit" class="customsubmit" name="submit" value="Search">
                           <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                        </div>
                    </div>
                    </form>
            </div>
        
        </div>
  	<!-- Job Categories Filters -->
    <!-- Job Results -->
    	<div class="container main-container">
          	<div class="jobs-result"> 
				<!--Search Result 01-->
				<div class="col-lg-12">
				<?php foreach($result as $res){ ?>
					<div class="filter-result 01">
						<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 pull-left">
							<div class="company-left-info pull-left">
								<img src="assets/images/company-logo.png" alt=""/>
							</div>
							<div class="desig">
								<a href="job-style-one.html"><h3><?php echo $res->title; ?></h3></a>
								<h4><?php echo $res->job_details; ?></h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right">
							<div class="pull-right location">
								<p><?php echo $res->city_name; ?></p>
							</div>
							<div class="data-job">
								<a href="<?php echo $this->Url->build(['plugin' => '','controller' => 'users','action' => 'jobView','job_view' => $res->slug]); ?>" class="label job-type job-contract ">View</a>
							</div>                                    
						</div>
					</div>
				<?php } ?>
					<div class="clearfix"></div>
					<div class="col-lg-12">
						<button class="btn btn-default dropdown-toggle" type="button" id="load_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Show more Jobs <span class="glyphicon glyphicon-menu-down"></span></button>
					</div>
				</div> 
				 <!--Search Result 01-->
			</div>
         </div>
	<!-- Job Results -->
    
			<div class="container-fluid blue-banner" style="background:#3668d1">
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
    