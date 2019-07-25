<?php global $rows; ?>

 <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <div class="footer-logo">
                                    <a href="/"><img src="images/footer-logo-img.png" alt=""><span>Beta</span>BET</a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                         <a href="<?php echo '' . $rows["facebook"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="<?php echo '' . $row["twitter"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="<?php echo '' . $rows["google"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                <a href="<?php echo '' . $rows["pintrest"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                <a href="<?php echo '' . $rows["youtube"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="<?php echo '' . $rows["instagram"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="<?php echo '' . $rows["flicker"] . ''; ?>"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                               
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


<?php 

if (isset($_POST['Submit'])) {
    
    require 'includes/connection.php';
    global $conn;
    require 'includes/functions.php';

    $email='';


    if( !$_POST["email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
        $emails = mysqli_real_escape_string($conn,$_POST["email"] );
        $querys = "SELECT `email` FROM `newsletter` WHERE `email`= '$emails' LIMIT 1";
       
        $result = mysqli_query($conn,$querys);
        
        if( mysqli_num_rows($result) > 0 ) {
             $emailError = "Email Already Exist<br>";
        }else{
            $email = $emails;
        }
    }
     
    if ($email) {
        $query = "INSERT INTO `newsLetter` (`email`) VALUES ('$email')";
  

    if( mysqli_query( $conn, $query ) ) {
            $satowind="
                      <div class='row'>
                          <div class='col-sm-6 col-sm-offset-3'>
                              <div class='alert alert-danger'>Thanks for Subscribing to Our News Letter<a class='close' data-dismiss='alert'>&times;</a></div>
                          </div>
                      </div>";
           

        } else {
            $satowind= "Error: ". $query . "<br>" . mysqli_error($conn);
        }
} 

 }

 ?>
<?php echo isset($satowind) ? $satowind: ''; ?>
            <div class="tm-bottom-g-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">


                        <div class="uk-width-1-1 uk-width-large-1-2 row" style="width: 100%">
                            <div  class="uk-panel col-sm-6 col-sm-offset-3">
                                <div class="" id="">
                                    <div class="" id="">
                                        <form id="" method="post" name="sub" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>">
                                            <div class="acymailing_module_form">
                                                <div class="mail-title">Newsletters</div>
                                                <div class="acymailing_introtext">Subscribe to Our Weekly Mail</div>
                                                <div class="clear"></div>
                                                <div class="space"></div>
                                               <h3> <small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small></h3>
                                                <table class="acymailing_form">
                                                    <tbody>
                                                        <tr>
                                                            <td class="">
                                                                <span class="mail-wrap">
								                                    <input id=""  class="" name="email" style="width:80%" placeholder="Enter your email"  type="text">
                                                            </span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="">
                                                                <span class="submit-wrap">
                                                                    <span class="submit-wrapper">
                                                                        <input class="btn btn-primary" value="Subscribe" name="Submit"  type="submit">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer id="tm-footer" class="tm-footer">


                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap">
                                    <div class="foot-menu-wrap">
                                        <ul class="nav menu">
                                            <li class="item-165"><a href="../index">City Cyber</a>
                                            </li>
                                            <li class="item-167"><a href="../contact">Contact Us</a>
                                            </li>
                                            <li class="item-168"><a href="../Branches">Our Branches</a>
                                            </li>
                                            <li class="item-169"><a href="../news">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="copyrights">Copyright © 2015 <a href="#">BetaBET</a>. All Rights Reserved.Designed By <a href="https://www.optisoft.ng">Optisoft</a> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-parent uk-active"><a href="../index">City Cyber Solutions</a>
                        
                    </li>
                    <li><a href="../services">Our Services</a></li>
                    <li class="uk-parent"><a href="../Branches">Our Branches</a>
                       
                    </li>
                    <li class="uk-parent"><a href="../contact">Contact Us</a>
                        
                    </li>
                <?php
                if( isset($_SESSION['loggedInUser']) ) { // if user is logged in
                ?>

                    <li><a href="profile.php">Profile</a>
                    </li>
                    </li>
                    <li><a href="logout.php">Logout</a>
                    </li>
                <?php
             } else {?>

                    <li><a href="login.php">Register/Login</a>
                        <?php  }
                ?>
                </ul>
            </div>
        </div>
    </div>

<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/jquery.js"></script>
<script  type="text/javascript" src="js/uikit.js"></script>
<script   type="text/javascript" src="js/SimpleCounter.js"></script>
<script  type="text/javascript" src="js/components/grid.js"></script>
<script  type="text/javascript" src="js/components/slider.js"></script>
<script  type="text/javascript" src="js/components/slideshow.js"></script>
<script  type="text/javascript" src="js/components/slideset.js"></script>
<script  type="text/javascript" src="js/components/sticky.js"></script>
<script  type="text/javascript" src="js/components/lightbox.js"></script>
<script  type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script  src="http://maps.google.com/maps/api/js?key=AIzaSyDLfjH-rl16zH64tdzOz2Hcjx1KeGqYVJc"></script>
<script  type="text/javascript" src="js/theme.js"></script>
<script  type="text/javascript">
    new SimpleCounter("countdown4", 1447448400, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
  });
</script>
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../admin/assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="../admin/assets/js/select2/select2.css">
     <link rel="stylesheet" href="../admin/assets/js/datatables/datatables.css">

    <script  src="../admin/assets/js/datatables/datatables.js"></script>
    <script  src="../admin/assets/js/select2/select2.min.js"></script>
      <script  src="../admin/assets/js/neon-chat.js"></script>

</body>

</html>
<!-- **********************************************************************************************
                            designed by satoseries an optisoft project

                        optisoft official website -> https://optisoft.ng/


                      satoseries github repo -> https://github.com/satowind

                            ****************************************

                     satoseries twitter page -> https://twitter.com/Satowind

                  satoseries facebook page -> https://www.facebook.com/satoseries
      
         satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
    ************************************************************************************************ -->