<?php 
session_start();
require 'includes/connection.php';
   global $conn;
 $query = "SELECT * FROM `contact` WHERE `id`= 1 ";
       
        $result_set = mysqli_query($conn,$query);
       
        $row = mysqli_fetch_assoc($result_set);
        global $row;
        global $rows;
require './includes/header.php'; ?>

<?php
if( isset( $_POST["contact"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    
       
       

    $fullname = $email = $message = $phone =  "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
    if( !$_POST["fullname"] ) {
        $nameError = "Please enter a name <br>";
    } else {
        $fullname = validateFormData( $_POST["fullname"] );
    }

    if( !$_POST["message"] ) {
        $usernameError = "Please enter a username <br>";
    } else {
        $message = validateFormData( $_POST["message"] );
    }
     if( !$_POST["phone"] ) {
            $nameError = "Please enter a name <br>";
        } else {
            $phone = validateFormData( $_POST["phone"] );
        }

        if( !$_POST["email"] ) {
            $usernameError = "Please enter a username <br>";
        } else {
            $email = validateFormData( $_POST["email"] );



        
       
        
    // check to see if each variable has data
    if( $email && $phone && $fullname && $message ) {
        $query = "INSERT INTO `contactus` ( `name`,  `email`,`phone`,`message`)
        VALUES ('$fullname',  '$email', '$phone', '$message')";

        if( mysqli_query( $conn, $query ) ) {
            $sato="<div class='alert alert-success'>Thanks For Contacting Us We will Reach You Soon<a class='close' data-dismiss='alert'>&times;</a></div>";
           
        } else {
            $sato= "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    }
    
}}
?>


        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Contact</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="index">Home</a>
                </li>
                <li class="uk-active"><span>Contact</span>
                </li>
            </ul>
        </div>
<?php echo isset($sato) ? $sato: ''; ?>
        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="contact-page">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="contact-title">
                                            <h2><?php echo '' . $row["header"] . ''; ?></h2>
                                        </div>
                                        <div class="contact-text"><?php echo '' . $row["subHeader"] . ''; ?></div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="contact-socials-wrap">
                                            <ul class="contact-socials">
                                <li><a href="<?php echo '' . $rows["facebook"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a></li>
                               <li> <a href="<?php echo '' . $row["twitter"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a></li>
                                <li><a href="<?php echo '' . $rows["google"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a></li>
                                <li><a href="<?php echo '' . $rows["pintrest"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a></li>
                               <li> <a href="<?php echo '' . $rows["youtube"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a></li>
                               <li> <a href="<?php echo '' . $rows["instagram"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a></li>
                                <li><a href="<?php echo '' . $rows["flicker"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid" data-uk-grid-match="{target:'.contact-enquiries'}">
                                   
                                    <div style="width:90%; margin:auto" align="center" class="uk-panel">
                                        <div style="min-height: 139px;" class="contact-enquiries">
                                            <div class="title"><h3>HEAD OFFICE</h3h2></div>
                                            <div class="phone"><h5><i class="uk-icon-phone"></i><?php echo '' . $row["HO_phone"] . ''; ?></h5></div>
                                            <div class="mail"><h5>
                                            <i class="uk-icon-envelope"></i>
                                                <a href="malto:support@torbara.com">
                                                    <?php echo '' . $row["HO_email"] . ''; ?>
                                                </a>
                                            </h5>
                                            </div>
                                            <div class="location"><i class="uk-icon-map-marker"></i><?php echo '' . $row["HO_address"] . ''; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                <div class="contact-info-lines uk-vertical-align-middle">
                                                    <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span><?php echo '' . $row["phone"] . ''; ?></div>
                                                    <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:<?php echo '' . $row["email"] . ''; ?>"><?php echo '' . $row["email"] . ''; ?></a>
                                                        
                                                    </div>
                                                    <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span><?php echo '' . $row["address"] . ''; ?></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        <div class="contact-form-title">
                                                            <h2>Get in touch</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        <form id="contact-form" name="contact-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" >
                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="fullname" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">Phone</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="phone" id="aics_email" class="email" placeholder="Phone" value="" type="text">
                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input style="width: 440px" name="email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea style="width: 500px" name="message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message">How can we help you </textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div id="aiContactSafeBtns">
                                                                                <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                                    <table style="margin-left:auto; margin-right:auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                                </td>
                                                                                                <td id="td_aiContactSafeSendButton">
                                                                                                    <input id="aiContactSafeSendButton" value="Send" type="submit" name="contact">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    window.map = false;
                                                            
                                    
                                                            
                                    function initialize(){
                                        var myLatlng = new google.maps.LatLng(6.205,6.8987);
                                    
                                        var mapOptions = {
                                            zoom:10,
                                            center: myLatlng,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            scrollwheel: false,

                                            streetViewControl:false,
                                            overviewMapControl:false,
                                            mapTypeControl:false    
                                            
                                        };
                                        
                                        window.map = new google.maps.Map(document.getElementById('map'), mapOptions);                                                                                                                                                                                                                                                                               
                                        
                                    }
                                
                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>
                            <div id="map"></div>
                                                
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

      <?php require './includes/footer.php'; ?>