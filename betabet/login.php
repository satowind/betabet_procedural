

<?php
session_start();

if( isset( $_POST['login-form-submit'] ) ) {
    //connect to database
	require 'includes/connection.php'; 
    require 'includes/functions.php';

    // create variables
    // wrap data with validate function
    $formUserName = validateFormData( $_POST['login-form-username'] );
    $formPass = validateFormData( $_POST['login-form-password'] );
    
 
    
    // create query
    $query = "SELECT userName, passWord, b_id FROM usertable WHERE status=1 AND userName='$formUserName' OR email='$formUserName'";
    
    // store the result
    $result = mysqli_query( $conn, $query );
    
    // verify if result is returned
    if( mysqli_num_rows($result) > 0 ) {
        
        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $name       = $row['userName'];
            $hashedPass = $row['passWord'];
            $id=$row['b_id'];
        }
        
        // verify hashed password with submitted password
        if( password_verify( $formPass, $hashedPass ) ) {
            
            // correct login details!
            // store data in SESSION variables
            $_SESSION['loggedInUser'] = $name;
            $_SESSION['log'] = $id;
             
            // redirect user to clients page
            header( "Location: index" );
        } else { // hashed password didn't verify
            
            // error message
            $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
        }
        
    } else { // there are no results in database
        
        // error message
        $loginError = "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
    
}

require 'includes/header.php';
?>


<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                        <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                        <div class="uk-position-cover uk-flex uk-flex-center head-title">
                            <h1>
                                Login/Register
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			
	
  <br><br>
  

  <ul  class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="login">LOGIN</a></li>
    <li><a href="register">REGISTER</a></li>
    
  </ul>
  <?php echo isset($sato) ? $sato: ''; ?>
  <div class="tab-content well">
    <div id="home" class="tab-pane fade in active">
     	<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

											<small class="text-danger">* <?php echo isset($loginError) ? $loginError : ''; ?></small>

											<h3>Login to your Account</h3>

											<div class="form-group">
												<label for="login-form-username">Username or Email:</label>
												<input class="form-control" type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
											</div>

											<div class="form-group">
												<label for="login-form-password">Password:</label>
												<input class="form-control" type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
											</div>

											<div class="form-group nobottommargin">
												<button class="btn btn-danger" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="forget" class="pull-right">Forgot Password?</a>
											</div>

										</form>
									</div>
								</div>

    </div>
    
  
</div>

</div>
	</div>
<?php require 'includes/footer.php'; ?>