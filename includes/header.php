<?php require 'connection.php';
   global $conn;
 $query = "SELECT * FROM `social` WHERE `id`= 1 ";
       
        $result_set = mysqli_query($conn,$query);
       
        $rows = mysqli_fetch_assoc($result_set);
        global $rows; ?>

<!-- **********************************************************************************************
                            designed by satoseries an optisoft project

                        optisoft official website -> https://optisoft.ng/


                      satoseries github repo -> https://github.com/satowind

                            ****************************************

                     satoseries twitter page -> https://twitter.com/Satowind

                  satoseries facebook page -> https://www.facebook.com/satoseries
      
         satoseries linkedin page -> https://www.linkedin.com/in/ogugua-tochukwu-900495113/
    ************************************************************************************************ -->
<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>City Cyber Solutions</title>
    
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <link href="css/satoUI.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="admin/assets/css/neon-forms.css">
    <link rel="stylesheet" href="admin/assets/css/custom.css">
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   <script src="admin/assets/js/jquery-1.11.3.min.js"></script> 

    
    
</head>

<body class="tm-isblog">

    <div class="preloader">
        <div class="loader"></div>
    </div>


    <div class="over-wrap">
        <div class="toolbar-wrap">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">


                    <div class="uk-float-right">
                        <div class="uk-panel">
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
                    </div>

                </div>
            </div>
        </div>

        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    <div  class="uk-container uk-container-center">
                        <a class="tm-logo uk-float-left" href="index">
                             <img src="images/logo-loader.png" alt="logo" title="logo"> <span>City<em>  cyber</em></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <!-- <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="index">Home</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a class="yellow-scheme" href="../yellow/index">Yellow Color Scheme</a>
                                                </li>
                                                <li><a class="<a class="yellow-scheme" href="../yellow/index.html">Yellow Color Scheme</a>-scheme" href="../blue/index">Blue Color Scheme</a>
                                                </li>
                                                <li><a class="red-scheme" href="../red/index">Red Color Scheme</a>
                                                </li>
                                                <li><a href="offline">Offline Page</a>
                                                </li>
                                                <li><a href="404">Error Page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="betabet">Betabet</a></li>
                            <!-- <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="about">About</a></li> -->

                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Our Services</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="#">Creating Online Bet9ja Account</a>
                                                </li>
                                                <li><a href="services">Funding/Withdrawal</a>
                                                </li>
                                                <li><a href="#">Display Pool Fixures</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="match-list">Match</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="results">Results</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li><a href="news">Blog</a></li> -->
                            
                            <li><a href="Branches">Our Branches</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Disclaimer</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                
                                                <li><a href="#">Terms and Conditions</a>
                                                </li>
                                                <li><a href="#">Privacy Policies</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            
                  
                 </ul>
                 <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>