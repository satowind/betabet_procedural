<!-- **********************************************************************************************
							designed by	satoseries an optisoft project

		 			    optisoft official website -> https://optisoft.ng/


					  satoseries github repo -> https://github.com/satowind

							****************************************

	 				 satoseries twitter page -> https://twitter.com/Satowind

				  satoseries facebook page -> https://www.facebook.com/satoseries
	  
	 	 satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
	************************************************************************************************ -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link href="../images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

	<title>BetaBET admin</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>
	

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style>
	input[type=text]:focus {
    background-color: lightblue;
    
    
   }

   input[type=text]{
   	border-radius: 20px;
   	padding-left: 30px
   }
</style>

</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="../index">
						<h2 style="color:red">BETABET</h2>
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
				

							<ul id="main-menu" class="main-menu">
						<li>
							<a href="index">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<?php
							//checking for privillage with my session
						 if ($_SESSION['role']['company_structure'] == 1) {
							 ?>
						<li class="has-sub">
					<a href="extra-icons">
						<i class="fa fa-institution"></i>
						<span class="title">Company Structure </span>
						<span class="badge badge-info badge-roundless">Control</span>
					</a>
					<ul>
						<li >
							<a href="head_office">
								
								<span class="title">View/Edit Head Office</span>
							</a>
						</li>
						<li >
							<a href="regional_office">
								
								<span class="title">View/Edit Regional Office</span>
							</a>
						</li>
						<li >
							<a href="area_office">
								
								<span class="title">View/Edit Area Office</span>
							</a>
						</li>
						<li >
							<a href="hub1_office">
								
								<span class="title">View/Edit Hub 1 Office</span>
							</a>
						</li>
						<li >
							<a href="hub2_office">
								
								<span class="title">View/Edit Hub 2 Office</span>
							</a>
						</li>
						<li >
							<a href="branch_office">
								
								<span class="title">View/Edit Branch Office</span>
							</a>
						</li>
						
					</ul>
				</li>
				<?php } ?>


				
					<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['chat_update'] == 1) {
							 ?>
						<li>
							<a href="https://dashboard.tawk.to/#/admin/59eb42094854b82732ff6db0" target="_blank">
								<i class="fa fa-wechat"></i>
								<span class="title">Chat Update</span>
							</a>
						</li>
					<?php } ?>



					<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['funding'] == 1 || $_SESSION['role']['withdrawal'] == 1 ) {
							 ?>	
				<li class="has-sub">
					<a href="layout-api">
						<i class="fa fa-tasks"></i>
						<span class="title">Tasks</span>
					</a>
					<ul>

						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['funding'] == 1) {
							 ?>
						<li>
							<a href="fundTable">
								<span class="title">Funding</span>
							</a>
						</li>
						<?php } ?>


						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['withdrawal'] == 1) {
							 ?>
						<li>
							<a href="withTable">
								<span class="title">Withdrawals</span>
							</a>
						</li>
						<?php } ?>
						
					</ul>
				</li>
				<?php } ?>

				
				<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['customers'] == 1 || $_SESSION['role']['approve_reg'] == 1) {
							 ?>

				<li class="has-sub">
					<a href="extra-icons">
						<i class="fa fa-user"></i>
						<span class="title">Customers Database</span>
						<span class="badge badge-info badge-roundless">Control</span>
					</a>
					<ul>

						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['customers'] == 1) {
							 ?>
						<li >
							<a href="users">
								
								<span class="title">View/Edit</span>
							</a>
						</li>
						<?php } ?>


						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['approve_reg'] == 1) {
							 ?>
						<li >
							<a href="approvereg">
							
								<span class="title">Approve Registration</span>
							</a>
						</li>

						<?php } ?>
					</ul>
				</li>
				<?php } ?>
				

				<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['contact_us'] == 1) {
							 ?>
				<li >
					<a href="contactus">
						<i class="fa fa-comments"></i>
						<span class="title">Contact Us Messages</span>
					</a>
				</li>
				<?php } ?>
				<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['blogs'] == 1) {
							 ?>
				<li >
					<a href="blog">
						<i class="fa fa-newspaper-o"></i>
						<span class="title">Blog/News letter</span>
					</a>
				</li>
				<?php } ?>
				

				<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['faq'] == 1 || $_SESSION['role']['social_icons'] == 1 || $_SESSION['role']['how_to'] == 1 || $_SESSION['role']['contact_us_page'] == 1) {
							 ?>

				<li class="has-sub">
					<a href="extra-icons">
						<i class="entypo-bag"></i>
						<span class="title">Control</span>
						<span class="badge badge-info badge-roundless">Front Page</span>
					</a>
					<ul>
						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['social_icons'] == 1) {
							 ?>
						<li>
									<a href="social">
										<span class="title">Social Icon Control</span>
									</a>
						</li>
							<?php } ?>	

						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['contact_us_page'] == 1) {
							 ?>
						<li>
									<a href="contact">
										<span class="title">Contact us Control</span>
									</a>
						</li>
							<?php } ?>	
						

						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['faq'] == 1) {
							 ?>
						<li>
							<a href="FAQ">
								<span class="title">View/Edit FAQ</span>
							</a>
						</li>
							<?php } ?>	
						

						<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['how_to'] == 1) {
							 ?>
						<li>
							<a href="howto">
								<span class="title">View/Edit How To </span>
							</a>
						</li>
							<?php } ?>	

					</ul>
				</li>
				<?php } ?>		
				
				
			

			<?php
						//checking for privillage with my session
					 if ($_SESSION['role']['manage_admin'] == 1) {
							 ?>
			<li class="has-sub">
					<a href="extra-icons">
						<i class="fa fa-user"></i>
						<span class="title">Admin Management</span>
						<span class="badge badge-info badge-roundless">Vital</span>
					</a>
					<ul>
					<li >
						<a href="madmin">
							<i class="fa fa-usr"></i>
							<span class="title">Add\edit Staff</span>
						</a>
					</li>
					<li >
						<a href="units">
							<i class="fa fa-usr"></i>
							<span class="title">Add Edit and Delete Units</span>
						</a>
					</li>
				</ul>
			</li>
			<?php } ?>					
			
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
							<?php if( isset($_SESSION["loggedInAdmin"])){ echo strtoupper($_SESSION["loggedInAdmin"]);}else{echo strtoupper('Head Office');}?>
						</a>
		
						
					</li>
		
				</ul>
				
				
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<li>
						<a href="logout">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />