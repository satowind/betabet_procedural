<?php include './includes/header.php' ?>
		
		<h1 class="margin-bottom">Settings</h1>
					<ol class="breadcrumb 2" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Settings</strong>
							</li>
							</ol>
					
		<br />
		
		<form role="form" method="post" class="form-horizontal form-groups-bordered validate" action="">
		
			<div class="row">
				<div class="col-md-12">
					
					<div class="panel panel-primary" data-collapsed="0">
					
						<div class="panel-heading">
							<div class="panel-title">
								General Settings
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
				
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Site title</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="field-1" value="Neon">
								</div>
							</div>
			
							<div class="form-group">
								<label for="field-2" class="col-sm-3 control-label">Tagline</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="field-2" value="Bootstrap Admin Theme">
									<span class="description">Few words that will describe your site.</span>
								</div>
							</div>
			
							<div class="form-group">
								<label for="field-3" class="col-sm-3 control-label">Site URL</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="site-url" id="field-3" data-validate="required,url" value="http://exampledomain.com/neon">
								</div>
							</div>
			
							<div class="form-group">
								<label for="field-4" class="col-sm-3 control-label">Email address</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" name="email" id="field-4" data-validate="required,email" value="john@doe.com">
									<span class="description">Here you will receive site notifications.</span>
								</div>
							</div>
							
						</div>
					
					</div>
				
				</div>
			</div>
			
			
		
			<div class="row">
				<div class="col-md-6">
					
					<div class="panel panel-primary" data-collapsed="0">
					
						<div class="panel-heading">
							<div class="panel-title">
								Members
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
			
							<div class="form-group">
								<label class="col-sm-5 control-label">Anyone can register</label>
								
								<div class="col-sm-5">
								
									<div class="checkbox checkbox-replace">
										<input type="checkbox" id="chk-1" checked>
									</div>
									
								</div>
							</div>
			
							<div class="form-group">
								<label class="col-sm-5 control-label">Default user role</label>
								
								<div class="col-sm-5">
								
									<select class="form-control">
										<option>Subscriber</option>
										<option>Author</option>
										<option>Editor</option>
										<option>Administrator</option>
									</select>
									
								</div>
							</div>
			
							<div class="form-group">
								<label class="col-sm-5 control-label">New users</label>
								
								<div class="col-sm-5">
								
									<select class="form-control">
										<option>Will have to activate their account (via email)</option>
										<option>Account is automatically activated</option>
									</select>
									
								</div>
							</div>
			
							<div class="form-group">
								<label for="field-5" class="col-sm-5 control-label">Maximum login attempts</label>
								
								<div class="col-sm-5">
								
									<input type="text" name="max_attempts" id="field-5" class="form-control" data-validate="required,number" value="5" />
									
								</div>
							</div>
						
						</div>
						
					</div>
				
				</div>
				
				
				<div class="col-md-6">
					
					<div class="panel panel-primary" data-collapsed="0">
					
						<div class="panel-heading">
							<div class="panel-title">
								Date and Time
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
			
							<div class="form-group">
								<label for="field-3" class="col-sm-5 control-label">Date format</label>
								
								<div class="col-sm-5">
								
									<div class="radio radio-replace">
										<input type="radio" id="rd-1" name="radio1" checked>
										<label>November 04, 2015</label>
									</div>
									
									<div class="radio radio-replace">
										<input type="radio" id="rd-2" name="radio1">
										<label>11/04/2015</label>
									</div>
									
									<div class="radio radio-replace">
										<input type="radio" id="rd-3" name="radio1">
										<label>2015/11/04</label>
									</div>
									
									<div class="radio radio-replace">
										<input type="radio" id="rd-4" name="radio1">
										<label>
											Custom format: 
											<input type="text" class="form-control input-sm form-inline" value="d-m-Y" style="width: 70px; display: inline-block;" />
											<p class="description">Read more about <a href="http://php.net/date" target="_blank">date format</a></p>
										</label>
									</div>
									
								</div>
							</div>
							
						</div>
					
					</div>
				</div>
			</div>
												
			<div class="form-group default-padding">
				<button type="submit" class="btn btn-success">Save Changes</button>
				<button type="reset" class="btn">Reset Previous</button>
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




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>