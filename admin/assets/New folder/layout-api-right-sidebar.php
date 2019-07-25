<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="layout-api.html">Layouts</a>
							</li>
						<li class="active">
		
									<strong>Layout API</strong>
							</li>
							</ol>
					
		<div class="jumbotron">
			<h1>Layout API</h1>
		
			<p>
				Neon Theme comes with pre-defined functions to handle layout behaviors. You have tens of options to make your theme layout look differently.
				In this page, you are going to see how you can show, hide, remove or add layout elements. In order to customize the layer JS file <code>neon-api.js</code> is required to load.
			</p>
		
			<p>
				<br />
				<a class="btn btn-primary btn-lg" href="#api" role="button">Go to API Functions</a>
		
					</p>
		</div>
		
		
		<div class="row">
		
			<div class="col-md-6">
		
				<h3>Sidebar Collapsing</h3>
		
				<p>
					Its easy to use, you just have to call one function <code>toggle_sidebar_menu(animate)</code>.
				</p>
		
				<a href="javascript: toggle_sidebar_menu(false);" class="btn btn-default">Toggle Sidebar</a>
		
				<a href="javascript: show_sidebar_menu(false);" class="btn btn-default">Force Show Sidebar</a>
		
				<a href="javascript: hide_sidebar_menu(false);" class="btn btn-default">Force Hide Sidebar</a>
		
				<br />
				<br />
		
				<h4>With Animation</h4>
		
				<p>You may apply animation to these functions by sending <code>animate</code> parameter as <strong>true</strong>, see it in action:</p>
		
		
				<a href="javascript: toggle_sidebar_menu(true);" class="btn btn-default">Toggle Sidebar w/ Animation</a>
		
				<a href="javascript: show_sidebar_menu(true);" class="btn btn-default">Force Show Sidebar</a>
		
				<a href="javascript: hide_sidebar_menu(true);" class="btn btn-default">Force Hide Sidebar</a>
		
				<br />
				<br />
		
				<h4>Incorporating Chat API</h4>
		
				<p>This functions can be used only when you have included Chat on your theme.</p>
		
				<a href="#" class="btn btn-default" data-toggle="chat" data-collapse-sidebar="1">Toggle Chat + Sidebar</a>
				<a href="#" class="btn btn-default" data-toggle="chat" data-collapse-sidebar="1" data-animate="1">Toggle Chat + Sidebar w/ Animation</a>
		
				<br />
				<br />
				For more options about <strong>Chat API</strong> and see how to implement it <a href="extra-chat-api.html">click here</a> to read more.
			</div>
		
			<div class="col-md-6">
		
				<h3>See how its implemented</h3>
		
				<strong>Code for Toggle Sidebar</strong>
				<pre>toggle_sidebar_menu(false);</pre>
		
				<br />
		
				<strong>Code for Force Show Sidebar</strong>
				<pre>show_sidebar_menu(false);</pre>
		
				<br />
		
				<strong>Code for Force Hide Sidebar</strong>
				<pre>hide_sidebar_menu(false);</pre>
		
				<br />
		
				<strong>Code for Toggle Sidebar w/ Animation</strong>
				<pre>toggle_sidebar_menu(true);</pre>
		
				<br />
		
				<strong>Code for Force Show Sidebar (animation)</strong>
				<pre>show_sidebar_menu(true);</pre>
		
				<br />
		
				<strong>Code for Force Hide Sidebar (animation)</strong>
				<pre>hide_sidebar_menu(true);</pre>
		
				<br />
		
			</div>
		
		</div>
		<br />
		
		
		
		<div class="row">
			<div class="col-md-6">
				<h3 id="markup">Markup</h3>
		
				<p>Layout Markup is applied for one reason: <strong>To enable the sidebar collapsing/expanding</strong>. The symbol <i class="entypo-menu"></i> next to the logo applies this markup:</p>
		
				<pre>&lt;!-- logo collapse icon --&gt;
		&lt;div class=&quot;sidebar-collapse&quot;&gt;
			&lt;a href=&quot;#&quot; class=&quot;sidebar-collapse-icon with-animation&quot;&gt;&lt;!-- add class &quot;with-animation&quot; if you want sidebar to have animation during expanding/collapsing transition --&gt;
				&lt;i class=&quot;entypo-menu&quot;&gt;&lt;/i&gt;
			&lt;/a&gt;
		&lt;/div&gt;</pre>
		
		
				<p>If you remove this markup, users will not be able to handle the sidebar visibility, its up to you to decide whether to insert or remove this feature.</p>
		
			</div>
		
			<div class="col-md-6">
				<h3>Layout Variants</h3>
		
				<ul>
					<li>
						<a href="layout-collapsed-sidebar.html" target="_blank"><strong>Collapsed Sidebar</strong></a>
					</li>
					<li>
						<a href="layout-chat-open.html" target="_blank"><strong>Collapsed Sidebar &amp; Chat Opened</strong></a>
					</li>
					<li>
						<a href="layout-sidebar-chat-open.html" target="_blank"><strong>Expanded Sidebar &amp; Chat Opened</strong></a>
					</li>
					<li>
						<a href="layout-sidebar-static.html" target="_blank"><strong>Expanded Sidebar without Collapse Feature</strong></a>
					</li>
					<li>
						<a href="layout-horizontal-menu-chat.html" target="_blank"><strong>Horizontal Menu &amp; Chat Opened</strong></a>
					</li>
					<li>
						<a href="layout-sidebar-static.html" target="_blank"><strong>Fixed Sidebar</strong></a>
					</li>
					<li>
						<a href="layout-mixed-menus.html" target="_blank"><strong>Both Menus</strong></a>
					</li>
					<li>
						<a href="layout-mixed-menus-logo-fit.html" target="_blank"><strong>Both Menus &amp; Logo Width Fit with Sidebar</strong></a>
					</li>
					<li>
						<a href="layout-mixed-menus-collapsed.html" target="_blank"><strong>Both Menus &amp; Collapsed Sidebar</strong></a>
					</li>
		
					<!-- v1.5 -->
					<li>
						<a href="layout-right-sidebar.html" target="_blank"><strong>Right Sidebar</strong> <span class="badge badge-warning">New</span></a>
					</li>
					<li>
						<a href="layout-right-sidebar-collapsed.html" target="_blank"><strong>Right Sidebar Collapsed</strong> <span class="badge badge-warning">New</span></a>
					</li>
					<li>
						<a href="layout-right-sidebar-chat.html" target="_blank"><strong>Right Sidebar + Chat Visible</strong> <span class="badge badge-warning">New</span></a>
					</li>
					<li>
						<a href="layout-both-menus-right-sidebar.html" target="_blank"><strong>Both Menus (Right Sidebar)</strong> <span class="badge badge-warning">New</span></a>
					</li>
					<li>
						<a href="layout-both-menus-right-sidebar-collapsed.html" target="_blank"><strong>Both Menus (Right Sidebar Collapsed)</strong> <span class="badge badge-warning">New</span></a>
					</li>
					<li>
										<a href="layout-boxed.html" target="_blank"><strong>Boxed Layout</strong> <span class="badge badge-warning">New</span></a>
					</li>
				</ul>
		
			</div>
		</div>
		
		
		
		
		<br />
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<h3 id="api">API Functions</h3>
		
		
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
								<h4>show_sidebar_menu(animate)</h4>
							</td>
							<td class="middle-align">
								Shows left sidebar (if not already shown) and if you have specified the parameter <code>animate</code> as <code>true</code> will apply smooth animation on transition.
							</td>
						</tr>
		
		
						<tr>
							<td>
								<h4>hide_sidebar_menu(animate)</h4>
							</td>
							<td class="middle-align">
								Hide left sidebar (if not already hidden) and if you have specified the parameter <code>animate</code> as <code>true</code> will apply smooth animation on transition.
							</td>
						</tr>
		
		
						<tr>
							<td>
								<h4>toggle_sidebar_menu(animate)</h4>
							</td>
							<td class="middle-align">
								Will use the two above functions, but firstly it will decide on their current state. The <code>animated</code> parameter will simply be passed to the respective functions.
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