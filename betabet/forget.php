

<?php
session_start();
ob_start();
if( isset( $_POST['submit'] ) ) {
    //connect to database
	require 'includes/connection.php'; 
    require 'includes/functions.php';

    
   $email = "";
   
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
  



     // verify email
    if( !$_POST["email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
       $emails = validateFormData( $_POST["email"] );
        $query = "SELECT `email` FROM `usertable` WHERE `email` = '$emails' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {

            $email = validateFormData( $_POST["email"] ); 
        }else{

           
                 $emailError = "Email Does Not Exit<br>";
            }
           
        }
    
    
    // check to see if each variable has data
    if($email) {

        $rand = rand(1,9999);

        $query = "UPDATE `usertable` SET passWord = '$rand' WHERE `email` = '$email'";

        if( mysqli_query( $conn, $query ) ) {
           //add php mailer to send the $rand as the persons new Authenthication Pin
        require '../PHPMailer/PHPMailerAutoload.php';

        $email= $email;
        $subject ="Your Verification Code";
        $user_name ="Hello Sir/Madam";
        $mail_address ="info@citycybersolutions.com";
        $mail_name ="Betabet";
        $password ="citycyber@";
        $msg = " Please keep this message secret.<br> Your Verification Code is";
        $p =$rand;


        function send_mail($email,$subject,$user_name,$mail_address,$mail_name,$password,$msg,$p) {
        //Email begins

          $name = $user_name;
                      
          $to = $email;

          $message = "
          <html>
          <head>
          <title>".$mail_address." ".$mail_name."</title>
          </head>
          <body>
          <p>".$msg."</p>
          <h2> ".$p."</h2>
          </body>
          </html>
          ";

            $mail = new PHPMailer();
            $mail->IsSMTP();
            //$mail->Debugoutput = 'html';
            $mail->Host = "server251.web-hosting.com";
            $mail->SMTPDebug = 2;
            $mail->SMTPAuth = true;
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->Username = $mail_address;
            $mail->Password = $password;
            //Set who the message is to be sent from
            $mail->setFrom($mail_address, $mail_name);
            //Set an alternative reply-to address
            $mail->addReplyTo($mail_address, $mail_name);
            //Set who the message is to be sent to
            $mail->addAddress($email, $user_name);
            //Set th subject line
            $mail->Subject = $subject;
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML($message);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
            $sendEmail = $mail->Send();
            if ($sendEmail == false) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
    }


  send_mail($email,$subject,$user_name,$mail_address,$mail_name,$password,$msg,$p);
            // redirect user to clients page
              header( "Location: confirm" );

        
        } else {
            $sato= "Error: ". $query . "<br>" . mysqli_error($conn);
        }
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
                                Forgot Password
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
										<h3 style="color: black;font-family:'roboto'">Forgot Password</h3>
                                         <form id="register-form" name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">

                                           

                                            <div class="form-group">
                                                 <small class="text-danger"> <?php echo isset($emailError) ? $emailError : ''; ?></small>
                                                <label for="register-form-email" style="color: black; font-family:'operator mono'">Enter Your Email Address:</label>
                                                <input class="form-control" type="text" id="register-form-email" name="email" value="" class="form-control" required="true"/>
                                            </div>

                                           

                                        
                                            <div class="form-group nobottommargin">
                                                <button style="padding: 10px 15px; background:#c00c00; color: #fff; border-radius: 10px" class="btn-danger pull-right" id="register-form-submit" name="submit" value="register">Reset Password</button>
                                            </div>

                                        </form>


									</div>
								</div>

    </div>
    
  
</div>

</div>
	</div>
<?php require 'includes/footer.php'; ?>