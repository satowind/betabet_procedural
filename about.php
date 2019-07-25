<?php 
session_start();
require './includes/header.php'; ?>
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>About</h1>
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
                <li class="uk-active"><span>About</span>
                </li>
            </ul>
        </div>

        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="about-team-page-top-wrap">
                                <div class="uk-grid">
                                    <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                        <div class="top-title">
                                            <h2>About <span>team</span></h2>
                                        </div>
                                        <p class="sub-title">Pellentesque a urna sit amet turpis tristique facilisis. Pellentesque commodo turpis leo, id pulvinar turpis rhoncus interdum. </p>
                                        <p>Nunc ullamcorper varius magna eu tincidunt. Vestibulum eget nisi mattis, feugiat nisl ac, tempor lacus. Proin a velit rhoncus, imperdiet orci quis, tempus orci. Duis tincidunt dui nec orci imperdiet, at scelerisque augue iaculis. Fusce non arcu tortor. Vivamus sapien metus, porta ut ipsum sit amet, accumsan volutpat libero.</p>
                                        <p>Aenean pretium iaculis diam et semper. Sed nec risus ac nibh rhoncus scelerisque. Fusce id mauris massa. Aliquam erat volutpat. Maecenas porta dignissim erat, at vulputate tortor luctus eu. </p>
                                    </div>
                                    <div class="uk-width-large-5-10 uk-width-small-1-1">
                                        <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('images/about-team-banner.jpg');">
                                            <img class="uk-invisible" src="images/about-team-banner.jpg" alt="">
                                            <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                                “It’s not whether you get knocked
                                                <br> down; it’s whether you get up.”
                                                <div class="name">Vince Lombardi</div>
                                            </div>
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
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="our-history-wrap">
                                <div class="our-history-title">
                                    <h2>Our <span>History</span></h2>
                                </div>
                                <div class="our-history-top">
                                    <div class="uk-container uk-container-center">
                                        <div class="uk-grid">
                                            <!-- This is the container of the toggling elements -->
                                            <ul class="our-history-timeline" data-uk-switcher="{connect:'#our-history'}">
                                                <li class="uk-active" aria-expanded="true"><a href="/">2013</a>
                                                </li>
                                                <li aria-expanded="false"><a href="/">2014</a>
                                                </li>
                                                <li aria-expanded="false"><a href="/">2015</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid">
                                        <!-- This is the container of the content items -->
                                        <ul id="our-history" class="uk-switcher uk-container uk-container-center">
                                            <li aria-hidden="false" class="uk-grid uk-active">
                                                <div class="uk-width-medium-4-10">
                                                    <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                    <!-- This is the container of the toggling elements -->
                                                    <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch'}">
                                                        <li class="uk-active" aria-expanded="true"><a href="/">Lorem</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Ipsum</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Dolor</a>
                                                        </li>
                                                    </ul>

                                                    <!-- This is the container of the content items -->
                                                    <ul id="tab-switch" class="uk-switcher tabs-switch-bottom">
                                                        <li class="uk-active" aria-hidden="false">
                                                            <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="uk-width-medium-4-10">
                                                    <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                    <div class="uk-accordion" data-uk-accordion="">

                                                        <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis fermentum <span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="true" data-wrapper="true" role="list" style="height: auto; position: relative;">
                                                            <div class="uk-accordion-content uk-active">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus euismod<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10">
                                                    <h3 class="history-title">Statistic</h3>
                                                    <table class="stat-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Games</td>
                                                                <td>8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Goals</td>
                                                                <td>15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Awards</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Violations</td>
                                                                <td>7</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li aria-hidden="true" class="uk-grid">
                                                <div class="uk-width-medium-4-10 uk-width-small-1-1">
                                                    <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                    <!-- This is the container of the toggling elements -->
                                                    <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch1'}">
                                                        <li class="uk-active" aria-expanded="true"><a href="/">Lorem</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Ipsum</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Dolor</a>
                                                        </li>
                                                    </ul>

                                                    <!-- This is the container of the content items -->
                                                    <ul id="tab-switch1" class="uk-switcher tabs-switch-bottom">
                                                        <li class="uk-active" aria-hidden="false">
                                                            <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="uk-width-medium-4-10 uk-width-small-1-1">
                                                    <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                    <div class="uk-accordion" data-uk-accordion="">

                                                        <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis fermentum <span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="true" data-wrapper="true" role="list" style="height: auto; position: relative;">
                                                            <div class="uk-accordion-content uk-active">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus euismod<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10 uk-width-small-1-1">
                                                    <h3 class="history-title">Statistic</h3>
                                                    <table class="stat-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Games</td>
                                                                <td>8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Goals</td>
                                                                <td>15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Awards</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Violations</td>
                                                                <td>7</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            <li aria-hidden="true" class="uk-grid">
                                                <div class="uk-width-medium-4-10">
                                                    <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                    <!-- This is the container of the toggling elements -->
                                                    <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch2'}">
                                                        <li class="uk-active" aria-expanded="true"><a href="/">Lorem</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Ipsum</a>
                                                        </li>
                                                        <li aria-expanded="false"><a href="/">Dolor</a>
                                                        </li>
                                                    </ul>

                                                    <!-- This is the container of the content items -->
                                                    <ul id="tab-switch2" class="uk-switcher tabs-switch-bottom">
                                                        <li class="uk-active" aria-hidden="false">
                                                            <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                        <li aria-hidden="true">
                                                            <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet. Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                            <ul>
                                                                <li>Nunc commodo ipsum ac mi;</li>
                                                                <li>Curabitur bibendum odio eu orci;</li>
                                                                <li>Morbi tincidunt lacus a pulvinar;</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="uk-width-medium-4-10">
                                                    <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                    <div class="uk-accordion" data-uk-accordion="">

                                                        <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis fermentum <span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="true" data-wrapper="true" role="list" style="height: auto; position: relative;">
                                                            <div class="uk-accordion-content uk-active">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                        <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus euismod<span class="arrow"><i class="uk-icon-arrow-right"></i></span></h4>
                                                        <div aria-expanded="false" data-wrapper="true" role="list" style="overflow:hidden;height:0;position:relative;">
                                                            <div class="uk-accordion-content">Phasellus sagittis venenatis suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus ut tortor ornare, eu pharetra magna faucibus.</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="uk-width-medium-2-10">
                                                    <h3 class="history-title">Statistic</h3>
                                                    <table class="stat-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Games</td>
                                                                <td>8</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Goals</td>
                                                                <td>15</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Awards</td>
                                                                <td>3</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Violations</td>
                                                                <td>7</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-d-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel our-awards-wrap">
                            <div class="uk-width-1-1">
                                <div class="our-awards-title">
                                    <h3>Our <span>Awards</span></h3>
                                </div>
                                <div class="our-awards-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                    <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                            </div>
                            <div dir="ltr" class="uk-slidenav-position our-awards" data-uk-slider="{default: 6, autoplay:true, autoplayInterval:7000, animation: 'slide-bottom', duration: 400}">
                                <div class="uk-slider-container">
                                    <ul class="uk-slider uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3">
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-after">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img5.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img1.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img2.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="uk-slide-before">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img3.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                        <li class="">
                                            <div class="img-wrap"><img draggable="false" src="images/award-img4.png" alt="">
                                            </div>
                                            <div class="text">2014 world cup champion</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


  <?php require './includes/footer.php'; ?>