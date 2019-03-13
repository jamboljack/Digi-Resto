<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                <a href="<?=base_url();?>">Beranda</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>
                <a href="<?=site_url('kategori/'.$detail->kategori_seo);?>"><?=ucwords(strtolower($detail->kategori_nama));?></a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span><?=ucwords(strtolower($detail->menu_nama));?>
            </nav>
        </div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <div itemscope class="post-50 product type-product status-publish has-post-thumbnail product_cat-pizza pa_food-type-veg first instock shipping-taxable purchasable product-type-simple addon-product">
                    <div class="single-product-wrapper">
                        <div class="product-images-wrapper">
                            <div class="images">
                                <a href="<?=base_url('img/menu_folder/'.$detail->menu_foto);?>" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                    <img width="600" height="600" src="<?=base_url('img/menu_folder/'.$detail->menu_foto);?>" class="attachment-shop_single size-shop_single wp-post-image" alt=""/>
                                </a>
                            </div>
                        </div>

                        <div class="summary entry-summary">
                            <h1 itemprop="name" class="product_title entry-title"><?=ucwords(strtolower($detail->menu_nama));?><span class="food-type-icon"><i class="po po-veggie-icon"></i></span></h1>
                            <div itemprop="description">
                                <p><?=ucwords(strtolower($detail->menu_deskripsi));?></p>
                            </div>
                            <form class="cart"  enctype='multipart/form-data'>
                                <div  class="yith_wapo_groups_container">
                                    <h2 class="group-name">Crust &amp; Size</h2>
                                    <div class="yith_wapo_groups_container_wrap">
                                        <div id="ywapo_value_2" class="ywapo_group_container ywapo_group_container_checkbox form-row form-row-wide " data-requested="0" data-type="checkbox" data-id="2" data-condition="">
                                        <h3><span>Select Crust</span></h3>
                                        <div class="ywapo_input_container ywapo_input_container_checkbox">
                                            <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="0" type="checkbox" name="ywapo_checkbox_2[0]" value="ywapo_value_2"  checked class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                            <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Original Crust</span></label>
                                        </div>
                                        <div class="ywapo_input_container ywapo_input_container_checkbox">
                                            <input data-typeid="2" data-price="1.2" data-pricetype="fixed" data-index="1" type="checkbox" name="ywapo_checkbox_2[1]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                            <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thick Crust</span></label>
                                            <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>1.20</span></span>
                                        </div>
                                        <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="0" data-pricetype="fixed" data-index="2" type="checkbox" name="ywapo_checkbox_2[2]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Thin Crust without sause</span></label>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_checkbox">
                                             <input data-typeid="2" data-price="2.1" data-pricetype="fixed" data-index="3" type="checkbox" name="ywapo_checkbox_2[3]" value="ywapo_value_2"   class="ywapo_input ywapo_input_checkbox ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">Double Crust</span></label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>2.10</span></span>
                                          </div>
                                       </div>
                                       <div id="ywapo_value_3" class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="3" data-condition="">
                                          <h3><span>Select Size</span></h3>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="19.9" data-pricetype="fixed" data-index="0" type="radio" name="ywapo_radio_3[]" value="0" required checked class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">22  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.90</span></span>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="25.9" data-pricetype="fixed" data-index="1" type="radio" name="ywapo_radio_3[]" value="1" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">29  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span></span>
                                          </div>
                                          <div class="ywapo_input_container ywapo_input_container_radio">
                                             <input data-typeid="3" data-price="32.9" data-pricetype="fixed" data-index="2" type="radio" name="ywapo_radio_3[]" value="2" required  class="ywapo_input ywapo_input_radio ywapo_price_fixed"   />
                                             <label class="ywapo_label_tag_position_after">
                                             <span class="ywapo_option_label ywapo_label_position_after">35  cm</span>

                                             </label>
                                             <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>32.90</span></span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="yith_wapo_group_total" data-product-price="0">
                                       <div class="yith_wapo_group_final_total">
                                          <span class="price amount"></span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="qty-btn">
                                    <label>Quantity</label>
                                    <div class="quantity">
                                       <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
                                    </div>
                                 </div>
                                 <input type="hidden" name="add-to-cart" value="50" />
                                 <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                              </form>
                           </div>
                           <!-- .summary -->
                        </div>
                        <div class="section-products">
                           <h2 class="section-title">This Goes Great Withh</h2>
                           <div class="columns-4">
                              <ul class="products">
                                 <li class="product first">
                                    <div class="product-outer">
                                       <div class="product-inner">
                                          <div class="product-image-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <img src="assets/images/products/p9.jpg" class="img-responsive" alt="">
                                             </a>
                                          </div>
                                          <div class="product-content-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                <h3>Trio Cheese</h3>
                                                <div itemprop="description">
                                                   <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                </div>
                                                <div  class="yith_wapo_groups_container">
                                                   <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                      <h3><span>Pick Size</span></h3>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                      </div>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                             <div class="hover-area">
                                                <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-outer -->
                                 </li>
                                 <!-- /.products -->
                                 <li class="product ">
                                    <div class="product-outer">
                                       <div class="product-inner">
                                          <div class="product-image-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <img src="assets/images/products/p10.jpg" class="img-responsive" alt="">
                                             </a>
                                          </div>
                                          <div class="product-content-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                <h3>Trio Cheese</h3>
                                                <div itemprop="description">
                                                   <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                </div>
                                                <div  class="yith_wapo_groups_container">
                                                   <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                      <h3><span>Pick Size</span></h3>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                      </div>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                             <div class="hover-area">
                                                <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-outer -->
                                 </li>
                                 <!-- /.products -->
                                 <li class="product ">
                                    <div class="product-outer">
                                       <div class="product-inner">
                                          <div class="product-image-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <img src="assets/images/products/p2.jpg" class="img-responsive" alt="">
                                             </a>
                                          </div>
                                          <div class="product-content-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                <h3>Trio Cheese</h3>
                                                <div itemprop="description">
                                                   <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                </div>
                                                <div  class="yith_wapo_groups_container">
                                                   <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                      <h3><span>Pick Size</span></h3>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                      </div>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                             <div class="hover-area">
                                                <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-outer -->
                                 </li>
                                 <!-- /.products -->
                                 <li class="product last">
                                    <div class="product-outer">
                                       <div class="product-inner">
                                          <div class="product-image-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                             <img src="assets/images/products/p1.jpg" class="img-responsive" alt="">
                                             </a>
                                          </div>
                                          <div class="product-content-wrapper">
                                             <a href="single-product-v1.html" class="woocommerce-LoopProduct-link">
                                                <h3>Trio Cheese</h3>
                                                <div itemprop="description">
                                                   <p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p>
                                                </div>
                                                <div  class="yith_wapo_groups_container">
                                                   <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                                      <h3><span>Pick Size</span></h3>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19</span></span>
                                                      </div>
                                                      <div class="ywapo_input_container ywapo_input_container_radio">

                                                         <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29 cm</span></span>
                                                         <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25</span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </a>
                                             <div class="hover-area">
                                                <a rel="nofollow" href="single-product-v1.html" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- /.product-outer -->
                                 </li>
                                 <!-- /.products -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>