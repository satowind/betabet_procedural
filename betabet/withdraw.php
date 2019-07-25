<?php 
session_start();
// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {
    
    // send them to the login page
    header("Location: index");
}

global $row;
include './includes/header.php';
require './includes/sato.php';
?>


 <div class="tm-top-d-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="donate-wrap">
                                <div class="donate-inner">
                                    <h3><span>NOTICE</h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-8-10 uk-push-1-10 intro-text">
                                         PLEASE BE SURE NOT TO REQUEST AN AMOUNT MORE THAN YOUR BET9JA ONLINE ACCOUNT BALANCE. THIS WILL HELP US SERVE YOU BETTER AND FASTER. THANK YOUR
                                     </div>
                                    </div>
                                    <form class="teamdonate-form" method="post" target="paypal">
                                        <!-- <div class="radio-wrap">
                                            <label class="active">₦ 100
                                                <input name="amount" value="100" type="radio">
                                            </label>
                                            <label>₦ 250
                                                <input name="amount" value="250" type="radio">
                                            </label>
                                            <label>₦ 500
                                                <input name="amount" value="500" type="radio">
                                            </label>
                                            <label>₦ 750
                                                <input name="amount" value="750" type="radio">
                                            </label>
                                            <label>₦ 1000
                                                <input name="amount" value="1000" type="radio">
                                            </label>
                                           
                                        </div> -->
                                        
                                        <br>
                                        <br>
                                        <a  href="with" class="donate-btn" type="submit" name="submit"><span>Withdraw Now</span>
                                        </a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</div>
       		</div>
     
       </section>
<br> <br>

<?php include './includes/footer.php' ?>