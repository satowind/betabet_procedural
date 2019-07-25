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
                             <h1>
                               Men's sports jacket
                             </h1>
                          </div>
                       </div>
                    </div>
                 </div>
              </section>
           </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="category">Clothing</a></li>
                <li class="uk-active"><span>Men's sports jacket</span></li>
            </ul>
        </div>

        <div class="uk-container uk-container-center">
           <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
              <div class="tm-main uk-width-medium-1-1 uk-row-first">
                 <main id="tm-content" class="tm-content">
                    <div id="system-message-container"></div>
                    
                    <div class="jshop productfull" id="comjshop">
                       <div class="uk-grid">
                          <div class="uk-width-medium-5-10 left">
                             <div class="jshop">
                                <div class="image_middle">
                                   <div class="product_label">
                                      <img src="images/shop/sale.png" alt="Sale">
                                   </div>
                                   <span id="list_product_image_middle">
                                   <a style="display: inline;" data-uk-lightbox href="images/shop/jacket11.jpg" title="Men's sports jacket">
                                   <img id="main_image_62" src="images/shop/jacket11.jpg" alt="Men's sports jacket" title="Men's sports jacket">
                                   </a>
                                   <a data-uk-lightbox id="main_image_full_63" href="images/shop/jacket12.jpg" style="display: none;" title="Men's sports jacket">
                                   <img id="main_image_63" src="images/shop/jacket12.jpg" alt="Men's sports jacket" title="Men's sports jacket">
                                   </a>
                                   </span>
                                </div>
                                <div class="jshop_img_description">
                                   <span id="list_product_image_thumb">
                                       <img class="jshop_img_thumb" src="images/shop/thumb_jacket11.jpg" alt="Men's sports jacket" title="Men's sports jacket" onclick="showImage(62)">
                                       <img class="jshop_img_thumb" src="images/shop/thumb_jacket12.jpg" alt="Men's sports jacket" title="Men's sports jacket" onclick="showImage(63)">
                                   </span>
                                </div>
                             </div>
                          </div>
                          <div class="uk-width-medium-5-10 right">
                             <div class="product-descr-wrap">
                                <form name="product" method="post" enctype="multipart/form-data" autocomplete="off">
                                   <h1>Men's sports jacket</h1>
                                   <div class="old_price">
                                      <span class="old_price" id="old_price">$200</span>
                                   </div>
                                   <div class="prod_price">
                                      <span id="block_price">$120</span>
                                   </div>
                                   <div class="jshop_prod_description">
                                      Cras dictum sapien sit amet turpis varius, id feugiat dolor tempus. Quisque a quam vehicula, placerat lectus non, placerat sapien. Donec semper dolor vitae lacinia auctor. Sed ornare eleifend lectus eu vehicula. Nunc ultrices convallis molestie. Vivamus luctus tempus arcu at condimentum. Duis vitae gravida nibh. Nulla quis risus non enim condimentum interdum ac vitae tellus. In eget rhoncus libero                    
                                   </div>
                                   <div class="not_available" id="not_available"></div>
                                   <div class="prod_buttons" style="">
                                      <div class="prod_qty_input">
                                         <input name="quantity" id="quantity" class="inputbox" value="1" type="text">                            
                                      </div>
                                      <div class="buttons">            
                                         <input class="button buy" value="Add to cart" type="submit">
                                      </div>
                                      <div id="jshop_image_loading" class="no_display"></div>
                                   </div>
                                </form>
                             </div>
                          </div>
                       </div>
                       <div id="list_product_demofiles"></div>
                       <div class="jcomments_comment">
                          <div id="jc">
                             <div id="comments"></div>
                             <h3 class="title-bottom">Leave a <span>Reply</span></h3>
                             <a id="addcomments" href="#addcomments"></a>
                             <form id="comments-form" name="comments-form">
                                <div class="uk-grid">
                                   <div class="uk-width-1-2 uk-panel">
                                      <p>
                                         <span>
                                         <input id="comments-form-name" placeholder="Name" name="name" value="" maxlength="20" size="22" tabindex="1" type="text">
                                         </span>
                                      </p>
                                      <p>
                                         <span>
                                         <input id="comments-form-email" placeholder="Email" name="email" value="" size="22" tabindex="2" type="text">
                                         </span>
                                      </p>
                                      <p>
                                         <span>
                                         <input id="comments-form-homepage" placeholder="Website" name="homepage" value="" size="22" tabindex="3" type="text">
                                         </span>
                                      </p>
                                   </div>
                                   <div class="uk-width-1-2 uk-panel uk-flex uk-flex-column">
                                      <div class="textarea-wrap">
                                         <textarea id="comments-form-comment" placeholder="Message" name="comment" tabindex="5"></textarea>
                                         <div class="grippie"></div>
                                         <div id="comments-form-buttons">
                                            <div class="btn" id="comments-form-send">
                                               <div><a href="#" tabindex="7" title="Send (Ctrl+Enter)">Send</a></div>
                                            </div>
                                            <div class="btn" id="comments-form-cancel" style="display:none;">
                                               <div><a href="#" tabindex="8" title="Cancel">Cancel</a></div>
                                            </div>
                                            <div style="clear:both;"></div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div>
                                   <input name="object_id" value="6" type="hidden">
                                   <input name="object_group" value="com_jshopping" type="hidden">
                                </div>
                             </form>
                             
                          </div>
                       </div>
                    </div>
                 </main>
              </div>
           </div>
        </div>

       <?php require './includes/footer.php'; ?>