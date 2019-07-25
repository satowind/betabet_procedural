<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="tables-main.html">Tables</a>
							</li>
						<li class="active">
		
									<strong>Basic Tables</strong>
							</li>
							</ol>
					
		<h2>Tables</h2>
		<br />
		
		<div class="row">
			
			<div class="col-md-6">
				
				<h4>Simple Table</h4>
				
				<table class="table responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
			<div class="col-md-6">
				
				<h4>Striped Rows</h4>
				
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
		</div>
		
		
		<br />
		<br />
		
		<div class="row">
			<div class="col-md-6">
				
				<h4>Hover Rows</h4>
				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
			<div class="col-md-6">
				
				<h4>Bordered Table</h4>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
		
		<br />
		<br />
		
		
		<div class="row">
		
			<div class="col-md-6">
			
				<h4>Condensed Table</h4>
				
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
			<div class="col-md-6">
			
				<h4>Mix of all these classes</h4>
				
				<table class="table table-condensed table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>1</td>
							<td>Arlind</td>
							<td>Nushi</td>
						</tr>
						
						<tr>
							<td>2</td>
							<td>Art</td>
							<td>Ramadani</td>
						</tr>
						
						<tr>
							<td>3</td>
							<td>Filan</td>
							<td>Fisteku</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
		</div>
		
		
		<br />
		
		<br />
		
		<h3>Tables and Panels</h3>
		
		<br />
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Table inside panel</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
				
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Progress</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>1</td>
						<td>Arlind</td>
						<td>Nushi</td>
						<td>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
									<span class="sr-only">20% Complete</span>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<td>2</td>
						<td>Art</td>
						<td>Ramadani</td>
						<td>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
									<span class="sr-only">92% Complete</span>
								</div>
							</div>
						</td>
					</tr>
					
					<tr>
						<td>3</td>
						<td>Filan</td>
						<td>Fisteku</td>
						<td>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
									<span class="sr-only">70% Complete</span>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		
		<br />
		
		<h3>
			Responsive Table <small>Try to resize the window to mobile width</small>
		</h3>
		<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
							<th width="15%">ID</th>
							<th>First name</th>
							<th>Last name</th>
							<th>ZIP</th>
							<th width="33%">Country</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>65</td>
							<td>Dillon</td>
							<td>Garcia</td>
							<td>13652</td>
							<td>Holy See (Vatican City State)</td>
						</tr>
						<tr>
							<td>66</td>
							<td>Russell</td>
							<td>Sweeney</td>
							<td>T8P 2O6</td>
							<td>Saint Kitts and Nevis</td>
						</tr>
						<tr>
							<td>67</td>
							<td>Zelda</td>
							<td>Berg</td>
							<td>84946</td>
							<td>Afghanistan</td>
						</tr>
						<tr>
							<td>68</td>
							<td>Dexter</td>
							<td>Mann</td>
							<td>73596</td>
							<td>Thailand</td>
						</tr>
						<tr>
							<td>69</td>
							<td>Maisie</td>
							<td>Miller</td>
							<td>X3M 6C1</td>
							<td>Seychelles</td>
						</tr>
						<tr>
							<td>70</td>
							<td>Lynn</td>
							<td>Mitchell</td>
							<td>N5B 3Z9</td>
							<td>Wallis and Futuna</td>
						</tr>
						<tr>
							<td>71</td>
							<td>Gay</td>
							<td>Medina</td>
							<td>66692</td>
							<td>Germany</td>
						</tr>
						<tr>
							<td>72</td>
							<td>Olga</td>
							<td>Clark</td>
							<td>M6B 7B6</td>
							<td>Kuwait</td>
						</tr>
						<tr>
							<td>73</td>
							<td>Brianna</td>
							<td>Obrien</td>
							<td>Z6Z 5R3</td>
							<td>Bahrain</td>
						</tr>
						<tr>
							<td>74</td>
							<td>Daria</td>
							<td>Byers</td>
							<td>R9T 4N7</td>
							<td>Ghana</td>
						</tr>
						<tr>
							<td>75</td>
							<td>Chiquita</td>
							<td>Barker</td>
							<td>28435</td>
							<td>Ireland</td>
						</tr>
						<tr>
							<td>76</td>
							<td>Gray</td>
							<td>Salazar</td>
							<td>58618</td>
							<td>Chile</td>
						</tr>
						<tr>
							<td>77</td>
							<td>Delilah</td>
							<td>Kirby</td>
							<td>42811</td>
							<td>Oman</td>
						</tr>
						<tr>
							<td>78</td>
							<td>Xanthus</td>
							<td>Holland</td>
							<td>B8Q 9C4</td>
							<td>Antigua and Barbuda</td>
						</tr>
						<tr>
							<td>79</td>
							<td>Reuben</td>
							<td>Brennan</td>
							<td>44693</td>
							<td>Czech Republic</td>
						</tr>
						<tr>
							<td>80</td>
							<td>Alden</td>
							<td>Long</td>
							<td>94236</td>
							<td>Slovakia</td>
						</tr>
						<tr>
							<td>81</td>
							<td>Blythe</td>
							<td>Bender</td>
							<td>04812</td>
							<td>Guam</td>
						</tr>
						<tr>
							<td>82</td>
							<td>Aileen</td>
							<td>Burgess</td>
							<td>47942</td>
							<td>Djibouti</td>
						</tr>
						<tr>
							<td>83</td>
							<td>Zeus</td>
							<td>Craig</td>
							<td>43002</td>
							<td>Nicaragua</td>
						</tr>
						<tr>
							<td>84</td>
							<td>Jade</td>
							<td>Garza</td>
							<td>F2X 8F3</td>
							<td>New Zealand</td>
						</tr>
						<tr>
							<td>85</td>
							<td>Noah</td>
							<td>Barrera</td>
							<td>K9C 8U0</td>
							<td>Malawi</td>
						</tr>
						<tr>
							<td>86</td>
							<td>Quyn</td>
							<td>Robertson</td>
							<td>H3X 6J9</td>
							<td>Bosnia and Herzegovina</td>
						</tr>
						<tr>
							<td>87</td>
							<td>Serena</td>
							<td>Cabrera</td>
							<td>83671</td>
							<td>Slovenia</td>
						</tr>
						<tr>
							<td>88</td>
							<td>Charity</td>
							<td>Chase</td>
							<td>T9Q 7C4</td>
							<td>Solomon Islands</td>
						</tr>
						<tr>
							<td>89</td>
							<td>Athena</td>
							<td>Grimes</td>
							<td>62801</td>
							<td>Aruba</td>
						</tr>
						<tr>
							<td>90</td>
							<td>Mallory</td>
							<td>Middleton</td>
							<td>D2V 1M5</td>
							<td>Italy</td>
						</tr>
						<tr>
							<td>91</td>
							<td>Xenos</td>
							<td>Jones</td>
							<td>46642</td>
							<td>Singapore</td>
						</tr>
						<tr>
							<td>92</td>
							<td>Tate</td>
							<td>Gregory</td>
							<td>66538</td>
							<td>Zimbabwe</td>
						</tr>
						<tr>
							<td>93</td>
							<td>Blaze</td>
							<td>Taylor</td>
							<td>70282</td>
							<td>Paraguay</td>
						</tr>
						<tr>
							<td>94</td>
							<td>Jena</td>
							<td>Duncan</td>
							<td>63057</td>
							<td>Cambodia</td>
						</tr>
						<tr>
							<td>95</td>
							<td>Thaddeus</td>
							<td>Chase</td>
							<td>66762</td>
							<td>Netherlands Antilles</td>
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





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/zurb-responsive-tables/responsive-tables.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/zurb-responsive-tables/responsive-tables.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>