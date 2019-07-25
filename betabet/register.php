

<?php
session_start();

if( isset( $_POST["register-form-submit"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    
       
       

    $username = $email = $password = $phone = $fname =$lname = $gender = $address = $state = $local =  $street= $pin =$dob = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
     // verify name
    if( !$_POST["register-form-sname"] ) {
        $snameError = "Please enter Your Surname <br>";
    } else {
        $sname = validateFormData( $_POST["register-form-sname"] );
    }

    if( !$_POST["register-form-fname"] ) {
        $fnameError = "Please enter Your Firstname <br>";
    } else {
        $fname = validateFormData( $_POST["register-form-fname"] );
    }



     // verify username
    if( !$_POST["register-form-username"] ) {
        $usernameError = "Please enter a username <br>";
    } else {
        $usernames = validateFormData( $_POST["register-form-username"] );
         $query = "SELECT `userName` FROM `usertable` WHERE `UserName`= '$usernames' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $usernameError = "User Name Already Exist<br>";
        }else{
            $username = validateFormData( $_POST["register-form-username"] );
        }
    }



     // verify email
    if( !$_POST["register-form-email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
        $emails = validateFormData( $_POST["register-form-email"] );
        $query = "SELECT `email` FROM `usertable` WHERE `email`= '$emails' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $emailError = "Email Already Exist<br>";
        }else{

             if (!filter_var($_POST["register-form-email"], FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
            }else{
                $email = validateFormData( $_POST["register-form-email"] ); 
            }
           
        }
    }


     // verify phone
    if( !$_POST["register-form-phone"] ) {
        $phoneError = "Please enter a Phone number <br>";
    } else {
        $phone = validateFormData( $_POST["register-form-phone"] );
    }

    if( !$_POST["register-form-dob"] ) {
        $dobError = "Please enter a Phone number <br>";
    } else {
        $dob = validateFormData( $_POST["register-form-dob"] );
    }


     // verify password
    if( !$_POST["register-form-password"] ) {
        $passwordError = "Please enter a password <br>";
    } else {
        $pass = validateFormData( $_POST["register-form-password"] );
        $password=password_hash("$pass",PASSWORD_DEFAULT);
    }


     // verify reented password
     if( !$_POST["register-form-repassword"] ) {
        $passwordError1 = "Please re-enter a password <br>";
    } elseif($pass!==$_POST["register-form-repassword"]){
    	$passwordError1="Both password dont match <br>";
    }else {
        $pass1 = validateFormData( $_POST["register-form-repassword"] );
        $password1=password_hash("$pass",PASSWORD_DEFAULT);
    }


     // verify gender
    if( !$_POST["gender"] ) {
        $genderError = "Please Choose a gender <br>";
    } else {
        $gender = validateFormData( $_POST["gender"] );
    }


    // verify gender
    if( !$_POST["address"] ) {
        $addressError = "Please enter your address <br>";
    } else {
        $address = validateFormData( $_POST["address"] );
    }


    // verify gender
    if( !$_POST["state"] ) {
        $stateError = "Please  choose a state <br>";
    } else {
        $state = validateFormData( $_POST["state"] );
    }


    // verify gender
    if( !$_POST["local"] ) {
        $localError = "Please  choose a Local Government Area <br>";
    } else {
        $local = validateFormData( $_POST["local"] );
    }
    
    // check to see if each variable has data
    if( $username && $email && $password && $password1 && $phone && $sname && $fname && $local && $state && $gender && $address && $dob ) {
        $query = "INSERT INTO `usertable` ( `surname`,`firstname`, `passWord`, `email`,`phoneNumber`,`userName`,`gender`,`address`,`lga`, `state`,`status`,`branch`,`dob`)
        VALUES ('$sname','$fname', '$password', '$email', '$phone', '$username', '$gender','$address','$local','$state',2,'virtual branch','$dob')";

        if( mysqli_query( $conn, $query ) ) {

             //add php mailer to send the $rand as the persons new Authenthication Pin
        require '../PHPMailer/PHPMailerAutoload.php';

        $email= $email;
        $subject ="Thanks For Registering";
        $user_name ="Hello Sir/Madam";
        $mail_address ="info@citycybersolutions.com";
        $mail_name ="Betabet";
        $password ="citycyber@";
        $msg = "Thank you for your interst in City Cyber Solution's Betabet app.<br> Your information was well received and you will be able to login after approval.<br> we will communicate with you within 24hrs thanks.<br><br>";
        $p =" &copy; <a href='http://citycybersolutions.com'>City cyber solutions</a>. Powered by <a href='http://optisoft.ng'>Optisoft</a>";

        $sender = "BetaBET";
        $msgs = "Your information was well received and you will be able to login after approval.we will communicate with you within 24hrs thanks.";

  send_mail($email,$subject,$user_name,$mail_address,$mail_name,$password,$msg,$p);
  SendSms( $phone, $sender, $msgs );

            $sato="<div class='alert alert-success'> <h4>Request Sent Wait For Approval<a href='../index' class='pull-right btn btn-danger' >Go back to home</a></h4><a class='close' data-dismiss='alert'>&times;</a></div>";
           
        } else {
            $sato= "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    }
    
}



if( isset( $_POST["submit"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    
       
       

    $code = $id = $branch=  "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
     // verify name
    if( !$_POST["code"] ) {
        $codeError = "Please enter your code <br>";
    } else {
        $code = validateFormData( $_POST["code"] );
    }

    // verify gender
     if( !$_POST["id"] ) {
        $idError = "Please enter your id <br>";
    } else {
        $id = validateFormData( $_POST["id"] );
    }


    // verify gender
    if( !$_POST["branch"] ) {
        $branchError = "Please  choose a branch <br>";
    } else {
        $branch = validateFormData( $_POST["branch"] );
    }
    
    // check to see if each variable has data
    if( $code && $id && $branch ) {
        $query = "INSERT INTO `usertable` (`branch`, `bet9ja_code`, `bet9ja_id`)
        VALUES ('$branch', '$code', '$id')";

        if( mysqli_query( $conn, $query ) ) {
            $sato="<div class='alert alert-success'><h4>Request Sent Wait For Approval<a href='../index' class='pull-right btn btn-danger' >Go back to home</a></h4><a class='close' data-dismiss='alert'>&times;</a></div>";
           
        } else {
            $sato= "Error: ". $query . "<br>" . mysqli_error($conn);
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <li ><a href="index">LOGIN</a></li>
    <li class="active"><a href="register">REGISTER</a></li>
    
  </ul>

  <?php echo isset($sato) ? $sato: ''; ?>
  <div class="tab-content well">
    <div id="home" class="tab-pane fade in active">
     	<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
                                        <h3>Register for an Account</h3>



                                        <div id="ask">
                                          <div class="form-group">
        
                                          <label for="client-email"><h3 class="h3 text-danger"> Do you have a beta9ja account with city cyber solutions? </h3></label>
                                              <select class="form-control input-lg" id="choose" name="choose">
                                                  <option value="" >---Choose Yes or No---</option>
                                                  <option value="yes" >Yes</option>
                                                  <option value="no" >No</option>
                                              </select>
                                          </div>
                                        </div>

                                        <div id="yes" style="display: none;">
                                         <form id="register-form" name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
                                              <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($cityError) ? $cityError : ''; ?></small>
                                                <label for="register-form-repassword"> Choose Your City </label>
                                                <select onchange="populateBranch(this)" class="form-control" name="city">
                                                  <option value="">--Choose Your City--</option>
                                                    <?php 
                                                    // query & result
                                                    require 'includes/connection.php';
                                                    $query = "SELECT city FROM branch WHERE hierachy = 'branch office'";
                                                    $result = mysqli_query( $conn, $query );

                                                            if( mysqli_num_rows($result) > 0 ) {
                                                            // we have data!
                                                            // output the data       
                                                    while( $row = mysqli_fetch_assoc($result) ) {
                                                        echo " 
                                                          <option value='".$row['city']."'>".strtoupper($row['city'])."</option>
                                                         ";
                                                    }
                                                }
                                                        ?>
                                                 
                                                </select>
                                            </div>

                                             <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($branchError) ? $branchError : ''; ?></small>
                                                <label for="register-form-repassword"> Choose Your Branch </label>
                                                <select id="branchP" class="form-control" name="branch">
                                                  <option value="">--Choose your branch--</option>
                                                                                                    
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($idError) ? $idError : ''; ?></small>
                                                <label for="register-form-name">Bet9ja Id</label>
                                                <input class="form-control" type="text" id="name" name="id" value="" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($codelError) ? $codeError : ''; ?></small>
                                                <label for="register-form-email">Bet9ja Code</label>
                                                <input class="form-control" type="text" id="email" name="code" value="" class="form-control" />
                                            </div>

                                            <div class="form-group nobottommargin">
                                                <button class="btn btn-danger pull-right" id="submit" name="submit" value="register">Register Now</button>
                                            </div>

                                        </form>
                                        </div>















                                        <div id="no" style="display: none;">                
                                        <form id="register-form" name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($snameError) ? $snameError : ''; ?></small>
                                                <label for="register-form-name">Surname Name:</label>
                                                <input class="form-control" type="text" id="register-form-sname" name="register-form-sname" value="" class="form-control" />
                                            </div>
                                             <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($fnameError) ? $fnameError : ''; ?></small>
                                                <label for="register-form-name">First Name:</label>
                                                <input class="form-control" type="text" id="register-form-fname" name="register-form-fname" value="" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small>
                                                <label for="register-form-email">Email Address:</label>
                                                <input class="form-control" type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
                                            </div>

                                             <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($dobError) ? $dobError : ''; ?></small>
                                                <label for="register-form-email">Date Of Birth:</label>
                                                <input class="form-control" type="date" id="register-form-dob" name="register-form-dob" value="" class="form-control" />
                                            </div>
                                            

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($phoneError) ? $phoneError : ''; ?></small>
                                                <label for="register-form-phone">Phone:</label>
                                                <input class="form-control" type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
                                            </div>

                                             <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($usernameError) ? $usernameError : ''; ?></small>
                                                <label for="register-form-username">Choose a Username: </label>
                                                <input class="form-control" type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                                            </div>


                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($passwordError) ? $passwordError : ''; ?></small>
                                                <label for="register-form-password">Choose Password:</label>
                                                <input class="form-control" type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($passwordError1) ? $passwordError1 : ''; ?></small>
                                                <label for="register-form-repassword">Re-enter Password:</label>
                                                <input class="form-control" type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
                                            </div>

                                            <div class="">
                                                 <small class="text-danger">* <?php echo isset($genderError) ? $genderError : ''; ?></small>
                                                <label for="register-form-gender">Gender:</label>
                                                 <input  type="radio" name="gender" value="male" checked> Male
                                                  <input  type="radio" name="gender" value="female"> Female
                                            </div>

                                            <div class="form-group">
                                                 <small class="text-danger">* <?php echo isset($addressError) ? $addressError : ''; ?></small>
                                                <label for="register-form-repassword">Address </label>
                                                <input class="form-control" type="text" id="register-form-repassword" name="address" value="" class="form-control" />
                                            </div>

                                           <div class="form-group">
        <small class="text-danger">* <?php echo isset($nationalityError) ? $nationalityError : ''; ?></small>
        <label for="register-form-repassword">Country: </label>
            <select class="form-control input-lg" id="national" name="nationality">
                <option value="">-Choose Nationality-</option>
                <option value="Nigerian">Nigeria</option>
                <option value="Others">Others</option>
            </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($stateError) ? $stateError : ''; ?></small>
       <label for="register-form-repassword">State: </label>
        <select class="form-control input-lg" name="state" id="state">
        <option value="">---select state---</option>
    </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($localError) ? $localError : ''; ?></small>
    <label for="register-form-repassword">Local Government Area </label>
        <select class="form-control input-lg" name="local" id="local">
            <option value="">---select L.G---</option>
        </select>

    </div>

                                           
                                        
                                            <div class="form-group nobottommargin">
                                                <button class="btn btn-danger pull-right" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                            </div>

                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>


    
  
</div>

</div>
	</div>

  <script>
function populateBranch(sel){
 var city = sel.value;

  $.ajax({
    type:"POST",
       dataType:"JSON",
    data:{
      city:city
    },
    url:"./q.php",
    success:function(res){
      var bp = document.getElementById('branchP');
      for(var f=0;f<bp.options.length;f++)
        bp.options.remove(f);

      if(res.length>0){

        for(var i=0; i<res.length;i++){
          var cd = document.createElement("option");
        cd.setAttribute("value",res[i].name);
        cd.innerHTML=res[i].name;
        bp.appendChild(cd);
        }
        
      }
     
    },
    error:function(er){
      console.log(er);
    }
  });
}


    $('body').on('change', '#choose', function() {
            var yes = $("#yes");
            var no =$("#no");
            var choose =$("#choose");
//
        if(choose.val() === 'yes'){

            yes.css("display", "block");
             no.css("display", "none");
            }else if(choose.val() === 'no'){
                no.css("display", "block");
                 yes.css("display", "none");
            }else{
                yes.css("display", "none");
                 no.css("display", "none");
            }

})


</script>
<?php 
require '../admin/includes/js.php';
require 'includes/footer.php'; ?>