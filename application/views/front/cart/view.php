<div id="content" class="site-content" tabindex="-1" >
    <div class="col-full">
        <div class="pizzaro-breadcrumb">
            <nav class="woocommerce-breadcrumb" >
                <a href="<?=base_url();?>">Beranda</a>
                <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Cart
            </nav>
        </div>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" >
                <?=$_proses;?>

                <div id="post-8" class="post-8 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form>
                                <table class="shop_table shop_table_responsive cart" >
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Menu</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Jumlah</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($listOrder as $r) { ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a href="#" class="remove" >&times;</a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="<?=site_url('menuorder/'.$r->menu_seo);?>">
                                                    <img width="180" height="180" src="<?=base_url('img/menu_folder/thumbs/'.$r->menu_foto);?>" alt=""/>
                                                </a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="<?=site_url('menuorder/'.$r->menu_seo);?>"><?=ucwords(strtolower($r->temp_nama));?></a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?=number_format($r->temp_harga,0,'',',');?></span>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="qty-btn">
                                                    <label>Quantity</label>
                                                    <div class="quantity">
                                                        <input type="number" value="<?=$r->temp_qty;?>" title="Qty" class="input-text qty text"/>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?=number_format($r->temp_total,0,'',',');?></span>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <input type="submit" class="button" name="update_cart" value="Update Order" />
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="checkout.html" class="checkout-button button alt wc-forward">Proses Konfirmasi</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>
                                    <table  class="shop_table shop_table_responsive">
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>51.80</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>51.80</span></strong>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                       <a href="checkout.html" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>