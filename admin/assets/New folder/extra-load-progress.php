<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>File Tree</strong>
							</li>
							</ol>
					<h2>Page Loading Bar</h2>
		
		<br />
		
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="25%">Example, Live Preview</th>
					<th>Usage Directions</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td align="center" class="middle-align">
						<a href="javascript:;" onclick="show_loading_bar(100);" class="btn btn-info">Load to 100%</a>
					</td>
					<td>
						Will show progress bar in the header that will load to 100% and will automatically be hidden.
						Delay for this animation is 1.3 seconds.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar(100);</pre>
					</td>
				</tr>
				
				<tr>
					<td align="center" class="middle-align">
						<a href="javascript:;" onclick="show_loading_bar(65);" class="btn btn-info">Load to 65%</a>
					</td>
					<td>
						Will fill the progress bar to 65% and will stop.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar(65);</pre>
					</td>
				</tr>
				
				<tr>
					<td align="center" class="middle-align">
						<a href="javascript:;" onclick="show_loading_bar(20);" class="btn btn-info">Load to 20%</a>
					</td>
					<td>
						Regression sample, will work if you have already loaded progress to 65% in this case.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar(20);</pre>
					</td>
				</tr>
				
				<tr>
					<td align="center" class="middle-align">
						<a href="#" id="progress-cb-test" class="btn btn-info">Callback Test (Finish)</a>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#progress-cb-test").click(function(ev)
								{
									ev.preventDefault();
									
									show_loading_bar({
										pct: 78,
										finish: function(pct)
										{
											alert("Progress stopped to: " + pct + '%');
											hide_loading_bar();
										}
									});
								});
							});
						</script>
					</td>
					<td>
						An example how you can trigger specific function after the progress bar reaches the end of given percentage.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar({
			pct: 78,
			finish: function(pct)
			{
				alert("Progress stopped to: " + pct + '%');
				hide_loading_bar();
			}
		});</pre>
					</td>
				</tr>
				
				<tr>
					<td align="center" class="middle-align">
						<a href="#" id="progress-cb-test-before" class="btn btn-info">Callback Test (Before)</a>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#progress-cb-test-before").click(function(ev)
								{
									ev.preventDefault();
									
									show_loading_bar({
										pct: 78,
										delay: 5,
										before: function(pct)
										{
											alert("Progress bar initialized");
										}
									});
								});
							});
						</script>
					</td>
					<td>
						An example how you can trigger specific function before the progress bar starts loading. You can also apply both callbacks on finish and before.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar({
			pct: 78,
			delay: 5,
			before: function(pct)
			{
				alert("Progress bar initialized");
			}
		});</pre>
					</td>
				
				<tr>
					<td align="center" class="middle-align">
						<a href="#" id="progress-advanced" class="btn btn-info">More Advanced Example</a>
						
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#progress-advanced").click(function(ev)
								{
									ev.preventDefault();
									
									show_loading_bar({
										pct: 78,
										delay: 1.2,
										finish: function(pct)
										{
											show_loading_bar({
												pct: 30,
												delay: 1.7,
												wait: .5,
												finish: function()
												{
													show_loading_bar({
														wait: .5,
														pct: 100
													})
												}
											});
										}
									});
								});
							});
						</script>
					</td>
					<td>
						Partial loading of the progress bar, this will create several animation instances and can be used in case if you request more than one HTTP request. See the example below.
						
						<br />
						<br />
						Sample code: <br />
						<pre>show_loading_bar({
			pct: 78,
			delay: 1.2,
			finish: function(pct)
			{
				show_loading_bar({
					pct: 30,
					delay: 1.7,
					wait: .5,
					finish: function()
					{
						show_loading_bar({
							wait: .5,
							pct: 100
						})
					}
				});
			}
		});</pre>
					</td>
				</tr>
			</tbody>
			
		</table>
		
		
		
		<div class="row">
			<div class="col-md-12">
				<h2>API Functions</h2>
				
				
				<!-- API Functions -->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Function Name</th>
							<th>Description and Usage Details</th>
						</tr>
					</thead>
					<tbody>
						
						
						<tr>
							<td>
								<h4>show_loading_bar(options|percentage)</h4>
							</td>
							<td class="middle-align">
								This function will show the progress bar in the upper part of window, and can be called in two ways:
								
								<br />
								<br />
								1. Percentage - Simply fills the progress bar but do not do any action: <br />
								
								<pre>show_loading_bar(100);</pre>
								
								<br />
								<br />
								2. Options - Its more flexible than the percentage, because here you can adjust delay, wait time, percentage and assign events (before and finish).
								
								<br />
								<br />
								Example:
								<br />
								<pre>show_loading_bar({
			pct: 100, // number from 0-100,
			delay: 1.3, // seconds to fully load the percentage (seconds unit)
			wait: 0, // before starting loading will wait for specified seconds (seconds unit)
			before: function(pct){ ... }, // Before starting to fill the progress, this function will be called,
			finish: function(pct){ ... }, // After the progress bar finishes loading the specified percentage,
			resetOnEnd: true // Will set the percentage to 0 and will be hidden after the progress bar hits 100%
		});</pre>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>hide_loading_bar()</h4>
							</td>
							<td class="middle-align">
								Simply hides the progress bar even if it is currently in progress.
							</td>
						</tr>
					
					</tbody>
				
				</table>
				
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