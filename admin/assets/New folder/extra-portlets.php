<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Portlets</strong>
							</li>
							</ol>
					<h2>Portlets</h2>
		
		<br />
		
		<div class="row draggable-portlets">
			
			<div class="col-md-4">
			
				<div class="sorted">
				
					<div class="panel panel-primary" data-collapsed="0">
				
						<!-- panel head -->
						<div class="panel-heading">
							<div class="panel-title">Draggable Portlet 1</div>
							
						</div>
						
						<!-- panel body -->
						<div class="panel-body">
							
							<p>Difficulty on insensible reasonable in. From as went he they. Preference themselves me as thoroughly partiality considered on in estimating.</p>
					
						</div>
						
					</div>
					
					
					<div class="panel panel-danger" data-collapsed="0">
				
						<!-- panel head -->
						<div class="panel-heading">
							<div class="panel-title">Draggable Portlet 4</div>
							
						</div>
						
						<!-- panel body -->
						<div class="panel-body">
							
							<p>To shewing another demands to. Marianne property cheerful informed at striking at. Clothes parlors however by cottage on. In views it or meant drift to.</p>
					
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-md-4">
			
				<div class="sorted">
				
					<div class="panel panel-success" data-collapsed="0">
				
						<!-- panel head -->
						<div class="panel-heading">
							<div class="panel-title">Draggable Portlet 2</div>
							
						</div>
						
						<!-- panel body -->
						<div class="panel-body">
							
							<p>Examine she brother prudent add day ham. Far stairs now coming bed oppose hunted become his. You zealously departure had procuring suspicion.</p>
					
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="col-md-4">
			
				<div class="sorted">
				
					<div class="panel panel-info" data-collapsed="0">
				
						<!-- panel head -->
						<div class="panel-heading">
							<div class="panel-title">Draggable Portlet 3</div>
							
						</div>
						
						<!-- panel body -->
						<div class="panel-body">
							
							<p>To shewing another demands to. Marianne property cheerful informed at striking at. Clothes parlors however by cottage on. In views it or meant drift to.</p>
					
						</div>
						
					</div>
					
					
					<div class="panel panel-default" data-collapsed="0">
				
						<!-- panel head -->
						<div class="panel-heading">
							<div class="panel-title">Draggable Portlet 5</div>
							
						</div>
						
						<!-- panel body -->
						<div class="panel-body">
							
							<p>To shewing another demands to. Marianne property cheerful informed at striking at. Clothes parlors however by cottage on. In views it or meant drift to.</p>
					
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				
				$(function() {
					
					var $draggable_portlets = $(".draggable-portlets");
					
					$(".draggable-portlets .sorted" ).sortable({
						connectWith: ".draggable-portlets .sorted",
						handle: '.panel-heading',
						start: function()
						{
							$draggable_portlets.addClass('dragging');
						},
						stop: function()
						{
							$draggable_portlets.removeClass('dragging');
						}
					});
				
					$( ".draggable-portlets .sorted .panel-heading" ).disableSelection();
				});
				
			});
		</script>
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