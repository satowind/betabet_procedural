<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="tables-main.html">Tables</a>
							</li>
						<li class="active">
		
									<strong>Data Tables</strong>
							</li>
					</ol>
					
		<h2>Data Tables</h2>
		
		<br />
		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th data-hide="phone">Rendering engine</th>
					<th>Browser</th>
					<th data-hide="phone">Platform(s)</th>
					<th data-hide="phone,tablet">Engine version</th>
					<th>CSS grade</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td>Trident</td>
					<td>Internet Explorer 4.0</td>
					<td>Win 95+</td>
					<td class="center">4</td>
					<td class="center">X</td>
				</tr>
				<tr class="even gradeC">
					<td>Trident</td>
					<td>Internet Explorer 5.0</td>
					<td>Win 95+</td>
					<td class="center">5</td>
					<td class="center">C</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 5.5</td>
					<td>Win 95+</td>
					<td class="center">5.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>Internet Explorer 6</td>
					<td>Win 98+</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 7</td>
					<td>Win XP SP2+</td>
					<td class="center">7</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>AOL browser (AOL desktop)</td>
					<td>Win XP</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.5</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 2.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 3.0</td>
					<td>Win 2k+ / OSX.3+</td>
					<td class="center">1.9</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.0</td>
					<td>OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.5</td>
					<td>OSX.3+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape 7.2</td>
					<td>Win 95+ / Mac OS 8.6-9.2</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Browser 8</td>
					<td>Win 98SE+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Navigator 9</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.1</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.2</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.2</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.3</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.4</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.4</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.5</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.6</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.7</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.8</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Seamonkey 1.1</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Epiphany 2.20</td>
					<td>Gnome</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.2</td>
					<td>OSX.3</td>
					<td class="center">125.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.3</td>
					<td>OSX.3</td>
					<td class="center">312.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 2.0</td>
					<td>OSX.4+</td>
					<td class="center">419.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 3.0</td>
					<td>OSX.4+</td>
					<td class="center">522.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>OmniWeb 5.5</td>
					<td>OSX.4+</td>
					<td class="center">420</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>iPod Touch / iPhone</td>
					<td>iPod</td>
					<td class="center">420.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>S60</td>
					<td>S60</td>
					<td class="center">413</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.0</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.0</td>
					<td>Win 95+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.2</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.5</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera for Wii</td>
					<td>Wii</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nokia N800</td>
					<td>N800</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nintendo DS browser</td>
					<td>Nintendo DS</td>
					<td class="center">8.5</td>
					<td class="center">C/A<sup>1</sup>
					</td>
				</tr>
				<tr class="gradeC">
					<td>KHTML</td>
					<td>Konqureror 3.1</td>
					<td>KDE 3.1</td>
					<td class="center">3.1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.3</td>
					<td>KDE 3.3</td>
					<td class="center">3.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.5</td>
					<td>KDE 3.5</td>
					<td class="center">3.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Tasman</td>
					<td>Internet Explorer 4.5</td>
					<td>Mac OS 8-9</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.1</td>
					<td>Mac OS 7.6-9</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.2</td>
					<td>Mac OS 8-X</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.1</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.4</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Dillo 0.8</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Links</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Lynx</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>IE Mobile</td>
					<td>Windows Mobile 6</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>PSP browser</td>
					<td>PSP</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeU">
					<td>Other browsers</td>
					<td>All others</td>
					<td>-</td>
					<td class="center">-</td>
					<td class="center">U</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</tfoot>
		</table>
		
		<br />
		
		
		<h3>Table without DataTable Header</h3>
		
		<script type="text/javascript">
		jQuery( window ).load( function() {
			var $table2 = jQuery( "#table-2" );
			
			// Initialize DataTable
			$table2.DataTable( {
				"sDom": "tip",
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
					null,
					null
				],
				"bStateSave": true
			});
			
			// Highlighted rows
			$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
				var $this = $(el),
					$p = $this.closest('tr');
				
				$( el ).on( 'change', function() {
					var is_checked = $this.is(':checked');
					
					$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
				} );
			} );
			
			// Replace Checboxes
			$table2.find( ".pagination a" ).click( function( ev ) {
				replaceCheckboxes();
			} );
		} );
			
		// Sample Function to add new row
		var giCount = 1;
		
		function fnClickAddRow() {
			jQuery('#table-2').dataTable().fnAddData( [ '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4" ] );
			replaceCheckboxes(); // because there is checkbox, replace it
			giCount++;
		}
		</script>
		
		<table class="table table-bordered table-striped datatable" id="table-2">
			<thead>
				<tr>
					<th>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</th>
					<th>Student Name</th>
					<th>Average Grade</th>
					<th>Curriculum / Occupation</th>
					<th>Actions</th>
				</tr>
			</thead>
			
			<tbody>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
			
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Ellen C. Jones</td>
					<td>7.2</td>
					<td>Education and development manager</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Jennifer J. Jefferson</td>
					<td>10</td>
					<td>Maxillofacial surgeon</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Carl D. Kaya</td>
					<td>9.5</td>
					<td>Express Merchant Service</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Lillian J. Earl</td>
					<td>7.6</td>
					<td>Social and human service assistant</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>April L. Baker <span class="label label-success">New Applicant</span></td>
					<td>6.8</td>
					<td>Set and exhibit designer</td>
					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
				
			</tbody>
		</table>
		
		<br />
		
		<a href="javascript: fnClickAddRow();" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add Row
		</a>
		
		
		
		<br />
		<br />
		
		
		<h3>Table with Column Filtering</h3>
		<br />
		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table3 = jQuery("#table-3");
			
			var table3 = $table3.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			} );
			
			// Initalize Select Dropdown after DataTables is created
			$table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
			
			// Setup - add a text input to each footer cell
			$( '#table-3 tfoot th' ).each( function () {
				var title = $('#table-3 thead th').eq( $(this).index() ).text();
				$(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
			} );
			
			// Apply the search
			table3.columns().every( function () {
				var that = this;
			
				$( 'input', this.footer() ).on( 'keyup change', function () {
					if ( that.search() !== this.value ) {
						that
							.search( this.value )
							.draw();
					}
				} );
			} );
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-3">
			<thead>
				<tr class="replace-inputs">
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td>Trident</td>
					<td>Internet Explorer 4.0</td>
					<td>Win 95+</td>
					<td class="center">4</td>
					<td class="center">X</td>
				</tr>
				<tr class="even gradeC">
					<td>Trident</td>
					<td>Internet Explorer 5.0</td>
					<td>Win 95+</td>
					<td class="center">5</td>
					<td class="center">C</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 5.5</td>
					<td>Win 95+</td>
					<td class="center">5.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>Internet Explorer 6</td>
					<td>Win 98+</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 7</td>
					<td>Win XP SP2+</td>
					<td class="center">7</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>AOL browser (AOL desktop)</td>
					<td>Win XP</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.5</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 2.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 3.0</td>
					<td>Win 2k+ / OSX.3+</td>
					<td class="center">1.9</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.0</td>
					<td>OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.5</td>
					<td>OSX.3+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape 7.2</td>
					<td>Win 95+ / Mac OS 8.6-9.2</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Browser 8</td>
					<td>Win 98SE+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Navigator 9</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.1</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.2</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.2</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.3</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.4</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.4</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.5</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.6</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.7</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.8</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Seamonkey 1.1</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Epiphany 2.20</td>
					<td>Gnome</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.2</td>
					<td>OSX.3</td>
					<td class="center">125.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.3</td>
					<td>OSX.3</td>
					<td class="center">312.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 2.0</td>
					<td>OSX.4+</td>
					<td class="center">419.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 3.0</td>
					<td>OSX.4+</td>
					<td class="center">522.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>OmniWeb 5.5</td>
					<td>OSX.4+</td>
					<td class="center">420</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>iPod Touch / iPhone</td>
					<td>iPod</td>
					<td class="center">420.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>S60</td>
					<td>S60</td>
					<td class="center">413</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.0</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.0</td>
					<td>Win 95+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.2</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.5</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera for Wii</td>
					<td>Wii</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nokia N800</td>
					<td>N800</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nintendo DS browser</td>
					<td>Nintendo DS</td>
					<td class="center">8.5</td>
					<td class="center">C/A<sup>1</sup>
					</td>
				</tr>
				<tr class="gradeC">
					<td>KHTML</td>
					<td>Konqureror 3.1</td>
					<td>KDE 3.1</td>
					<td class="center">3.1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.3</td>
					<td>KDE 3.3</td>
					<td class="center">3.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.5</td>
					<td>KDE 3.5</td>
					<td class="center">3.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Tasman</td>
					<td>Internet Explorer 4.5</td>
					<td>Mac OS 8-9</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.1</td>
					<td>Mac OS 7.6-9</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.2</td>
					<td>Mac OS 8-X</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.1</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.4</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Dillo 0.8</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Links</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Lynx</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>IE Mobile</td>
					<td>Windows Mobile 6</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>PSP browser</td>
					<td>PSP</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeU">
					<td>Other browsers</td>
					<td>All others</td>
					<td>-</td>
					<td class="center">-</td>
					<td class="center">U</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</tfoot>
		</table>
		
		<br />
		
		
		<h3>Exporting Table Data</h3>
		<br />
		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table4 = jQuery( "#table-4" );
			
			$table4.DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdfHtml5'
				]
			} );
		} );		
		</script>
		
		<table class="table table-bordered datatable" id="table-4">
			<thead>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<td>Trident</td>
					<td>Internet Explorer 4.0</td>
					<td>Win 95+</td>
					<td class="center">4</td>
					<td class="center">X</td>
				</tr>
				<tr class="even gradeC">
					<td>Trident</td>
					<td>Internet Explorer 5.0</td>
					<td>Win 95+</td>
					<td class="center">5</td>
					<td class="center">C</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 5.5</td>
					<td>Win 95+</td>
					<td class="center">5.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>Internet Explorer 6</td>
					<td>Win 98+</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="odd gradeA">
					<td>Trident</td>
					<td>Internet Explorer 7</td>
					<td>Win XP SP2+</td>
					<td class="center">7</td>
					<td class="center">A</td>
				</tr>
				<tr class="even gradeA">
					<td>Trident</td>
					<td>AOL browser (AOL desktop)</td>
					<td>Win XP</td>
					<td class="center">6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 1.5</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 2.0</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Firefox 3.0</td>
					<td>Win 2k+ / OSX.3+</td>
					<td class="center">1.9</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.0</td>
					<td>OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Camino 1.5</td>
					<td>OSX.3+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape 7.2</td>
					<td>Win 95+ / Mac OS 8.6-9.2</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Browser 8</td>
					<td>Win 98SE+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Netscape Navigator 9</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.1</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.2</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.2</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.3</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.4</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.4</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.5</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.6</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">1.6</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.7</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.7</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Mozilla 1.8</td>
					<td>Win 98+ / OSX.1+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Seamonkey 1.1</td>
					<td>Win 98+ / OSX.2+</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Gecko</td>
					<td>Epiphany 2.20</td>
					<td>Gnome</td>
					<td class="center">1.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.2</td>
					<td>OSX.3</td>
					<td class="center">125.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 1.3</td>
					<td>OSX.3</td>
					<td class="center">312.8</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 2.0</td>
					<td>OSX.4+</td>
					<td class="center">419.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>Safari 3.0</td>
					<td>OSX.4+</td>
					<td class="center">522.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>OmniWeb 5.5</td>
					<td>OSX.4+</td>
					<td class="center">420</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>iPod Touch / iPhone</td>
					<td>iPod</td>
					<td class="center">420.1</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Webkit</td>
					<td>S60</td>
					<td>S60</td>
					<td class="center">413</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.0</td>
					<td>Win 95+ / OSX.1+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 7.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.0</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 8.5</td>
					<td>Win 95+ / OSX.2+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.0</td>
					<td>Win 95+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.2</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera 9.5</td>
					<td>Win 88+ / OSX.3+</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Opera for Wii</td>
					<td>Wii</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nokia N800</td>
					<td>N800</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>Presto</td>
					<td>Nintendo DS browser</td>
					<td>Nintendo DS</td>
					<td class="center">8.5</td>
					<td class="center">C/A<sup>1</sup>
					</td>
				</tr>
				<tr class="gradeC">
					<td>KHTML</td>
					<td>Konqureror 3.1</td>
					<td>KDE 3.1</td>
					<td class="center">3.1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.3</td>
					<td>KDE 3.3</td>
					<td class="center">3.3</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeA">
					<td>KHTML</td>
					<td>Konqureror 3.5</td>
					<td>KDE 3.5</td>
					<td class="center">3.5</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Tasman</td>
					<td>Internet Explorer 4.5</td>
					<td>Mac OS 8-9</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.1</td>
					<td>Mac OS 7.6-9</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Tasman</td>
					<td>Internet Explorer 5.2</td>
					<td>Mac OS 8-X</td>
					<td class="center">1</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.1</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeA">
					<td>Misc</td>
					<td>NetFront 3.4</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">A</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Dillo 0.8</td>
					<td>Embedded devices</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Links</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeX">
					<td>Misc</td>
					<td>Lynx</td>
					<td>Text only</td>
					<td class="center">-</td>
					<td class="center">X</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>IE Mobile</td>
					<td>Windows Mobile 6</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeC">
					<td>Misc</td>
					<td>PSP browser</td>
					<td>PSP</td>
					<td class="center">-</td>
					<td class="center">C</td>
				</tr>
				<tr class="gradeU">
					<td>Other browsers</td>
					<td>All others</td>
					<td>-</td>
					<td class="center">-</td>
					<td class="center">U</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th>Platform(s)</th>
					<th>Engine version</th>
					<th>CSS grade</th>
				</tr>
			</tfoot>
		</table>
		
		<br />
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
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>