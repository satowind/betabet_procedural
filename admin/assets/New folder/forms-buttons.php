<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="ui-panels.html">UI Elements</a>
							</li>
						<li class="active">
		
									<strong>Buttons</strong>
							</li>
							</ol>
					<h2>Buttons &amp; Pagination</h2>
		
		<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-default">
				
					<div class="panel-heading">
						<div class="panel-title">Buttons Variations</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						<div><strong>Variations</strong></div>
						
						<p class="bs-example">
							<button type="button" class="btn btn-default">Default</button>
							
							<button type="button" class="btn btn-primary">Primary</button>
							
							<button type="button" class="btn btn-blue">Blue</button>
							
							<button type="button" class="btn btn-red">Red</button>
							
							<button type="button" class="btn btn-orange">Orange</button>
							
							<button type="button" class="btn btn-gold">Gold</button>
							
							<button type="button" class="btn btn-black">Black</button>
							
							<button type="button" class="btn btn-white">White</button>
							
							<button type="button" class="btn btn-success">Success</button>
							
							<button type="button" class="btn btn-info">Info</button>
							
							<button type="button" class="btn btn-warning">Warning</button>
							
							<button type="button" class="btn btn-danger">Danger</button>
							
							<button type="button" class="btn btn-link">Link</button>
						</p>
						
					</div>
					
					<div class="panel-body">
						
						<div class="row">
							<div class="col-md-6">
						
								<div><strong>Sizes</strong></div>
								
								<p class="bs-example bs-baseline-top">
									<button type="button" class="btn btn-default btn-lg">Large</button>
									
									<button type="button" class="btn btn-primary">Normal</button>
									
									<button type="button" class="btn btn-blue btn-sm">Small</button>
									
									<button type="button" class="btn btn-red btn-xs">Extra Small</button>
								</p>
								
							</div>
							
							<div class="col-md-6">
						
								<div><strong>Disabled State</strong></div>
								
								<p class="bs-example">
									<button type="button" class="btn btn-default disabled">Default</button>
									
									<button type="button" class="btn btn-primary disabled">Primary</button>
									
									<button type="button" class="btn btn-blue disabled">Blue</button>
									
									<button type="button" class="btn btn-red disabled">Red</button>
								</p>
								
							</div>
						</div>
						
					</div>
					
					<div class="panel-body">
						<div><strong>Button Blocks</strong></div>
						
						<p class="bs-example bs-baseline-top">
							<button type="button" class="btn btn-primary btn-block">Block 1</button>
							
							<button type="button" class="btn btn-blue btn-block">Block 2</button>
							
							<button type="button" class="btn btn-red btn-block">Block 3</button>
						</p>
						
					</div>
					
				</div>
				
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Buttons Groups &amp; Icons</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close" class="bg"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						
						<p><strong>Button Group Basic</strong></p>
						
						<div class="bs-example bs-baseline-top">
						
							<div class="btn-group">
								<button type="button" class="btn btn-blue btn-lg">Left</button>
								<button type="button" class="btn btn-blue btn-lg">Middle</button>
								<button type="button" class="btn btn-blue btn-lg">Right</button>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-green">Left</button>
								<button type="button" class="btn btn-green">Middle</button>
								<button type="button" class="btn btn-green">Right</button>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-red btn-sm">Left</button>
								<button type="button" class="btn btn-red btn-sm">Middle</button>
								<button type="button" class="btn btn-red btn-sm">Right</button>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-xs">Left</button>
								<button type="button" class="btn btn-default btn-xs">Middle</button>
								<button type="button" class="btn btn-default btn-xs">Right</button>
							</div>
							
						</div>
					
					</div>
					
					<div class="panel-body">	
					
						<p><strong>Single Button Dropdown</strong></p>
						
						<div class="bs-example">
						
							<div class="btn-group">
								<button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
									Action <span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-blue" role="menu">
									<li><a href="#">Action</a>
									</li>
									<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-gold">Right Dropdown</button>
								<button type="button" class="btn btn-gold dropdown-toggle" data-toggle="dropdown">
									<i class="entypo-info"></i>
								</button>
								
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a>
									</li>
									<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							
							<div class="btn-group left-dropdown">
								<button type="button" class="btn btn-green">Left Dropdown</button>
								<button type="button" class="btn btn-green dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								
								<ul class="dropdown-menu dropdown-green" role="menu">
									<li><a href="#">Action</a>
									</li>
									<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a>
									</li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-danger">Download</button>
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
									<i class="entypo-down"></i>
								</button>
								
								<ul class="dropdown-menu dropdown-danger" role="menu">
									<li><a href="#"><i class="entypo-right"></i>PSD Format</a>
									</li>
									<li><a href="#"><i class="entypo-right"></i>JPG Format</a>
									</li>
									<li><a href="#"><i class="entypo-right"></i>GIF Format</a>
									</li>
									<li class="divider"></li>
									<li><a href="#"><i class="entypo-menu"></i>Add to download list</a>
									</li>
								</ul>
							</div>
						
						</div>
					
					</div>
					
					<div class="panel-body">
						
						<p><strong>Button with Icons</strong></p>
						
						<p class="bs-example">
							<button type="button" class="btn btn-red btn-icon">
								Decline
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-green btn-icon">
								Accept
								<i class="entypo-check"></i>
							</button>
							
							<button type="button" class="btn btn-blue btn-icon">
								Search
								<i class="entypo-search"></i>
							</button>
							
							<button type="button" class="btn btn-default btn-icon">
								Add User
								<i class="entypo-user-add"></i>
							</button>
							
							<button type="button" class="btn btn-primary btn-icon">
								Send
								<i class="entypo-mail"></i>
							</button>
							
							<button type="button" class="btn btn-gold btn-icon">
								Cancel
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-info btn-icon">
								Search
								<i class="entypo-search"></i>
							</button>
							
							<button type="button" class="btn btn-warning btn-icon">
								Dimensions
								<i class="entypo-arrow-combo"></i>
							</button>
						</p>
						
						<p><strong>Left aligned icons</strong></p>
						
						<p class="bs-example">
							<button type="button" class="btn btn-red btn-icon icon-left">
								Decline
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-green btn-icon icon-left">
								Accept
								<i class="entypo-check"></i>
							</button>
							
							<button type="button" class="btn btn-blue btn-icon icon-left">
								Search
								<i class="entypo-search"></i>
							</button>
							
							<button type="button" class="btn btn-default btn-icon icon-left">
								Add User
								<i class="entypo-user-add"></i>
							</button>
							
							<button type="button" class="btn btn-primary btn-icon icon-left">
								Send
								<i class="entypo-mail"></i>
							</button>
							
							<button type="button" class="btn btn-gold btn-icon icon-left">
								Cancel
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-info btn-icon icon-left">
								Search
								<i class="entypo-search"></i>
							</button>
							
							<button type="button" class="btn btn-warning btn-icon icon-left">
								Dimensions
								<i class="entypo-arrow-combo"></i>
							</button>
						</p>
						
						<p><strong>Sizes</strong></p>
						
						<p class="bs-example bs-baseline-top">
							<button type="button" class="btn btn-red btn-icon btn-lg">
								Large
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-green btn-icon">
								Normal
								<i class="entypo-check"></i>
							</button>
							
							<button type="button" class="btn btn-blue btn-icon btn-sm">
								Small
								<i class="entypo-search"></i>
							</button>
							
							<button type="button" class="btn btn-default btn-icon btn-xs">
								Extra Small
								<i class="entypo-user-add"></i>
							</button>
						</p>
						
					</div>
					
					<div class="panel-body">
						
						<p><strong>Icon Only</strong></p>
						
						<p class="bs-example">
							<button type="button" class="btn btn-danger">
								<i class="entypo-cancel"></i>
							</button>
							
							<button type="button" class="btn btn-success">
								<i class="entypo-check"></i>
							</button>
							
							<button type="button" class="btn btn-info">
								<i class="entypo-info"></i>
							</button>
							
							<button type="button" class="btn btn-gold">
								<i class="entypo-heart"></i>
							</button>
							
							<button type="button" class="btn btn-orange">
								<i class="entypo-note"></i>
							</button>
							
							<button type="button" class="btn btn-black">
								<i class="entypo-down"></i>
							</button>
							
							<button type="button" class="btn btn-white">
								<i class="entypo-trash"></i>
							</button>
						</p>
					
					</div>
				</div>
			
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary">
				
					<div class="panel-body">
						
						<h5>Button Toggles - Toolbars</h5>
						
						<div class="bs-example">
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-white">
									<input type="checkbox">Left
								</label>
								<label class="btn btn-white">
									<input type="checkbox">Middle
								</label>
								<label class="btn btn-white">
									<input type="checkbox">Right
								</label>
							</div>
							
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-white">
									<input type="radio" name="options" id="option1"><i class="glyphicon glyphicon-align-justify"></i>
								</label>
								<label class="btn btn-white">
									<input type="radio" name="options" id="option2"><i class="glyphicon glyphicon-align-left"></i>
								</label>
								<label class="btn btn-white">
									<input type="radio" name="options" id="option3"><i class="glyphicon glyphicon-align-right"></i>
								</label>
								<label class="btn btn-white">
									<input type="radio" name="options" id="option3"><i class="glyphicon glyphicon-align-center"></i>
								</label>
							</div>
							
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-white">
									<input type="checkbox"><i class="glyphicon glyphicon-font"></i>
								</label>
								<label class="btn btn-white">
									<input type="checkbox"><i class="glyphicon glyphicon-italic"></i>
								</label>
								<label class="btn btn-white">
									<input type="checkbox"><i class="glyphicon glyphicon-bold"></i>
								</label>
								<label class="btn btn-white">
									<input type="checkbox"><i class="glyphicon glyphicon-text-width"></i>
								</label>
							</div>
							
							<button type="button" data-loading-text="Loading..." class="btn btn-red">
								Loading state
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
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
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>