

<?php
session_start();

if( isset( $_POST["submit"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    
       
       

    $email = $password = $pin = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
     // verify email

    if( !$_POST["email"] ) {
        $emailsError = "Please enter your email <br>";
    } else {
    $email = validateFormData( $_POST["email"] );
    }


    // verify pin

    if( !$_POST["pin"] ) {
        $emailError = "Please enter your Pin <br>";
    } else {

        $pins = validateFormData( $_POST["pin"] );

        $query = "SELECT `passWord` FROM `usertable` WHERE `email`= '$email' LIMIT 1";
       
        $result = mysqli_query($conn,$query);

        if( mysqli_num_rows($result) > 0 ) {
        
        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $pinss       = $row['passWord'];

        }
    }else{
      $emailError = 'pin doesnt exist';
    }

    if(  $pins == $pinss  ) {
            
           $pin = password_hash("$pins",PASSWORD_DEFAULT);

        } else { // hashed password didn't verify
            
            // error message
            $emailError = "Wrong Verification Pin Try again.<br/>";
        }
  }



     // verify password
    if( !$_POST["password"] ) {
        $passwordError = "Please enter a password <br>";
    } else {
        $pass = validateFormData( $_POST["password"] );
        $password= password_hash("$pass",PASSWORD_DEFAULT);
    }


     // verify reented password
     if( !$_POST["repassword"] ) {
        $passwordError1 = "Please re-enter a password <br>";
    } elseif($pass!==$_POST["repassword"]){
      $passwordError1="Both password dont match <br>";
    }else {
        $pass1 = validateFormData( $_POST["repassword"] );
    }


     
    
    // check to see if each variable has data
    if( $pin && $password && $pass1  &&   $email) {

         $querys = "UPDATE `usertable` SET passWord = '$password' WHERE `email` = '$email'";
           
        if( mysqli_query( $conn, $querys ) ) {
             $sato="<div class='alert alert-success'>Password Reset Successful<a style='padding: 10px 15px; background:#c00c00; color: #fff; border-radius: 10px' class='btn' href='index'>Login</a><a class='close' data-dismiss='alert'>&times;</a></div>";

              echo "
                  <script>
                  
    setTimeout(function(){ window.location = 'index'; }, 9000);
  
                  </script>

            ";
           
        } else {
            $sato= "try again";
        }
    }
    
}

/*
MYSQL INSERT QUERY

INSERT INTO users (id, username, password, email, signup_date, biography)
VALUES (NULL, 'jacksonsmith', 'abc123', 'jack@son.com', CURRENT_TIMESTAMP, 'Hello! I'm Jackson. This is my bio.');

*/

// mysqli_close($conn);


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
                               Reset password
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
  

  
  <?php echo isset($sato) ? $sato: ''; ?>
  <div class="tab-content well">
    <div id="home" class="tab-pane fade in active">
      <div class="panel panel-default nobottommargin">
                  <div class="panel-body" style="padding: 40px;">
                  <h3 style="color: black;font-family:'roboto'">Check Your Email For Pin</h3>

                                        <form id="register-form" name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

                                             <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($emailsError) ? $emailsError : ''; ?></small>
                                                <label for="register-form-email" style="color: black; font-family:'operator mono'">Email</label>
                                                <input class="form-control" type="email" id="register-form-emails" name="email" value="" class="form-control" required="true"/>
                                            </div>
                                          
                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small>
                                                <label for="register-form-email" style="color: black; font-family:'operator mono'">Enter Verification Pin</label>
                                                <input maxlength="4" class="form-control" type="text" id="register-form-email" name="pin" value="" class="form-control" required="true"/>
                                            </div>

                                           

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($passwordError) ? $passwordError : ''; ?></small>
                                                <label for="register-form-password" style="color: black; font-family:'operator mono'">New Password:</label>
                                                <input class="form-control" type="password" id="register-form-password" name="password" value="" class="form-control" required="true"/>
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($passwordError1) ? $passwordError1 : ''; ?></small>
                                                <label for="register-form-repassword" style="color: black; font-family:'operator mono'">Re-enter New Password:</label>
                                                <input class="form-control" type="password" id="register-form-repassword" name="repassword" value="" class="form-control" required="true"/>
                                            </div>

                                            
                                        
                                            <div class="form-group nobottommargin">
                                                <button style="padding: 10px 15px; background:#c00c00; color: #fff; border-radius: 10px" class="btn-danger pull-right" id="register-form-submit" name="submit" value="register">Register Now</button>
                                            </div>

                                        </form>
                  </div>
                </div>

    </div>
    
  
</div>

</div>
  </div>
<?php require 'includes/footer.php'; ?>