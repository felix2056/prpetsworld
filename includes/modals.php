<script>

</script>
<!-- modalAddToCart 
<div class="modal fade ajax-popup" id="modalAddToCart" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog white-modal modal-md">
    <div class="modal-content">
      <div class="modal-body">
        <div class="modal-content-text">
          <span class="productmsg"></span>
          <span class="success-message">Added to cart successfully!</span>        
        </div>
        <div class="modal-button">
          <a href="/cart" class="">View Cart</a>
        </div>
        <div class="modal-close">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        </div>
      </div>
    </div>
  </div>
</div>
modalAddToCart -->
<!-- modalAddToCart Error -->
<div class="modal fade ajax-popup error-ajax-popup" id="modalAddToCartError" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog white-modal modal-md">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="modal-content-text">
                    <div class="error_message"></div>
                </div>
                <div class="modal-close">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade productModal" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="close-icon" aria-hidden="true">x</span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="product-main-image__item">
                                        <div class="img_box_1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h1 class="product_title">FROM_JS</h1>
                                <div class="product-price product-info__price price-part">
                                    <span class="main">jsprice</span>
                                    <span class="price-box__new">jsprice</span>
                                </div>
                                <div class="product-rating spr-badge-caption-none">
                                    <div class="quick-view-rating rating">FROM_JS</div>
                                </div>

                                <div class="short-description product-des">FROM_JS</div>

                                <form id="add-item-qv" action="/cart/add" method="post">
                                    <div class="quick-view-select variants select-option-part"></div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input type="text" value="01" name="quantity" class="cart-plus-minus-box">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <div class="quickview-btn-cart">
                                            <button type="submit" class="addtocartqv theme-default-button">Add to
                                                cart</button>
                                        </div>
                                        <div class="quickview-btn-wishlist">

                                            <a class="wishlist" href="/account/login" title="Wishlist">
                                                <span class="add-wishlist"><i class="icon-heart"></i></span>
                                            </a>


                                        </div>
                                    </div>
                                    <script>
                                    jQuery('.addtocartqv').click(function(e) {
                                        e.preventDefault();
                                        Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                                    });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="quickViewModal_info" style="display: none;">
    <div class="button">Add to cart</div>
    <div class="button_added">Added</div>
    <div class="button_error">Limit Products</div>
    <div class="button_wait">Wait..</div>
</div>