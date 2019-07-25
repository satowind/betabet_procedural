<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        Profile
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="Profile">Home</a>
                </li>
                <li class="uk-active"><span>Profile</span>
                </li>
            </ul>
        </div>

       <section>
       	<div class="container">
       		<div class="row">
       			<div class="col-sm-3">
            
  <table class="table table-condensed table-bordered">
    
    <tbody class="table-hover">
    	<tr>
        <td><a href="index">Profile<span class="glyphicon glyphicon-home pull-right"></span></a> </td>
        
      </tr>
      <tr>
        <td><a href="fund">Fund Account<span class=" glyphicon glyphicon-piggy-bank pull-right"></span></a></td>
      
      </tr>
      <tr>
        <td><a href="withdraw">Withdraw From Your Account<span class="glyphicon glyphicon-euro pull-right"></span></a></td>
        
      </tr>
     
      <tr>
        <td><a href="faq">FAQ<span class=" glyphicon glyphicon-info-sign pull-right"></span></a></td>
      
      </tr>
      <tr>
        <td><a href="logout">Logout<span class="glyphicon glyphicon-log-out pull-right"></span></a></td>
        
      </tr>
    </tbody>
  </table>
   <?php 
require 'includes/connection.php';
   global $conn;
     
        $query = "SELECT * FROM `usertable` WHERE `b_id`= '{$_SESSION['log']}' ";
       
        $result_set = mysqli_query($conn,$query);
       
        $row = mysqli_fetch_assoc($result_set);

        $query = "SELECT * FROM `bank` WHERE `username`= '{$_SESSION['loggedInUser']}' ";
       
        $banking = mysqli_query($conn,$query);
       
      


        $query = "SELECT * FROM `transactiontable` WHERE `username`= '{$_SESSION['loggedInUser']}' ";
       
        $history = mysqli_query($conn,$query);
       
        

        $query = "SELECT * FROM `transactiontable` WHERE `username`= '{$_SESSION['loggedInUser']}' AND `status` =2 ";
       
        $pending = mysqli_query($conn,$query);
       
          ?>

       			</div>
       			<div class="col-sm-9">
       				
       				<h3><?php echo strtoupper($_SESSION["loggedInUser"]);?> 
            </h3>
       				<div class="clearfix">
                
              </div>
       				
<br><br>
       				
 