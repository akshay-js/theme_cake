    <!--header section -->
    	<div class="container-fluid page-title">
			<div class="row blue-banner">
            	<div class="container main-container">
                	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                		<h3 class="white-heading">Post A Job</h3>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 colxs-12 capital">
                    	<h5>Our database gives you access to millions of active users </h5>
                    </div>
                </div>
            </div> 
        </div> 
  	 <!--header section -->
   <!-- full width section forms -->
    	<div class="container-fluid white-bg contact_us">
			<?php echo $this->Form->create("Jobs",['class' => 'has-validation-callback','id'=>"form-style-2"]); ?>
            	<div class="row user-information">
					<div class="container main-container ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php  echo $this->Flash->render(); ?>
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Job Title</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->text("title",["data-validation"=>"required","data-validation"=>"required"]); ?>
								</div>
							</div>
							 <div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Job Details</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->textarea("job_details",["data-validation"=>"required","data-validation"=>"required"]); ?>
								</div>
							</div>
							  <div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>City Name</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->text("city_name",["data-validation"=>"required","data-validation"=>"required"]); ?>
								</div>
							</div>
							  <div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Shape</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("shape",$shape,['empty' => 'Select shape','class' => 'form-control',"data-validation"=>"required"]); ?>
								</div>
							</div>
							  <div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Weight</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->text("weight",["data-validation"=>"required"]); ?>
								</div>
							</div>
							  <div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Color</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("color",$color,['empty' => 'Select color','class' => 'form-control']); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Clarity</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("clarity",$clarity,['empty' => 'Select clarity','class' => 'form-control']); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Cut</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("cut",$cut,['empty' => 'Select cut','class' => 'form-control']); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Pol</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("pol",$pol,['empty' => 'Select pol','class' => 'form-control']); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Sym</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("sym",$sym,['empty' => 'Select sym','class' => 'form-control']); ?>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Flo</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("flo",$flo,['empty' => 'Select flo','class' => 'form-control']); ?>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
									<label>Lab</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
									<?php echo $this->Form->select("lab",$lab,['empty' => 'Select lab','class' => 'form-control']); ?>
								</div>
							</div>
							<div class="form-group submit">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center white-text">
									<input name="submit" value="Submit" class="login" type="submit">
								</div>
							</div>
						 </div>
					</div>
				</div>
           </form>
        </div>
   <!-- full width section forms -->
   
   <!-- Blue Area 
   	<div class="container-fluid blue-banner job-page">
    	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center white-text">
                	<p>Please review your information once more  and press the below button to put your job online</p>
                	<a href="#" class="btn btn-getstarted bg-red center-small">Preview</a>
                </div>
            </div>
        </div>
    </div>
   
   <!-- Blue Area -->