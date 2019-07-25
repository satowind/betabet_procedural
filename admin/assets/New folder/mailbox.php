<?php include './includes/header.php' ?>
		
		<div class="mail-env">
		
			<!-- compose new email button -->
			<div class="mail-sidebar-row visible-xs">
				<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
					Compose Mail
					<i class="entypo-pencil"></i>
				</a>
			</div>
			
			
			<!-- Mail Body -->
			<div class="mail-body">
				
				<div class="mail-header">
					<!-- title -->
					<h3 class="mail-title">
						Inbox
						<span class="count">(6)</span>
					</h3>
					
					<!-- search -->
					<form method="get" role="form" class="mail-search">
						<div class="input-group">
							<input type="text" class="form-control" name="s" placeholder="Search for mail..." />
							
							<div class="input-group-addon">
								<i class="entypo-search"></i>
							</div>
						</div>
					</form>
				</div>
				
				
				<!-- mail table -->
				<table class="table mail-table">
					<!-- mail table header -->
					<thead>
						<tr>
							<th width="5%">
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</th>
							<th colspan="4">
								
								<div class="mail-select-options">Mark as Read</div>
								
								<div class="mail-pagination" colspan="2">
									<strong>1-30</strong> <span>of 789</span>
									
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
										<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
									</div>
								</div>
							</th>
						</tr>
					</thead>
					
					<!-- email list -->
					<tbody>
						<tr class="unread"><!-- new email class: unread -->
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Facebook</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Reset your account password
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">13:52</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Google AdWords</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Google AdWords: Ads not serving
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">09:27</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Apple.com</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-danger">Business</span>
									Your apple account ID has been accessed from un-familiar location.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">Today</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">World Weather Online</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Over Throttle Alert
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">Yesterday</td>
						</tr>
						
						<tr class="unread">
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Dropbox</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Complete your Dropbox setup!
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">4 Dec</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Arlind Nushi</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-warning">Friends</span>
									Work progress for Neon Project
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">28 Nov</td>
						</tr>
						
						<tr class="unread"><!-- new email class: unread -->
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Jose D. Gardner</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Regarding to your website issues.
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">22 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Aurelio D. Cummins</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Steadicam operator
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">15 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Filan Fisteku</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									You are loosing clients because your website is not responsive.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">02 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Instagram</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Instagram announces the new video uploadin feature.
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">26 Oct</td>
						</tr>
						
						<tr class="unread">
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">James Blue</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-info">Sports</span>
									There are 20 notifications
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">18 Oct</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">SomeHost</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Bugs in your system.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">01 Sep</td>
						</tr>
						
						<tr class="unread"><!-- new email class: unread -->
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Facebook</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Reset your account password
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">13:52</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Google AdWords</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Google AdWords: Ads not serving
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">09:27</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Apple.com</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-danger">Business</span>
									Your apple account ID has been accessed from un-familiar location.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">Today</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">World Weather Online</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Over Throttle Alert
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">Yesterday</td>
						</tr>
						
						<tr class="unread">
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Dropbox</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Complete your Dropbox setup!
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">4 Dec</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Arlind Nushi</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-warning">Friends</span>
									Work progress for Neon Project
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">28 Nov</td>
						</tr>
						
						<tr class="unread"><!-- new email class: unread -->
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star stared">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Jose D. Gardner</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Regarding to your website issues.
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">22 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Aurelio D. Cummins</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Steadicam operator
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">15 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Filan Fisteku</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									You are loosing clients because your website is not responsive.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">02 Nov</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">Instagram</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Instagram announces the new video uploadin feature.
								</a>
							</td>
							<td class="col-options">
								<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
							</td>
							<td class="col-time">26 Oct</td>
						</tr>
						
						<tr class="unread">
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">James Blue</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									<span class="label label-info">Sports</span>
									There are 20 notifications
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">18 Oct</td>
						</tr>
						
						<tr>
							<td>
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</td>
							<td class="col-name">
								<a href="#" class="star">
									<i class="entypo-star"></i>
								</a>
								<a href="mailbox-message.html" class="col-name">SomeHost</a>
							</td>
							<td class="col-subject">
								<a href="mailbox-message.html">
									Bugs in your system.
								</a>
							</td>
							<td class="col-options"></td>
							<td class="col-time">01 Sep</td>
						</tr>
					</tbody>
					
					<!-- mail table footer -->
					<tfoot>
						<tr>
							<th width="5%">
								<div class="checkbox checkbox-replace">
									<input type="checkbox" />
								</div>
							</th>
							<th colspan="4">
								
								<div class="mail-pagination" colspan="2">
									<strong>1-30</strong> <span>of 789</span>
									
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
										<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
									</div>
								</div>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>
			
			<!-- Sidebar -->
			<div class="mail-sidebar">
				
				<!-- compose new email button -->
				<div class="mail-sidebar-row hidden-xs">
					<a href="mailbox-compose.html" class="btn btn-success btn-icon btn-block">
						Compose Mail
						<i class="entypo-pencil"></i>
					</a>
				</div>
				
				<!-- menu -->
				<ul class="mail-menu">
					<li class="active">
						<a href="#">
							<span class="badge badge-danger pull-right">6</span>
							Inbox
						</a>
					</li>
					
					<li>
						<a href="#">
							<span class="badge badge-gray pull-right">1</span>
							Sent
						</a>
					</li>
					
					<li>
						<a href="#">
							Drafts
						</a>
					</li>
					
					<li>
						<a href="#">
							<span class="badge badge-gray pull-right">1</span>
							Spam
						</a>
					</li>
					
					<li>
						<a href="#">
							Trash
						</a>
					</li>
				</ul>
				
				<div class="mail-distancer"></div>
				
				<h4>Tags</h4>
				
				<!-- menu -->
				<ul class="mail-menu">
					<li>
						<a href="#">
							<span class="badge badge-danger badge-roundless pull-right"></span>
							Business
						</a>
					</li>
					
					<li>
						<a href="#">
							<span class="badge badge-info badge-roundless pull-right"></span>
							Sports
						</a>
					</li>
					
					<li>
						<a href="#">
							<span class="badge badge-warning badge-roundless pull-right"></span>
							Friends
						</a>
					</li>
				</ul>
				
			</div>
			
		</div>
		
		<hr />
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
	<script src="assets/js/neon-mail.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>