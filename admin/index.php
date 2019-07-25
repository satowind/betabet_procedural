<?php 
session_start();
//if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: login");
}
include('includes/connection.php');
if( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
}else{
$time= date("Y-m-d");
$querry = "SELECT * FROM `counter`";
$query = "SELECT id FROM counter WHERE `date` = '$time'";
$answer= mysqli_query($conn, $query);
$answers = mysqli_num_rows($answer);
$row= mysqli_fetch_assoc($answer);
$result = mysqli_query($conn, $querry);
$resultz = mysqli_num_rows($result);
}

// query & result
$query = "SELECT * FROM usertable";
$result = mysqli_query( $conn, $query );
 $num_rows = mysqli_num_rows($result);
       

require 'includes/header.php'; ?>
		
		
		<script type="text/javascript">
		
		
		
		</script>
		
		
		<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $num_rows; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Users</h3>
					
				</div>
		
			</div>
		
		<?php $querys = "SELECT * FROM admintable";
			$results = mysqli_query( $conn, $querys );
			 $num_row = mysqli_num_rows($results); ?>
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $num_row; ?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Administrators</h3>
					
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		<?php $quer = "SELECT * FROM transactiontable WHERE status=2 AND Report=1";
$resul = mysqli_query( $conn, $quer );
 $num_ro = mysqli_num_rows($resul); ?>
 
			<div class="col-sm-3 col-xs-6">
		
				<a href="fundTable"><div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $num_ro; ?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Pending Fundings</h3>
					
				</div></a>
		
			</div>
			
		<?php $que = "SELECT * FROM transactiontable WHERE status=2 AND Report=2";
$resu = mysqli_query( $conn, $que );
 $num_r = mysqli_num_rows($resu); ?>
 
			<div class="col-sm-3 col-xs-6">
		
				<a href="withTable"><div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $num_r; ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Pending Withdrawals</h3>
					
				</div></a>
		
			</div>

			<br />
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-pie"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $answers; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Todays Visitors</h3>
					
				</div>
		
			</div>

			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-network"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $resultz; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Total Visitors</h3>
					
				</div>
		
			</div>
		</div>
		<br>
		
<!-- <div class="container">
	<div class="row">
		<div class="col-xs-6">
      
		  <table class="table table-bordered table-striped table-condensed">
		    <caption>Visitors Counter</caption>
		    <thead>
		      <tr>
		        <th colspan="2">Your visitors Counter is</th>
		        
		      </tr>
		    </thead>
		    <tbody>

		      <tr>
		        <td>today</td>
		        <td><?php //echo $answers; ?></td>
		      </tr>
		      <tr>
		        <td>Overall</td>
		        <td><?php //echo $resultz; ?></td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		<div class="col-xs-6">
			<table class="table table-bordered table-striped table-condensed">
		    <caption>Number of Users</caption>
		    <thead>
		      <tr>
		        <th colspan="2">Your visitors Counter is</th>
		        
		      </tr>
		    </thead>
		    <tbody>

		      <tr>
		        <td>today</td>
		        <td><?php echo $answers; ?></td>
		      </tr>
		      <tr>
		        <td>Overall</td>
		        <td><?php echo $resultz; ?></td>
		      </tr>
		    </tbody>
		  </table>
		</div>
    </div>
 </div> -->

		
<?php require 'includes/footer.php' ?>