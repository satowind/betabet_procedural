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
		
									<strong>Vector Maps</strong>
							</li>
							</ol>
					<h2>Vector Maps</h2>
		
		<br />
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">World Maps</div>
						
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
							jQuery(document).ready(function($)
							{
								(function() {
									var myCustomColors = {
										'GR': '#f04239',
										'ES': '#f04239',
										'PT': '#f04239',
										'SE': '#f04239',
										'SI': '#f04239',
										'DK': '#f04239',
										'DE': '#f04239',
										'NL': '#f04239',
										'BE': '#f04239',
										'LU': '#f04239',
										'BG': '#f04239',
										'FR': '#f04239',
										'GB': '#f04239',
										'IE': '#f04239',
										'IT': '#f04239',
										'HR': '#f04239',
										'RO': '#f04239',
										'EE': '#f04239',
										'LV': '#f04239',
										'LT': '#f04239',
										'PL': '#f04239',
										'AT': '#f04239',
										'HU': '#f04239',
										'SK': '#f04239',
										'CZ': '#f04239',
										'LT': '#f04239',
										'FI': '#f04239',
										'CY': '#f04239',
										
										// Arab League
										'SA': '#06b53c',
										'SO': '#06b53c',
										'DZ': '#06b53c',
										'EG': '#06b53c',
										'LY': '#06b53c',
										'TN': '#06b53c',
										'YE': '#06b53c',
										'QA': '#06b53c',
										'JO': '#06b53c',
										'KW': '#06b53c',
										'OM': '#06b53c',
										'LB': '#06b53c',
										'SY': '#06b53c',
										'PS': '#06b53c',
										'IQ': '#06b53c',
										'MA': '#06b53c',
										'MR': '#06b53c',
										'DJ': '#06b53c',
										'AE': '#06b53c',
										'BH': '#06b53c',
										'KM': '#06b53c',
										
										// NFATA
										'US': '#2b303a',
										'CA': '#2b303a',
										'MX': '#2b303a',
									};
									
									map = new jvm.WorldMap({
										map: 'world_mill_en',
										container: $('#worldmap'),
										backgroundColor: '#CCC',
										series: {
											regions: [{
												attribute: 'fill'}]
										}
									});
								
									map.series.regions[0].setValues(myCustomColors);
								})();
							});
		
						</script>
						<div id="worldmap" style="height:450px;width:100%;" class="map"></div>
		
						
					</div>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>Color</th>
						<th>Name</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td><a href="#"> <span class="badge badge-secondary">EU</span></a></td>
						<td>European Union</td>
					</tr>
					<tr>
						<td><a href="#"> <span class="badge badge-primary">NAFTA</span></a></td>
						<td>North American Free Trade Agreement</td>
					</tr>
					<tr>
						<td><a href="#"> <span class="badge badge-success">AL</span></a></td>
						<td>Arab League</td>
					</tr>
				</tbody>
			</table>			
				</div>
		
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">United States of America</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#map");
								map.vectorMap({
									map: 'us_aea_en',
									backgroundColor: '#FFF',
									focusOn: {
											  x: 1,
											  y: 1,
											  scale: 2
											},
									regionStyle: {
									  initial: {
										fill: '#737881',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 0.8
									  }
									}
								});
							});
						</script>
						<div id="map" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Cities of Germany - with markers</div>
						
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
							$(function(){
							  var map,
								  markers = [
									{latLng: [52.50, 13.39], name: 'Berlin'},
									{latLng: [53.56, 10.00], name: 'Hamburg'},
									{latLng: [48.13, 11.56], name: 'Munich'},
									{latLng: [50.95, 6.96], name: 'Cologne'},
									{latLng: [50.11, 8.68], name: 'Frankfurt am Main'},
									{latLng: [48.77, 9.17], name: 'Stuttgart'},
									{latLng: [51.23, 6.78], name: 'Düsseldorf'},
									{latLng: [51.51, 7.46], name: 'Dortmund'},
									{latLng: [51.45, 7.01], name: 'Essen'},
									{latLng: [53.07, 8.80], name: 'Bremen'}
								  ],
								  cityAreaData = [
									887.70,
									755.16,
									310.69,
									405.17,
									248.31,
									207.35,
									217.22,
									280.71,
									210.32,
									325.42
								  ]
							
							  map = new jvm.WorldMap({
								container: $('#germany'),
								map: 'de_merc_en',
								regionsSelectable: true,
								markersSelectable: true,
								markers: markers,
								markerStyle: {
								  initial: {
									fill: '#2b303a',
									stroke: '#2b303a',
									"stroke-width": 1,
									"stroke-opacity": 1
								  },
								  selected: {
									fill: '#ca2e30',
									stroke: '#ca2e30'
								  }
								},
								backgroundColor: '#FFF',
								regionStyle: {
								  initial: {
									fill: '#AAA',
									"fill-opacity": 0.9,
									stroke: 'none',
									"stroke-width": 2,
									"stroke-opacity": 0.3
								  },
								  hover: {
									"fill-opacity": 1
								  },
								  selected: {
									fill: '#ff6264'
								  },
								  selectedHover: {
								  }						  
								},
		
								series: {
								  markers: [{
									attribute: 'r',
									scale: [5, 15],
									values: cityAreaData
								  }]
								},
								onRegionSelected: function(){
								  if (window.localStorage) {
									window.localStorage.setItem(
									  'jvectormap-selected-regions',
									  JSON.stringify(map.getSelectedRegions())
									);
								  }
								},
								onMarkerSelected: function(){
								  if (window.localStorage) {
									window.localStorage.setItem(
									  'jvectormap-selected-markers',
									  JSON.stringify(map.getSelectedMarkers())
									);
								  }
								}
							  });
							  map.setSelectedRegions( JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ) );
							  map.setSelectedMarkers( JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ) );
							});				
						</script>
						<div id="germany" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">France</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#france");
								map.vectorMap({
									map: 'fr_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="france" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">United Kingdom</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#uk");
								map.vectorMap({
									map: 'uk_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="uk" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">China</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#china");
								map.vectorMap({
									map: 'cn_mill_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="china" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Italy</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#italy");
								map.vectorMap({
									map: 'it_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="italy" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Denmark</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#denmark");
								map.vectorMap({
									map: 'dk_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="denmark" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Australia</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#australia");
								map.vectorMap({
									map: 'au_mill_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="australia" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Switzerland</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#swiss");
								map.vectorMap({
									map: 'ch_mill_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="swiss" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Spain</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#spain");
								map.vectorMap({
									map: 'es_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="spain" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Belgium</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#belgium");
								map.vectorMap({
									map: 'be_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="belgium" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Argentina</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#argentina");
								map.vectorMap({
									map: 'ar_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
									
								});
							});
						</script>
						<div id="argentina" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Austria</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#austria");
								map.vectorMap({
									map: 'at_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="austria" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Netherlands</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#nederland");
								map.vectorMap({
									map: 'nl_merc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
		
								});
							});
						</script>
						<div id="nederland" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Canada</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#canada");
								map.vectorMap({
									map: 'ca_lcc_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="canada" style="height:350px;width:100%;" class="map"></div>
						
					</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">New York City</div>
						
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
							jQuery(document).ready(function($)
							{
								var map = $("#nyc");
								map.vectorMap({
									map: 'us-ny-newyork_mill_en',
									backgroundColor: '#FFF',
									regionStyle: {
									  initial: {
										fill: '#AAA',
										"fill-opacity": 0.9,
										stroke: 'none',
										"stroke-width": 1,
										"stroke-opacity": 1
									  },
									  hover: {
										"fill-opacity": 1
									  }
									}
								});
							});
						</script>
						<div id="nyc" style="height:350px;width:100%;" class="map"></div>
						
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
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-de-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-fr-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-cn-mill-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-it-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-au-mill-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-ar-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-at-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-dk-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-be-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-nl-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-ca-lcc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-us-ny-newyork-mill-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-es-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-uk-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-ch-mill-en.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>