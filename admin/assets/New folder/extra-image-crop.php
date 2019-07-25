<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Image Crop</strong>
							</li>
							</ol>
					<h2>Image Crop</h2>
		<br />
		
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Example 1 - Simple case
			$("#jcrop-1").Jcrop({}, function()
			{
				this.setSelect([580, 310, 320, 140]);
			});
			
			// Example 2 - Coordinates Fetch
			$("#jcrop-2").Jcrop({
				onSelect: showCoords,
				onChange: showCoords
			});
			
			function showCoords(c)
			{
				$('#jc2-x1').val(c.x);
				$('#jc2-y1').val(c.y);
				$('#jc2-x2').val(c.x2);
				$('#jc2-y2').val(c.y2);
				$('#jc2-w').val(c.w);
				$('#jc2-h').val(c.h);
			}
			
			
			// Example 3 - crop the thumbnail
			var img_3_w = $("#jcrop-3").width(),
				img_3_h = $("#jcrop-3").height();
			
			$('#jcrop-3').Jcrop({
				onChange: showPreview,
				onSelect: showPreview,
				aspectRatio: 1
			}, function()
			{
				this.setSelect([200, 200, 120, 40]);
			});
			function showPreview(coords)
			{
				var rx = 150 / coords.w;
				var ry = 150 / coords.h;
			
				$('#preview').css({
					width: Math.round(rx * img_3_w) + 'px',
					height: Math.round(ry * img_3_h) + 'px',
					marginLeft: '-' + Math.round(rx * coords.x) + 'px',
					marginTop: '-' + Math.round(ry * coords.y) + 'px'
				});
			}
			
			// Example 4 - Live Crop
			$('#jcrop-4').Jcrop({
		      aspectRatio: 1,
		      onSelect: updateCoords,
		      boxWidth: 1080,
		      boxHeight: 450
		    });
		    
			function updateCoords(c)
			{
				$('#x').val(c.x);
				$('#y').val(c.y);
				$('#w').val(c.w);
				$('#h').val(c.h);
			};
		});
		</script>
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Simple Image Crop
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						
						
						<div class="thumbnail-highlight">
							<img id="jcrop-1" src="assets/images/crop-1.jpg" class="img-responsive img-rounded" />
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
							Fetching Coorditanes
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						
						
						<div class="thumbnail-highlight">
							<img id="jcrop-2" src="assets/images/crop-1.jpg" class="img-responsive img-rounded" />
						</div>
						
					</div>
					
					<div class="panel-body">
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Crop Width" id="jc2-w" />
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Crop Height" id="jc2-h" />
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="X1" id="jc2-x1" />
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Y1" id="jc2-y1" />
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="X2" id="jc2-x2" />
						</div>
						
						<div class="form-group padding-bottom-none">
							<input type="text" class="form-control" placeholder="Y2" id="jc2-y2" />
						</div>
						
					</div>
					
				</div>
			
			</div>
			
			<div class="col-md-6">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Fetching Coorditanes
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						
						
						<div class="thumbnail-highlight">
							<img id="jcrop-3" src="assets/images/crop-1.jpg" class="img-responsive img-rounded" />
						</div>
						
					</div>
					
					<div class="panel-body">
						
						<h4>Thumbnail Preview</h4>
						
						<div style="width:150px; height:150px; overflow:hidden;" class="thumbnail-highlight">
							<img src="assets/images/crop-1.jpg" class="img-rounded" id="preview" />
						</div>
					</div>
					
				</div>
			
			</div>
		</div>
		
		
		
		
		<div class="row">
			
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Demo Crop
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
									
					<div class="panel-body">
						
						<div class="thumbnail-highlight">
							<img id="jcrop-4" src="assets/images/crop-1.jpg" class="img-responsive img-rounded" />
						</div>
					
					</div>
					
					<div class="panel-body">
					
						<form action="data/image-crop.php" method="post" onsubmit="return checkCoords();" target="_blank">
							<input type="hidden" id="x" name="x" />
							<input type="hidden" id="y" name="y" />
							<input type="hidden" id="w" name="w" />
							<input type="hidden" id="h" name="h" />
							<input type="submit" value="Crop Image" class="btn btn-large btn-primary" />
						</form>
						
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





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jcrop/jquery.Jcrop.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jcrop/jquery.Jcrop.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>