<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li>
		
									<a href="extra-google-maps.html">Maps</a>
							</li>
						<li class="active">
		
									<strong>Google Maps</strong>
							</li>
							</ol>
					<h2>Google Maps</h2>
		
		<br />
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Normal</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('normal');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.668, 20.915),
							  zoom: 6,
							  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="normal" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Borderless World</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('borderless-world');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 4,
							  styles: 
									[
									  {
										"elementType": "labels.icon",
										"stylers": [
										  { "invert_lightness": true },
										  { "hue": "#ffdd00" },
										  { "lightness": -22 },
										  { "saturation": -42 },
										  { "visibility": "off" }
										]
									  },{
										"featureType": "administrative.neighborhood",
										"elementType": "labels",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
										"featureType": "administrative",
										"elementType": "geometry",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
										"featureType": "administrative.country",
										"elementType": "labels",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
										"featureType": "administrative.province",
										"elementType": "labels",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
										"featureType": "water",
										"elementType": "geometry",
										"stylers": [
										  { "saturation": -38 },
										  { "lightness": -54 },
										  { "hue": "#00e5ff" }
										]
									  },{
										"featureType": "water",
										"elementType": "labels.text.fill",
										"stylers": [
										  { "color": "#ffffff" },
										  { "saturation": 54 },
										  { "lightness": 51 },
										  { "visibility": "on" }
										]
									  },{
										"featureType": "water",
										"elementType": "labels.text.stroke",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
									  }
									],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="borderless-world" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
		
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Blue Water</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('blue-water');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  		[{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="blue-water" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Magenta</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('magenta');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
									[
									  {
										"featureType": "landscape",
										"elementType": "geometry",
										"stylers": [
										  { "visibility": "on" },
										  { "color": "#dc3480" }
										]
									  },{
										"featureType": "water",
										"stylers": [
										  { "hue": "#0055ff" },
										  { "saturation": 100 },
										  { "lightness": -18 },
										  { "visibility": "on" }
										]
									  },{
										"featureType": "water",
										"stylers": [
										  { "visibility": "on" },
										  { "lightness": 1 },
										  { "hue": "#ff0077" }
										]
									  },{
										"featureType": "administrative",
										"elementType": "geometry.stroke",
										"stylers": [
										  { "visibility": "simplified" }
										]
									  },{
										"featureType": "poi.park",
										"elementType": "geometry",
										"stylers": [
										  { "color": "#b72c6e" },
										  { "visibility": "simplified" }
										]
									  },{
										"featureType": "administrative",
										"elementType": "labels.text.fill",
										"stylers": [
										  { "visibility": "on" },
										  { "color": "#ffffff" }
										]
									  },{
										"featureType": "administrative",
										"elementType": "labels.text.stroke",
										"stylers": [
										  { "visibility": "off" }
										]
									  },{
									  },{
									  }
									],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="magenta" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
			
			
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Hard Edges</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('hard-edges');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"landscape.natural","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"water","stylers":[{"saturation":-100},{"lightness":-86}]},{"elementType":"labels.text.stroke","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":-100},{"lightness":-75}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"saturation":-100},{"lightness":97}]},{"featureType":"poi.park","stylers":[{"saturation":-100},{"lightness":-100}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","stylers":[{"saturation":-100},{"lightness":-68}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"saturation":-100},{"lightness":-100}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":91}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"saturation":-100},{"lightness":-100}]},{"featureType":"transit.station","stylers":[{"saturation":-100},{"lightness":-22}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"hue":"#ff004c"},{"saturation":-100},{"lightness":44}]},{"elementType":"labels.text.fill","stylers":[{"saturation":1},{"lightness":-100}]},{"elementType":"labels.text.stroke","stylers":[{"saturation":-100},{"lightness":100}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="hard-edges" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Deep Green</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('deep-green');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"simplified"},{"color":"#ffe24d"}]},{"featureType":"road","stylers":[{"visibility":"simplified"},{"color":"#158c28"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"simplified"},{"color":"#37b34a"}]},{"featureType":"water","stylers":[{"color":"#ffe24d"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"},{"color":"#8bc53f"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#808080"},{"gamma":9.91},{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"lightness":100},{"visibility":"on"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="deep-green" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
			
			
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Mapbox</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('mapbox');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="mapbox" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Paper</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('paper');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]},{},{"featureType":"road.highway","stylers":[{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road"},{},{"featureType":"landscape","stylers":[{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="paper" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
			
			
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Red Alert</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('red-alert');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  		[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ffdfa6"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#b52127"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#c5531b"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#74001b"},{"lightness":-10}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#74001b"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#990c19"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#74001b"},{"lightness":-8}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#6a0d10"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#ffdfa6"},{"weight":0.4}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="red-alert" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Avocado</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('avocado');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#aee2e0"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#abce83"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#769E72"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#7B8758"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#EBF4A4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#8dab68"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5B5B3F"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ABCE83"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#A4C67D"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9BBF72"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#EBF4A4"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#87ae79"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#7f2200"},{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":4.1}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#495421"}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"visibility":"off"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="avocado" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
			
			
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Spring Green</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('spring-green');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#333739"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2ecc71"}]},{"featureType":"poi","stylers":[{"color":"#2ecc71"},{"lightness":-7}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-28}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"visibility":"on"},{"lightness":-15}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-18}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2ecc71"},{"lightness":-34}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#333739"},{"weight":0.8}]},{"featureType":"poi.park","stylers":[{"color":"#2ecc71"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#333739"},{"weight":0.3},{"lightness":10}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="spring-green" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Neutral Blue</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('neutral-blue');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	  [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="neutral-blue" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Grey</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('grey');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="grey" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Bright</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('bright');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	[{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="bright" style="height: 350px; width: 100%"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Midnight</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
		
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('midnight');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
							  	[{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="midnight" style="height: 350px; width: 100%"></div>
		
					</div>
					
				</div>
			</div>
		
		
			<div class="col-md-6">
				<div class="panel panel-primary" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Retro</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body no-padding">
						
						<script type="text/javascript">
					
						  function initialize() {
							var mapDiv = document.getElementById('retro');
							var map = new google.maps.Map(mapDiv, {
							  center: new google.maps.LatLng(42.9, 6.1),
							  zoom: 3,
							  styles: 
								 [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}],
								  mapTypeId: google.maps.MapTypeId.ROADMAP
							});
						  }
						  
					
						  google.maps.event.addDomListener(window, 'load', initialize);
						</script>
						<div id="retro" style="height: 350px; width: 100%"></div>
						
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