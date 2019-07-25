<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="forms-main.html">Forms</a>
							</li>
						<li class="active">
		
									<strong>Input Masks</strong>
							</li>
							</ol>
					
		<h2>Input Masks</h2>
		<br />
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Fields are not required, but you cannot type something different than the applied rule.
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Numeric Mask</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="999" placeholder="Three Numbers" />
							<br />
							<input type="text" class="form-control" data-mask="9999" data-numeric="true" data-numeric-align="right" placeholder="Four Numbers Right" />
							<br />
							<input type="text" class="form-control" data-mask="decimal" placeholder="Decimal" />
							<br />
							<input type="text" class="form-control" data-mask="fdecimal" placeholder="Formatted Decimal" data-dec="," data-rad="." maxlength="10" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="date" />
							
							<br />
							
							<input type="text" class="form-control" data-mask="d/m/y" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Time</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="datetime" />
							
							<br />
							
							<input type="text" class="form-control" data-mask="datetime12" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="email" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="phone" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Currency</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="currency" data-sign="€" />
							<br />
							<input type="text" class="form-control" data-mask="rcurrency" data-sign="$" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Custom Formatting</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" data-mask="@\w+" data-is-regex="true" placeholder="@username" />
							<br />
							<input type="text" class="form-control" data-mask="09-999-AA" placeholder="Kosovo Plate Format - 09-999-AA" />
							<br />
							<input type="text" class="form-control" data-mask="[A-Z][a-z][A-Z][a-z][A-Z][a-z][A-Z][a-z][A-Z][a-z]" data-is-regex="true" placeholder="Advanced Regex - One upper case, one lower case." />
						</div>
					</div>
					
				</form>
				
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
	<script src="assets/js/jquery.inputmask.bundle.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>