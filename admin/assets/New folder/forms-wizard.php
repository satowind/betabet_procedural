<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Forms</a>
							</li>
						<li class="active">
		
									<strong>Form Wizard</strong>
							</li>
							</ol>
					<h2>Form Wizard</h2>
		<br />
		
		
		
		
		<h4>Simple Form Wizard <small>- add class <strong>form-wizard</strong> to the form</small></h4>
		<hr />
		<br />
		
		<form id="rootwizard" method="post" action="" class="form-horizontal form-wizard">
			
			<div class="steps-progress">
				<div class="progress-indicator"></div>
			</div>
			
			<ul>
				<li class="completed">
					<a href="#tab1" data-toggle="tab"><span>1</span>First</a>
				</li>
				<li class="completed">
					<a href="#tab2" data-toggle="tab"><span>2</span>Second</a>
				</li>
				<li class="completed">
					<a href="#tab3" data-toggle="tab"><span>3</span>Third</a>
				</li>
				<li class="active">
					<a href="#tab4" data-toggle="tab"><span>4</span>Forth</a>
				</li>
				<li>
					<a href="#tab5" data-toggle="tab"><span>5</span>Fifth</a>
				</li>
				<li>
					<a href="#tab6" data-toggle="tab"><span>6</span>Sixth</a>
				</li>
				<li>
					<a href="#tab7" data-toggle="tab"><span>7</span>Seventh</a>
				</li>
			</ul>
			
			<div class="tab-content">
				
				<div class="tab-pane" id="tab1">1</div>
				<div class="tab-pane" id="tab2">2</div>
				<div class="tab-pane" id="tab3">3</div>
				<div class="tab-pane active" id="tab4">4</div>
				<div class="tab-pane" id="tab5">5</div>
				<div class="tab-pane" id="tab6">6</div>
				<div class="tab-pane" id="tab7">7</div>
				
				<ul class="pager wizard">
					<li class="previous first">
						<a href="#">First</a>
					</li>
					<li class="previous">
						<a href="#"><i class="entypo-left-open"></i> Previous</a>
					</li>
					
					<li class="next last">
						<a href="#">Last</a>
					</li>
					<li class="next">
						<a href="#">Next <i class="entypo-right-open"></i></a>
					</li>
				</ul>
				
			</div>
		</form>
		
		<br />
		<br />
			
		
		
		<h4>Form Wizard with Validation <small>- add class <strong>validate</strong> to the form</small></h4>
		<hr />
		
		<div class="well well-sm">
			<h4>Please fill the details to register new account.</h4>
		</div>
		
		<form id="rootwizard-2" method="post" action="" class="form-wizard validate">
			
			<div class="steps-progress">
				<div class="progress-indicator"></div>
			</div>
			
			<ul>
				<li class="active">
					<a href="#tab2-1" data-toggle="tab"><span>1</span>Personal Info</a>
				</li>
				<li>
					<a href="#tab2-2" data-toggle="tab"><span>2</span>Address</a>
				</li>
				<li>
					<a href="#tab2-3" data-toggle="tab"><span>3</span>Education</a>
				</li>
				<li>
					<a href="#tab2-4" data-toggle="tab"><span>4</span>Work Experience</a>
				</li>
				<li>
					<a href="#tab2-5" data-toggle="tab"><span>5</span>Register</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane active" id="tab2-1">
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="full_name">Full Name</label>
								<input class="form-control" name="full_name" id="full_name" data-validate="required" placeholder="Your full name" />
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" for="birthdate">Date of Birth</label>
								<input class="form-control" name="birthdate" id="birthdate" data-validate="required" data-mask="date" placeholder="Pre-formatted birth date" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="about">Write Something About You</label>
								<textarea class="form-control autogrow" name="about" id="about" data-validate="minlength[10]" rows="5" placeholder="Could be used also as Motivation Letter"></textarea>
							</div>
						</div>
		
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-2">
					
					<div class="row">
						
						<div class="col-md-8">
							<div class="form-group">
								<label class="control-label" for="street">Street</label>
								<input class="form-control" name="street" id="street" data-validate="required" placeholder="Enter your street address" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="door_no">Door no.</label>
								<input class="form-control" name="door_no" id="door_no" data-validate="number" placeholder="Numbers only" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="address_line_2">Address Line 2</label>
								<input class="form-control" name="address_line_2" id="address_line_2" placeholder="(Optional) Secondary Address" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-5">
							<div class="form-group">
								<label class="control-label" for="city">City</label>
								<input class="form-control" name="city" id="city" data-validate="required" placeholder="Current city" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="state">State</label>
								
								<select name="test" class="selectboxit">
									<optgroup label="United States">
										<option value="1">Alabama</option>
										<option value="2">Boston</option>
										<option value="3">Ohaio</option>
										<option value="4">New York</option>
										<option value="5">Washington</option>
									</optgroup>
								</select>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label" for="zip">Zip</label>
								<input class="form-control" name="zip" id="zip" data-mask="** *** **" data-validate="required" placeholder="Zip Code" />
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-3">
					
					<strong>Primary School</strong>
					<br />
					<br />
					
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="prim_subject">Subject</label>
								<input class="form-control" name="prim_subject" id="prim_subject" data-validate="require" placeholder="Graduation Degree" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="prim_school">School Name</label>
								<input class="form-control" name="prim_school" id="prim_school" placeholder="Which school did you attended" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="prim_date_start">Start Date</label>
								<input class="form-control datepicker" name="prim_date_start" id="prim_date_start" data-start-view="2" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="prim_date_end">End Date</label>
								<input class="form-control datepicker" name="prim_date_end" id="prim_date_end" data-start-view="2" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
					<br />
					
					<strong>Secondary School</strong>
					<br />
					<br />
					
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="second_subject">Subject</label>
								<input class="form-control" name="second_subject" id="second_subject" data-validate="require" placeholder="High School" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="second_school">School Name</label>
								<input class="form-control" name="second_school" id="second_school" placeholder="Which school did you attended" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="second_date_start">Start Date</label>
								<input class="form-control datepicker" name="second_date_start" id="second_date_start" data-start-view="2" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="second_date_end">End Date</label>
								<input class="form-control datepicker" name="second_date_end" id="second_date_end" data-start-view="2" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
					<br />
					
					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="other_qualifications"><strong>Other Qualifications</strong></label>
								<textarea class="form-control autogrow" name="other_qualifications" id="other_qualifications" placeholder="List one subject per row"></textarea>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-4">
					
					<strong>Current &amp; Past Jobs</strong>
					<br />
					<br />
					
					<div class="row">
					
						<div class="col-md-1">
							<label class="control-label">&nbsp;</label>
							<p class="text-right">
								<span class="label label-info">1</span>
							</p>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label" for="job_position_1">Company Name</label>
								<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current job" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="job_position_1">Job Position</label>
								<input class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current position" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_start_date_1">Start Date</label>
								<input class="form-control datepicker" name="job_position_start_date_1" id="job_position_start_date_1" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_end_date_1">End Date</label>
								<input class="form-control datepicker" name="job_position_end_date_1" id="job_position_end_date_1" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
					
						<div class="col-md-1">
							<label class="control-label">&nbsp;</label>
							<p class="text-right">
								<span class="label label-info">2</span>
							</p>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label" for="job_position_2">Company Name</label>
								<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="job_position_2">Job Position</label>
								<input class="form-control" name="job_position_2" id="job_position_2" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_start_date_2">Start Date</label>
								<input class="form-control datepicker" name="job_position_start_date_2" id="job_position_start_date_2" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_end_date_2">End Date</label>
								<input class="form-control datepicker" name="job_position_end_date_2" id="job_position_end_date_2" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
					
						<div class="col-md-1">
							<label class="control-label">&nbsp;</label>
							<p class="text-right">
								<span class="label label-info">3</span>
							</p>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label" for="job_position_3">Company Name</label>
								<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="job_position_3">Job Position</label>
								<input class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_start_date_3">Start Date</label>
								<input class="form-control datepicker" name="job_position_start_date_3" id="job_position_start_date_3" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_end_date_3">End Date</label>
								<input class="form-control datepicker" name="job_position_end_date_3" id="job_position_end_date_3" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
					<div class="row">
					
						<div class="col-md-1">
							<label class="control-label">&nbsp;</label>
							<p class="text-right">
								<span class="label label-info">4</span>
							</p>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<label class="control-label" for="job_position_4">Company Name</label>
								<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="job_position_4">Job Position</label>
								<input class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_start_date_4">Start Date</label>
								<input class="form-control datepicker" name="job_position_start_date_4" id="job_position_start_date_4" placeholder="(Optional)" />
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<label class="control-label" for="job_position_end_date_4">End Date</label>
								<input class="form-control datepicker" name="job_position_end_date_4" id="job_position_end_date_4" placeholder="(Optional)" />
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab2-5">
								
					<div class="form-group">
						<label class="control-label">Choose Username</label>
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							
							<input type="text" class="form-control" name="username" id="username" data-validate="required,minlength[5]" data-message-minlength="Username must have minimum of 5 chars." placeholder="Could also be your email" />
						</div>
					</div>
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Choose Password</label>
								
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"></i>
									</div>
									
									<input type="password" class="form-control" name="password" id="password" data-validate="required" placeholder="Enter strong password" />
								</div>
							</div>
						</div>
						
						<div class="col-md-6">						
							<div class="form-group">
								<label class="control-label">Repeat Password</label>
								
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-cw"></i>
									</div>
									
									<input type="password" class="form-control" name="password" id="password" data-validate="required,equalTo[#password]" data-message-equal-to="Passwords doesn't match." placeholder="Confirm password" />
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-6">	
							<div class="form-group">
								<label class="control-label">Include Services</label>
								
								
								<select multiple="multiple" name="my-select[]" class="form-control multi-select">
									<option value="1">Web Builder</option>
									<option value="2" selected>Server Side Scripting</option>
									<option value="3">Secure Connection</option>
									<option value="4" selected>Database Access</option>
									<option value="5" selected>Email</option>
									<option value="6">eCommerce</option>
								</select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Gender</label>
								
								<br />
								
								<div class="make-switch switch-small" data-on-label="M" data-off-label="F">
								    <input type="checkbox" checked>
								</div>
							</div>	
							
							<div class="form-group">
								<label class="control-label">Subscribe for Newsletter</label>
								
								<br />
								
								<div class="make-switch switch-small" data-on-label="Yes" data-off-label="No">
								    <input type="checkbox" checked>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label">
									Auto-renew Subscription 
									<span class="label label-warning">Yearly</span>
								</label>
								
								<br />
								
								<div class="make-switch switch-small" data-on-label="Yes" data-off-label="No">
								    <input type="checkbox" checked>
								</div>
							</div>
						</div>
						
					</div>
					
								
					<div class="form-group">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" name="chk-rules" id="chk-rules" data-validate="required" data-message-message="You must accept rules in order to complete this registration.">
							<label for="chk-rules">By registering I accept terms and conditions.</label>
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Finish Registration</button>
					</div>
					
				</div>
				
				<ul class="pager wizard">
					<li class="previous">
						<a href="#"><i class="entypo-left-open"></i> Previous</a>
					</li>
					
					<li class="next">
						<a href="#">Next <i class="entypo-right-open"></i></a>
					</li>
				</ul>
			</div>
		
		</form>
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

		
	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery.inputmask.bundle.js"></script>
	<script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/jquery.multi-select.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>