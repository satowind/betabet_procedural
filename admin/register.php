<?php


if( isset( $_POST["register"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    $username = $email = $password = $name = $staff = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
    if( !$_POST["name"] ) {
        $nameError = "Please enter a name <br>";
    } else {
        $name = validateFormData( $_POST["name"] );
    }

    //  if( !$_POST[""] ) {
    //     $staffError = "Please enter your staff id <br>";
    // } else {
    //     $staff = validateFormData( $_POST["staff"] );
    // }


 if( !$_POST["username"] ) {
        $usernameError = "Please enter a Username <br>";
    } else {
        $username1 = validateFormData( $_POST["username"] );
         $query = "SELECT `username` FROM `admintable` WHERE `username`= '$username1' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $usernameError = "Username Already Exist<br>";
        }else{
            $username = validateFormData( $_POST["username"] );
        }
    }



    if( !$_POST["staff"] ) {
        $staff = "Please enter a Staff Id <br>";
    } else {
        $staff = validateFormData( $_POST["staff"] );
         $query = "SELECT `staff` FROM `admintable` WHERE `staff`= '$staff' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $staffError = "Staff Id Already Exist<br>";
        }else{
            $staff = validateFormData( $_POST["staff"] );
        }
    }


   
    if( !$_POST["email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
        $email = validateFormData( $_POST["email"] );
    }

    if( !$_POST["phone"] ) {
        $phoneError = "Please enter Phone Number <br>";
    } else {
        $phone = validateFormData( $_POST["phone"] );
    }

    // if( !$_POST["branch"] ) {
    //     $branchError = "Please enter Staff branch <br>";
    // } else {
    //     $branch = validateFormData( $_POST["branch"] );
    // }

    

    if( !$_POST["password"] ) {
        $passwordError = "Please enter a password <br>";
    } else {
        $pass = validateFormData( $_POST["password"] );
        $password=password_hash("$pass",PASSWORD_DEFAULT);
    }

     if( !$_POST["password_confirmation"] ) {
        $passwordError1 = "Please re-enter a password <br>";
    } elseif($pass!==$_POST["password_confirmation"]){
    	$passwordError1="Both password dont match <br>";
    }else {
        $pass1 = validateFormData( $_POST["password_confirmation"] );
        $password1=password_hash("$pass",PASSWORD_DEFAULT);
    }

   
    // check to see if each variable has data
    if(  $email && $password && $name && $staff && $username ) {
        $query = "INSERT INTO `admintable` (`email`,`password`,`name`,`staff`,`phone`,`username`)
        VALUES ('$email','$password', '$name','$staff','$phone','$username')";

        if( mysqli_query( $conn, $query ) ) {

 		
            echo "<div class='alert alert-success'>New record in database!</div>";
            header('location:madmin?alert=success');
            } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }

       
    }
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Mcfranc energy login" />
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

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<h1 style="color: RED">BETABET</h1>
		
			
			<p class="description">Create New Staff</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>


<style >
	
	body{
  /* Safari 4-5, Chrome 1-9 */
    background: -webkit-gradient(radial, center center, 0, center center, 460, from(#1a82f7), to(#2F2727));

  /* Safari 5.1+, Chrome 10+ */
    background: -webkit-radial-gradient(circle, #1a82f7, #2F2727);

  /* Firefox 3.6+ */
    background: -moz-radial-gradient(circle, #1a82f7, #2F2727);

  /* IE 10 */
    background: -ms-radial-gradient(circle, #1a82f7, #2F2727);
    height:600px;
}

.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

label.label-floatlabel {
    font-weight: bold;
    color: #46b8da;
    font-size: 11px;
}
</style>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up Admin Control</h3>
			 			</div>
			 			<div class="panel-body">

			    		<form name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" role="form">
			    		
			    				
			    			<div class="form-group">
			    				<small class="text-danger">* <?php echo isset($nameError) ? $nameError : ''; ?></small>
			                	<input type="text" name="name" id="first_name" class="form-control input-sm floatlabel" placeholder="Full Name">
			    			</div>
			    				
	    					<div class="form-group">
	    						<small class="text-danger">* <?php echo isset($staffError) ? $staffError : ''; ?></small>
	    						<input type="text" name="staff" id="last_name" class="form-control input-sm" placeholder="Staff Id">
	    					</div>

			    			<div class="form-group">
			    				<small class="text-danger">* <?php echo isset($usernameError) ? $usernameError : ''; ?></small>
			    				<input type="text" name="username" id="last_name" class="form-control input-sm" placeholder="User Name">
			    			</div>
			    				
			    			

			    			<div class="form-group">
			    				<small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small>
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>



							<div class="form-group">
			    				<small class="text-danger">* <?php echo isset($phoneError) ? $phoneError : ''; ?></small>
			    				<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number">
			    			</div>
			    				
			    			

			    			<!-- <div class="form-group">
			    				<small class="text-danger">* <?php //echo isset($branchError) ? $branchError : ''; ?></small>
			    				<input type="text" name="branch" id="branch" class="form-control input-sm" placeholder="Staff Branch">
			    			</div> -->




			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<small class="text-danger">* <?php echo isset($passwordError) ? $passwordError : ''; ?></small>
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<small class="text-danger">* <?php echo isset($password1Error) ? $password1Error : ''; ?></small>
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<button type="submit" class="btn btn-danger btn-block" name="register">Register</button>
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    <script >$(function() {
  $('input').floatlabel({labelEndTop:0});
});</script>


	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>