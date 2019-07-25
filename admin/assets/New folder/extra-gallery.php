<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Gallery</strong>
							</li>
							</ol>
					
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Handle the Change Cover
			$(".gallery-env").on("click", ".album header .album-options", function(ev)
			{
				ev.preventDefault();
				
				// Sample Modal
				$("#album-cover-options").modal('show');
				
				// Sample Crop Instance
				var image_to_crop = $("#album-cover-options .croppable-image img"),
					img_load = new Image();
				
				img_load.src = image_to_crop.attr('src');
				img_load.onload = function()
				{
					if(image_to_crop.data('loaded'))
						return false;
						
					image_to_crop.data('loaded', true);
					
					image_to_crop.Jcrop({
						boxWidth: 410,
						boxHeight: 265,
						onSelect: function(cords)
						{
							// you can use these vars to save cropping of the image coordinates
							var h = cords.h,
								w = cords.w,
								
								x1 = cords.x,
								x2 = cords.x2,
								
								y1 = cords.w,
								y2 = cords.y2;
							
						}
					}, function()
					{
						var jcrop = this;
						
						jcrop.animateTo([800, 600, 150, 50]);
					});
				}
			});
		});
		</script>
		
		<div class="gallery-env">
		
			<div class="row">
			
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								55
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								27
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								43
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
			
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								18
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								67
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								8
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
			
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								25
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								19
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
				</div>
				
				<div class="col-sm-4">
					
					<article class="album">
						
						<header>
							
							<a href="extra-gallery-single.html">
								<img src="assets/images/album-thumb-1.jpg" />
							</a>
							
							<a href="#" class="album-options">
								<i class="entypo-cog"></i>
								Change Cover
							</a>
						</header>
						
						<section class="album-info">
							<h3><a href="extra-gallery-single.html">Album Title</a></h3>
							
							<p>Can curiosity may end shameless explained. True high on said mr on come. </p>
						</section>
						
						<footer>
							
							<div class="album-images-count">
								<i class="entypo-picture"></i>
								14
							</div>
							
							<div class="album-options">
								<a href="#">
									<i class="entypo-cog"></i>
								</a>
								
								<a href="#">
									<i class="entypo-trash"></i>
								</a>
							</div>
							
						</footer>
						
					</article>
					
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

<!-- Album Cover Settings Modal -->
<div class="modal fade custom-width" id="album-cover-options">
	<div class="modal-dialog" style="width: 65%;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit: <strong>Album Title</strong></h4>
			</div>
			
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-6">
										
						<div class="row">
							<div class="col-md-12">
								
								<h4 class="margin-top-none">Crop Image</h4>
								
								<div class="croppable-image">
									<img src="assets/images/sample-crop.jpg" class="img-responsive" />
								</div>
								
							</div>
						</div>
						
					</div>
					
					<div class="col-sm-6">
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Title</label>
									
									<input type="text" class="form-control" id="field-1" placeholder="Enter album title">
								</div>	
								
							</div>
						</div>
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Tags</label>
									
									<input type="text" class="form-control" id="field-3" placeholder="Tags">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Description</label>
									
									<textarea class="form-control autogrow" id="field-2" placeholder="Enter album description" style="min-height: 120px;"></textarea>
								</div>	
								
							</div>
						</div>
						
					</div>
				</div>
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Apply Changes
				</button>
			</div>
		</div>
	</div>
</div>


<!-- Album Image Settings Modal -->
<div class="modal fade" id="album-image-options">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="gallery-image-edit-env">
				<img src="assets/images/sample-crop-1.png" class="img-responsive" />
				
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			
			<div class="modal-body">
			
					
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Title</label>
									
									<input type="text" class="form-control" id="field-1" placeholder="Enter image title">
								</div>	
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								
								<div class="form-group">
									<label for="field-1" class="control-label">Description</label>
									
									<textarea class="form-control autogrow" id="field-2" placeholder="Enter image description" style="min-height: 80px;"></textarea>
								</div>	
								
							</div>
						</div>
						
				
				
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-icon">
					<i class="entypo-check"></i>
					Apply Changes
				</button>
			</div>
		</div>
	</div>
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