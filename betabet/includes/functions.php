<?php
// FUNCTIONS.php

// clean the form data to prevent injections

/*  Built in functions used:
    trim()
    stripslashes()
    htmlspecialchars()
    strip_tags()
    str_replace()
*/

function validateFormData($formData) {
    $formData = trim( stripslashes( htmlspecialchars( strip_tags( str_replace( array( '(', ')' ), '', $formData ) ), ENT_QUOTES ) ) );
    return $formData;
}

 function SendSms( $phone, $sender, $msgs ) {
		$quickbuy_user = "Betabet";
		$quickbuy_password = "@betabet";

		$quickbuy_url = "http://www.quickbuysms.com/index.php?option=com_spc&comm=spc_api";

		$url = '&username=' . $quickbuy_user;
		$url .= '&password=' . $quickbuy_password;
		$url .= '&sender=' . $sender;
		$url .= '&recipient=' . $phone;
		$url .= '&message=' .urlencode($msgs);

		$urltouse = $quickbuy_url . $url;

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $urltouse );
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); // For HTTPS
		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false ); // For HTTPS
		curl_exec( $ch );
		
		$statusCode = curl_getinfo( $ch, CURLINFO_HTTP_CODE ); // Returns 200 if everything went well
		if ( $statusCode == 200 ) {
			return "Done";
		} else {
			return "Failed";

		}
		curl_close( $ch );
	}


// 	function send_mail($email,$subject,$user_name,$mail_address,$mail_name,$password,$msg,$p) {
//         //Email begins

//           $name = $user_name;
                      
//           $to = $email;

//           $message = "
//           <html>
//           <head>
//           <title>".$mail_address." ".$mail_name."</title>
//           </head>
//           <body>
//           <h3>".$msg."</h3>
//           <p> ".$p."</p>
//           </body>
//           </html>
//           ";

//             $mail = new PHPMailer();
//             $mail->IsSMTP();
//             //$mail->Debugoutput = 'html';
//             $mail->Host = "server251.web-hosting.com";
//             $mail->SMTPDebug = 0;
//             $mail->SMTPAuth = true;
//             $mail->Port = 587;
//             $mail->SMTPSecure = 'tls';
//             $mail->Username = $mail_address;
//             $mail->Password = $password;
//             //Set who the message is to be sent from
//             $mail->setFrom($mail_address, $mail_name);
//             //Set an alternative reply-to address
//             $mail->addReplyTo($mail_address, $mail_name);
//             //Set who the message is to be sent to
//             $mail->addAddress($email, $user_name);
//             //Set th subject line
//             $mail->Subject = $subject;
//             //Read an HTML message body from an external file, convert referenced images to embedded,
//             //convert HTML into a basic plain-text alternative body
//             $mail->msgHTML($message);
// //Replace the plain text body with one created manually
// //$mail->AltBody = 'This is a plain-text message body';
// //Attach an image file
// //$mail->addAttachment('images/phpmailer_mini.png');
// //send the message, check for errors
//             $sendEmail = $mail->Send();
//             if ($sendEmail == false) {
//                 echo "Mailer Error: " . $mail->ErrorInfo;
//             }
//     }

?>