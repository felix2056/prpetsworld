<div id="shopify-section-footer" class="shopify-section">
    <!-- footer-area start -->
    <footer class="footer-area">
        <div class="footer-top pt--40 pb--100">
            <div class="container">
                <div class="row">


                    <div class="col-lg-4 col-md-12">
                        <div class="footer-info mt--60">

                            <div class="footer-title">
                                <h3>My Account</h3>
                            </div>

                            <ul class="footer-info-list">

                                <li>

                                    <i class="ion-ios-location-outline"></i>

                                    123, street, USA
                                </li>



                                <li>

                                    <i class="ion-ios-email-outline"></i>

                                    Mill Us :
                                    <a href="mailto:mail@petsworld.com">mail@petsworld.com</a>
                                </li>



                                <li>

                                    <i class="ion-ios-telephone-outline"></i>

                                    Phone: + 00 254 254565 54
                                </li>

                            </ul>

                            <div class="payment-cart">
                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/files/payments-icons.png?v=1553528355
                                                      " alt="">
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-2 col-md-4 ">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Helpful</h3>
                            </div>
                            <ul class="footer-list">


                                <li><a href="/pages/about-us.php">About us</a></li>

                                <li><a href="/pages/contact-us.php">Contact us</a></li>

                                <li><a href="/pages/faqs.php">FAQs</a></li>

                            </ul>
                        </div>
                    </div>



                    <div class="col-lg-2 col-md-4 offset-lg-1">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Policy</h3>
                            </div>
                            <ul class="footer-list">


                                <li><a href="/pages/privacy-policy.php">Privacy policy</a></li>

                                <li><a href="/pages/return-policy.php">Return policy</a></li>

                                <li><a href="/pages/shipping-policy.php">Shipping policy</a></li>

                            </ul>
                        </div>
                    </div>



                    <div class="col-lg-2 col-md-4 offset-lg-1">
                        <div class="footer-info mt--60">
                            <div class="footer-title">
                                <h3>Useful Links</h3>
                            </div>
                            <ul class="footer-list">


                                <li><a href="/products/cart.php">Cart</a></li>

                                <li><a href="/">My Account</a></li>

                                <li><a href="/pages/wishlist.php">Wishlist</a></li>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-md-6">
                        <div class="copyright">
                            <p>Copyright 2019&nbsp;pr-petsworld ©All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-social">


                            <ul class="social-icon">

                                <li><a href=""><i class="ion-social-twitter"></i></a></li>


                                <li><a href=""><i class="ion-social-tumblr"></i></a></li>


                                <li><a href=""><i class="ion-social-facebook"></i></a></li>


                                <li><a href=""><i class="ion-social-instagram-outline"></i></a></li>





                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
</div>

<!-- Necessary JS -->
<script src="//cdn.shopify.com/s/files/1/0059/6620/0914/t/2/assets/fastclick.min.js?v=2972345853941092237"
    type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0059/6620/0914/t/2/assets/timber.js?v=16793813487819391913"
    type="text/javascript"></script>


<?php include_once('includes/modals.php'); ?>




<script>
var mainImage = '';
jQuery(function($) {

    quiqview = function(product_handle) {
        Shopify.getProduct(product_handle);
    }
    Shopify.onProduct = function(product) {
        $('.viewfullinfo').attr('href', product.url);

        // product description without shortcode
        text_truncate = function(str, length, ending) {
            if (length == null) {
                length = 500;
            }
            if (ending == null) {
                ending = '...';
            }
            if (str.length > length) {
                return str.substring(0, length - ending.length) + ending;
            } else {
                return str;
            }
        };

        var _parent = '#quickViewModal';
        $(_parent + ' .product_title').text(product.title);



        // product rating
        $(_parent + ' .rating').empty();
        $(_parent + ' .rating').append("<span class=\"shopify-product-reviews-badge\" data-id=\"" + product
            .id +
            "\"></span>");


        //check variants
        var variant = '';

        for (i = 0; i < product.variants.length; i++) {
            if (product.variants[i].inventory_quantity > 0) {
                variant = product.variants[i];
                break;
            }
        }

        if (variant == '') {
            for (i = 0; i < product.variants.length; i++) {
                if (product.variants[i].inventory_policy == "continue") {
                    variant = product.variants[i];
                    break;
                }
            }
            if (variant == '') {
                variant = product.variants[0];
            }
        }

        mainImage = product.featured_image;
        var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
        var imgurl = "<img class=\"full-width\" alt=\"\" src = \"" + shopifyimgurl + "\" >";
        jQuery(_parent + ' .product-main-image__item .img_box_1').empty();
        jQuery(_parent + ' .product-main-image__item .img_box_1').append(imgurl);
        jQuery(_parent + ' .product-main-image__item .img_box_2').empty();
        jQuery(_parent + ' .product-main-image__item .img_box_2').append(imgurl);

        // product description with shortcode
        var desc = product.description;
        if (desc.indexOf("[short_description]") >= 0) {
            desc = desc.split("[short_description]");
            desc = desc[1].split("[/short_description]");
            $(_parent + ' .product-des').show();
            $(_parent + ' .product-des').html(desc[0]);
        } else {
            $(_parent + ' .product-des').html(text_truncate(product.description, 499));
        }

        //set variants property
        var inv_qua = variant.inventory_quantity;
        //price
        if (variant.price < variant.compare_at_price) {
            $('.price-part .main').addClass('amount');
            $('.price-part .price-box__new').show();
            changePriceValue('.price-part .main', variant.compare_at_price);
            changePriceValue('.price-part .price-box__new', variant.price);
        } else {
            $('.price-part .price-box__new').hide();
            $('.price-part .main').removeClass('amount');
            changePriceValue('.price-part .main', variant.price);
        }

        // Variants select
        if (product.variants.length > 1) {
            var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

            var select = '<select id="product-select-qv" name="id">';
            var selected = 'selected';
            for (i = 0; i < product.variants.length; i++) {
                var _var = product.variants[i];
                if (_var.available) {
                    select += '<option value="' + _var.id + '"' + selected + '>' + _var.title + ' - ' +
                        Shopify
                        .formatMoney(_var.price, "<span class=money>${{ amount }} USD</span>") + '</option>'
                    selected = '';
                }
            }
            select += '</select>';

            var variant_select = '<div class="variants_selects ' + variants_margin + '">';
            variant_select += select;
            variant_select += '</div><div class="divider divider--sm"></div>';
            select = variant_select;
        } else {
            var select = '<input type="hidden" name="id" value="' + product.variants[0].id + '" />';
        }
        $('.variants').empty();
        $('.variants').html(select);

        //parametres
        setParametresText(_parent + ' .product-sku', variant.sku);
        if (jQuery(_parent + ' .product-sku').length) {
            var $ava = jQuery(_parent + " .product-info__availabilitu");
            if (variant.sku != "") {
                if ($ava.hasClass('pull-left')) {
                    $ava.removeClass('pull-left')
                }
            } else {
                if (!$ava.hasClass('pull-left')) {
                    $ava.addClass('pull-left')
                }
            }
        }

        //quantity
        var out_of_stock = false;
        if (variant.inventory_management) {
            if (inv_qua > 0) {
                $(_parent + ' .product-availability').text(inv_qua + " In Stock");
            } else {
                out_of_stock = true;
                $(_parent + ' .product-availability').text("In Stock");
            }
        } else {
            $(_parent + ' .product-availability').text("Many in stock");
        }

        // button
        if (!out_of_stock || variant.inventory_policy == "continue") {
            $('.product-available').show();
            $('.product-disable').hide();
            $('.addtocartqv').attr('id', product.id);
        } else {
            $('.product-available').hide();
            $('.product-disable').show();
        }

        if (product.available && product.variants.length > 1) {
            new Shopify.OptionSelectors("product-select-qv", {
                product: product,
                onVariantSelected: selectCallbackQv,
                enableHistoryState: true
            });

            if ($('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                $.each(jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                    $(this).find('label').text(product.options[index].name);
                });
            }
        } else {
            jQuery('.currency .active').trigger('click');
        }
        selectGrid(_parent);

        if ($(".spr-badge").length > 0) {
            $.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");
        }

        if ($(".selector-wrapper label").length) {
            $(".selector-wrapper label").each(function(index) {
                $(this).text(jQuery(this).text() + ":");
            });
        }

        $(_parent).modal('show');

        if (!('ontouchstart' in window) &&
            !navigator.msMaxTouchPoints &&
            !navigator.userAgent.toLowerCase().match(/windows phone os 7/i)) return false;

        $j('body').css("top", -$j('body').scrollTop());
        $j('body').addClass("no-scroll");
        $j('.close').click(function() {
            var top = parseInt($j('body').css("top").replace("px", "")) * -1;
            $j('body').removeAttr("style");
            $j('body').removeClass("no-scroll");
            $j('body').scrollTop(top);
        });
    }

    function setParametresText(obj, value) {
        if (value != '') {
            $(obj).parent().show();
            $(obj).text(value);
        } else {
            $(obj).parent().hide();
        }
    }

    function changePriceValue(cell, value) {
        $(cell).html(Shopify.formatMoney(value, "<span class=money>${{ amount }} USD</span>"));
    };

});



var selectCallbackQv = function(variant, selector) {

    var _parent = '#quickViewModal';
    var _parentprice = _parent + ' .price-part';
    if (!variant) {
        jQuery(_parent + " .price-box").hide();
        jQuery(_parent + " .qwt").hide();
        jQuery(_parent + " .control-console").hide();
        jQuery(_parent + ' .addtocartqv').attr('disabled', 'disabled');
        jQuery(_parent + ' .addtocartqv').text('Unavailable');
        return false;
    }

    jQuery(_parent + " .price-box").show();
    jQuery(_parent + " .qwt").show();
    jQuery(_parent + " .control-console").show();

    if (variant.price < variant.compare_at_price) {
        jQuery(_parentprice + ' .main').addClass('price-box__old');
        jQuery(_parentprice + ' .price-box__new').show();
        changePriceValue(_parentprice + ' .main', variant.compare_at_price);
        changePriceValue(_parentprice + ' .price-box__new', variant.price);
    } else {
        jQuery(_parentprice + ' .price-box__new').hide();
        jQuery(_parentprice + ' .main').removeClass('price-box__old');
        changePriceValue(_parentprice + ' .main', variant.price);
    }

    newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

    if (jQuery(_parent + ' .product-sku').length) {
        var $ava = jQuery(_parent + " .product-info__availabilitu");
        if (variant.sku != "") {
            if ($ava.hasClass('pull-left')) {
                $ava.removeClass('pull-left')
            }
        } else {
            if (!$ava.hasClass('pull-left')) {
                $ava.addClass('pull-left')
            }
        }
    }

    if (variant.available) {
        if (variant.inventory_management == null) {
            jQuery(_parent + " .product-availability").text("Many in stock");
        } else {
            jQuery(_parent + " .product-availability").text(" Many in stock");
        }
    } else {
        jQuery(_parent + " .product-availability").text("Sold Out");
    }

    var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
    var imgurl = "<img class=\"full-width\" alt=\"\" src = \"" + shopifyimgurl + "\" >";
    if (jQuery(_parent + ' .product-main-image__item .img_box_1').children().length > 0) {
        var detach = jQuery(_parent + ' .product-main-image__item .img_box_1 img').detach();
        jQuery(_parent + ' .product-main-image__item .img_box_2').empty();
        jQuery(_parent + ' .product-main-image__item .img_box_2').append(detach);
    }
    jQuery(_parent + ' .product-main-image__item .img_box_1').empty();
    jQuery(_parent + ' .product-main-image__item .img_box_1').append(imgurl);

    if (variant && variant.available) {
        jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
        jQuery(_parent + ' .addtocartqv').html('Add to Cart');
        jQuery(_parent + " .control-console").show();
    } else {
        jQuery(_parent + ' .addtocartqv').attr('disabled', 'disabled');
        jQuery(_parent + ' .addtocartqv').text('Unavailable');
        jQuery(_parent + " .control-console").hide();
    }

    jQuery('.currency .active').trigger('click');
};

function changePriceValue(cell, value) {
    jQuery(cell).html(Shopify.formatMoney(value, "<span class=money>${{ amount }} USD</span>"));
};

function newVariantTextDataQv(obj, value) {
    if (value != '') {
        jQuery(obj).parent().show();
        jQuery(obj).text(value);
    } else {
        jQuery(obj).parent().hide();
    }
};


function selectGrid(_parent) {
    setTimeout(timeout, 5);

    function timeout() {
        if (jQuery(_parent + " .selector-wrapper").length > 2) {
            jQuery(_parent + " .single-option-selector").addClass("select--wd");
        } else if (jQuery(_parent + " .selector-wrapper").length == 1) {
            jQuery(_parent + " .single-option-selector").before("<label></label>");
            jQuery(_parent + " .single-option-selector").addClass("select--wd");
        }
    }
};
</script>

<!-- END QUICKVIEW PRODUCT -->

<script>
$(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
$(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
$(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }
    $button.parent().find("input").val(newVal);
});
</script>
<script>
$('.ajax-spin-cart').on('click', function() {
    $(this).addClass('loading add-item');
    setTimeout(function() {
        $('.ajax-spin-cart').removeClass('loading');
    }, 1000);
    setTimeout(function() {
        $('.ajax-spin-cart').removeClass("add-item");
    }, 2000);

});
</script>
<script src="//cdn.shopify.com/s/files/1/0059/6620/0914/t/2/assets/wishlist.js?v=10508188993587217434"
    type="text/javascript"></script>
<script>
/* Ajax Wishlist */
$(".action-wishlist").on('click', function() {
    $(this).addClass("loading-wishlist adding-wishlist");
    setTimeout(function() {
        $(".action-wishlist").removeClass("loading-wishlist");
    }, 1000);
    setTimeout(function() {
        $(".adding-wishlist").removeClass("adding-wishlist");
    }, 2000);

});

(function() {
    Wishlist.init();
}());
</script><!-- Recently Viewed Products -->
<script src="//cdn.shopify.com/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0059/6620/0914/t/2/assets/jquery.currencies.min.js?v=3545291232168825427"
    type="text/javascript"></script>

<script>
// Pick your format here:
// money_format or money_with_currency_format
Currency.format = 'money_format';

var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.moneyFormats[shopCurrency].money_with_currency_format = "${{ amount }} USD";
Currency.moneyFormats[shopCurrency].money_format = "${{ amount }} USD";

var cookieCurrency;
try {
    cookieCurrency = Currency.cookie.read();
} catch (err) {} // ignore errors reading cookies

// Fix for customer account pages.
jQuery('span.money span.money').each(function() {
    jQuery(this).parents('span.money').removeClass('money');
});

// Saving the current price.
jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// Select all your currencies buttons.
var buttons = jQuery('.currency li');

// If there's no cookie or it's the shop currency.
if (cookieCurrency == null || cookieCurrency === shopCurrency) {
    buttons.removeClass('active');
    jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
    Currency.currentCurrency = shopCurrency;
    jQuery(".current-currency").text(shopCurrency);
} else {
    Currency.convertAll(shopCurrency, cookieCurrency);
    buttons.removeClass('active');
    jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
    jQuery(".current-currency").text(cookieCurrency);
}

// When customer clicks on a currency button.
buttons.click(function() {
    buttons.removeClass('active');
    var cur = jQuery(this).attr('data-currency');
    jQuery(".currency li[data-currency='" + cur + "']").addClass('active');

    var newCurrency = jQuery(this).attr('data-currency');
    if (newCurrency == Currency.currentCurrency) {
        Currency.convertAll(shopCurrency, newCurrency);
    } else {
        Currency.convertAll(Currency.currentCurrency, newCurrency);
    }

    jQuery(".current-currency").text(cur);
});

// For product options.
var main_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
    main_selectCallback(variant, selector);
    Currency.convertAll(shopCurrency, jQuery(".currency .active").attr('data-currency'));
};
</script>
<script>
(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-91020528-1', 'auto');
ga('send', 'pageview');
</script>




<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i
        class="ion-chevron-up"></i></a>