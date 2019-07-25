<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Timeline</strong>
							</li>
							</ol>
					
		<h2>Timeline</h2>
		<br />
		
		<ul class="cbp_tmtimeline">
			<li>
				<time class="cbp_tmtime" datetime="2015-11-04T18:30"><span class="hidden">04/11/2015</span> <span class="large">Now</span></time>
				
				<div class="cbp_tmicon">
					<i class="entypo-user"></i>
				</div>
				
				<div class="cbp_tmlabel empty">
					<span>No Activity</span>
				</div>
			</li>
			
			<li>
				<time class="cbp_tmtime" datetime="2015-11-04T03:45"><span>03:45 AM</span> <span>Today</span></time>
				
				<div class="cbp_tmicon bg-success">
					<i class="entypo-feather"></i>
				</div>
				
				<div class="cbp_tmlabel">
					<h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
					<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
				</div>
			</li>
			
			<li>
				<time class="cbp_tmtime" datetime="2015-11-03T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>
				
				<div class="cbp_tmicon bg-secondary">
					<i class="entypo-suitcase"></i>
				</div>
				
				<div class="cbp_tmlabel">
					<h2><a href="#">Job Meeting</a></h2>
					<p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
				</div>
			</li>
			
			<li>
				<time class="cbp_tmtime" datetime="2015-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
				
				<div class="cbp_tmicon bg-info">
					<i class="entypo-location"></i>
				</div>
				
				<div class="cbp_tmlabel">
					<h2><a href="#">Arlind Nushi</a> <span>checked in at</span> <a href="#">Laborator</a></h2>
					
					<blockquote>Great place, feeling like in home.</blockquote>
					
					<div id="sample-checkin" class="map-checkin" style="height: 170px; width: 100%;"></div>
				</div>
			</li>
			
			<li>
				<time class="cbp_tmtime" datetime="2015-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
				
				<div class="cbp_tmicon bg-warning">
					<i class="entypo-camera"></i>
				</div>
				
				<div class="cbp_tmlabel">
					<h2><a href="#">Eroll Maxhuni</a> <span>uploaded</span> 12 <span>new photos to album</span> <a href="#">Summer Trip</a></h2>
					
					<blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
					
					<div class="row">
						<div class="col-xs-5">
							<a href="#">
								<img src="assets/images/timeline-image-1.png" class="img-responsive img-rounded full-width" />
							</a>
						</div>
						
						<div class="col-xs-3">
							<a href="#">
								<img src="assets/images/timeline-image-1.png" class="img-responsive img-rounded full-width" />
							</a>
						</div>
						
						<div class="col-xs-4">
							
							<a href="#">
								<img src="assets/images/timeline-image-1.png" class="img-responsive img-rounded full-width margin-bottom" />
							</a>
							
							<a href="#">
								<img src="assets/images/timeline-image-1.png" class="img-responsive img-rounded full-width" />
							</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
		
		
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
		function initialize()
		{
			var $ = jQuery,
				map_canvas = $("#sample-checkin");
			
			var location = new google.maps.LatLng(36.738888, -119.783013),
				map = new google.maps.Map(map_canvas[0], {
				center: location,
				zoom: 14,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false
			});
			
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
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





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/vertical-timeline/css/component.css">

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