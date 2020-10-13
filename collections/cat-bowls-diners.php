<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><span class="icon-close"></span></button>
    </div>
    <div class="sidebar-search-input">
        <form action="/search" method="get" class="search-bar" role="search">
            <div class="form-search">
                <input type="search" name="q" value="" placeholder="Search our store" id="search" class="input-text"
                    aria-label="Search our store">
                <button class="search-btn" type="submit">
                    <i class="icon-magnifier"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="breadcrumb-title">Cat Bowls &amp; Diners</h2>
                <!-- breadcrumb-list start -->

                <nav class="" role="navigation" aria-label="breadcrumbs">
                    <ul class="breadcrumb-list">

                        <li class="breadcrumb-item">
                            <a href="/" title="Back to the home page">Home</a>
                        </li>
                        <li class="breadcrumb-item">




                            <span>Cat Bowls &amp; Diners</span>



                        </li>
                    </ul>
                </nav>


                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<main role="main">
    <div id="shopify-section-collection-template" class="shopify-section">
        <!-- Start Shop Page -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- shop-top-bar start -->
                                <div class="shop-top-bar">

                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <button class="change-view active" data-view="grid"><i
                                                class="ion-ios-keypad-outline"></i></button>
                                        <button class="change-view" data-view="list"><i
                                                class="ion-ios-list-outline"></i></button>
                                        <!-- shop-item-filter-list end -->
                                    </div>


                                    <!-- product-short start -->
                                    <div class="product-short">
                                        <p for="SortBy">Sort by</p>
                                        <select class="nice-select" name="sortby" id="SortBy">
                                            <option value="manual">Featured</option>
                                            <option value="best-selling">Best Selling</option>
                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                            <option value="title-descending">Alphabetically, Z-A</option>
                                            <option value="price-ascending">Price, low to high</option>
                                            <option value="price-descending">Price, high to low</option>
                                            <option value="created-descending">Date, new to old</option>
                                            <option value="created-ascending">Date, old to new</option>
                                        </select>
                                    </div>

                                    <!-- product-short end -->
                                </div>
                                <!-- shop-top-bar end -->







                                <script>
                                Shopify.queryParams = {};
                                if (location.search.length) {
                                    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i <
                                        aCouples.length; i++) {
                                        aKeyValue = aCouples[i].split('=');
                                        if (aKeyValue.length > 1) {
                                            Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(
                                                aKeyValue[1]);
                                        }
                                    }
                                }

                                $(function() {
                                    $('#SortBy')
                                        .val('best-selling')
                                        .bind('change', function() {
                                            Shopify.queryParams.sort_by = jQuery(this).val();
                                            location.search = jQuery.param(Shopify.queryParams);
                                        });
                                });
                                </script>
                            </div>
                        </div>
                        <div class="shop-grid">
                            <div class="product-grid-view">
                                <div class="shop-product-wrap">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-72537-diva-kitty-cat-saucer">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/72537_270X320_crop_center.jpg?v=1571716584"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485873496146, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-72537-diva-kitty-cat-saucer')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-72537-diva-kitty-cat-saucer">Diva
                                                            Kitty Cat Saucer</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$17.70 USD">$17.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-72538-stud-kitty-cat-saucer">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/72538_270X320_crop_center.jpg?v=1571716584"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485873463378, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-72538-stud-kitty-cat-saucer')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-72538-stud-kitty-cat-saucer">Stud
                                                            Kitty Cat Saucer</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$17.70 USD">$17.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-69862-carmel-medallion-pet-saucer-by-tarhong-grey">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/69862_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485873397842, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-69862-carmel-medallion-pet-saucer-by-tarhong-grey')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-69862-carmel-medallion-pet-saucer-by-tarhong-grey">Carmel
                                                            Medallion Pet Saucer by TarHong - Grey</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$12.70 USD">$12.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-65549-collapsible-kilpscoop-by-popware-pink">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/65549_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485873299538, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-65549-collapsible-kilpscoop-by-popware-pink')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-65549-collapsible-kilpscoop-by-popware-pink">Collapsible
                                                            KilpScoop by Popware - Pink</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$20.20 USD">$20.20 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-8621-meow-flair-cat-bowl-pink">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8621_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872775250, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-8621-meow-flair-cat-bowl-pink')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-8621-meow-flair-cat-bowl-pink">Meow
                                                            Flair Cat Bowl - Pink</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$20.70 USD">$20.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-8620-meow-flair-cat-bowl-blue">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8620_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872742482, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-8620-meow-flair-cat-bowl-blue')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-8620-meow-flair-cat-bowl-blue">Meow
                                                            Flair Cat Bowl - Blue</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$20.70 USD">$20.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-64554-in-the-tank-cat-saucer-fish-bowl">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/64554_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872414802, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-64554-in-the-tank-cat-saucer-fish-bowl')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-64554-in-the-tank-cat-saucer-fish-bowl">In
                                                            the Tank Cat Saucer - Fish Bowl</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$17.70 USD">$17.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-8632-sleepy-kitty-pink-cat-bowl">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8632_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872382034, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-8632-sleepy-kitty-pink-cat-bowl')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-8632-sleepy-kitty-pink-cat-bowl">Sleepy
                                                            Kitty Pink Cat Bowl</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$19.20 USD">$19.20 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-64553-in-the-tank-cat-saucer-fish-goggles">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/64553_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872349266, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-64553-in-the-tank-cat-saucer-fish-goggles')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-64553-in-the-tank-cat-saucer-fish-goggles">In
                                                            the Tank Cat Saucer - Fish Goggles</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$17.70 USD">$17.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-67710-meow-meow-cat-saucer-by-tarhong-white">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/67710_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485872283730, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-67710-meow-meow-cat-saucer-by-tarhong-white')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-67710-meow-meow-cat-saucer-by-tarhong-white">Meow
                                                            Meow Cat Saucer by TarHong - White</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$12.70 USD">$12.70 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-8631-sleepy-kitty-blue-cat-bowl">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8631_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485871497298, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-8631-sleepy-kitty-blue-cat-bowl')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-8631-sleepy-kitty-blue-cat-bowl">Sleepy
                                                            Kitty Blue Cat Bowl</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$19.20 USD">$19.20 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <div class="product-item-badge">





                                                    </div>
                                                    <a
                                                        href="/collections/cat-bowls-diners/products/a687-64550-pebbles-oval-cat-diner">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/64550_270X320_crop_center.jpg?v=1571716583"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485869891666, 1); return false;"
                                                            class="add-to-cart ajax-spin-cart">
                                                            <span>
                                                                <span class="cart-title"><i
                                                                        class="icon-handbag"></i></span>
                                                                <span
                                                                    class="cart-loading animated infinite rotateOut"><i
                                                                        class="ion-load-a"></i></span>
                                                                <span class="cart-added"><i
                                                                        class="ion-android-done"></i></span>
                                                                <span class="cart-unavailable"><i
                                                                        class="ion-android-alert"></i></span>
                                                            </span>
                                                        </a>



                                                        <a href="javascript:void(0);"
                                                            onclick="quiqview('a687-64550-pebbles-oval-cat-diner')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-bowls-diners/products/a687-64550-pebbles-oval-cat-diner">Pebbles
                                                            Oval Cat Diner</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$32.55 USD">$32.55 USD</span></span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->

                                        </div>
                                    </div>
                                </div>

                                <div class="paginatoin-area">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <p>Showing
                                                1 - 12
                                                of
                                                26
                                                result
                                            </p>

                                        </div>


                                        <div class="col-lg-6 col-md-6">
                                            <ul class="pagination-box">

                                                <li class="disabled prev">
                                                    <a href="#">
                                                        <span>Prev</span>
                                                    </a>
                                                </li>




                                                <li class="active"><a href="">1</a></li>




                                                <li>
                                                    <a href="/collections/cat-bowls-diners?page=2" title="">2</a>
                                                </li>



                                                <li>
                                                    <a href="/collections/cat-bowls-diners?page=3" title="">3</a>
                                                </li>



                                                <li class="next"><a href="/collections/cat-bowls-diners?page=2"
                                                        class="Next" title="Next »"><span
                                                            aria-hidden="true">Next</span></a></li>

                                            </ul>


                                            <script>
                                            $(".theme-default-pagination .disabled a").removeAttr("href");
                                            $(".theme-default-pagination li.active a").removeAttr("href");
                                            </script>
                                        </div>

                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="shop-sidebar-wrap">
                            <div class="shop-sidebar-inner">
                                <div class="shop-sidebar mb--30">
                                    <h4 class="title">Categories</h4>
                                    <ul>


                                        <li class=""><a href="/collections/bird-accessories">Bird Accessories
                                                <span>(47)</span></a></li>

                                        <li class=""><a href="/collections/bird-feeding">Bird Feeding
                                                <span>(226)</span></a></li>

                                        <li class=""><a href="/collections/bird-toys">Bird Toys <span>(85)</span></a>
                                        </li>

                                        <li class=""><a href="/collections/bow-ties">Bow Ties <span>(92)</span></a></li>

                                        <li class=""><a href="/collections/bowls-kits">Bowls &amp; Kits
                                                <span>(27)</span></a></li>

                                    </ul>
                                </div>
                                <div class="shop-sidebar mb--30">
                                    <h4 class="title">Products Types</h4>
                                    <ul>


                                        <li class=""><a href="/collections/types?q=Bird%20Accessories">Bird
                                                Accessories</a></li>
                                        <li class=""><a href="/collections/types?q=Bird%20Cups">Bird Cups</a></li>
                                        <li class=""><a href="/collections/types?q=Bird%20Feeding">Bird Feeding</a></li>
                                        <li class=""><a href="/collections/types?q=Bird%20Toys">Bird Toys</a></li>
                                        <li class=""><a href="/collections/types?q=Bow%20Ties">Bow Ties</a></li>
                                    </ul>
                                </div>
                                <div class="shop-sidebar  mb--30">
                                    <h4 class="title">Tags</h4>
                                    <div class="sidebar-tag">


                                        <a href="/collections/all/catbowlsanddiners">catbowlsanddiners</a>
                                    </div>
                                </div>
                                <div class="sidbar-product shop-sidebar mb--30">
                                    <h4 class="title">BEST FOOD FOR PETS</h4>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-71936-real-meat-turkey-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71936_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-71936-real-meat-turkey-dog-food">Real
                                                    Meat Turkey Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$23.32 USD">$23.32 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-71937-real-meat-turkey-and-venison-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71937_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-71937-real-meat-turkey-and-venison-dog-food">Real
                                                    Meat Turkey and Venison Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$24.45 USD">$24.45 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-8967-real-meat-chicken-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8967_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-8967-real-meat-chicken-dog-food">Real
                                                    Meat Chicken Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$55.50 USD">$55.50 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-8968-real-meat-lamb-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8968_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-8968-real-meat-lamb-dog-food">Real
                                                    Meat Lamb Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$53.70 USD">$53.70 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-58412-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/58412_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-58412-klipscoop-portion-control-food-scoop">KlipScoop
                                                    Portion Control Food Scoop</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$15.70 USD">$15.70 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/a687-8966-real-meat-beef-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8966_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/a687-8966-real-meat-beef-dog-food">Real
                                                    Meat Beef Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$54.15 USD">$54.15 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/s576-pw670575730647dxl-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/PW6705757-30647DX-L_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/s576-pw670575730647dxl-klipscoop-portion-control-food-scoop">KlipScoop
                                                    Portion Control Food Scoop</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$19.94 USD">$19.94 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-bowls-diners/products/s576-pw650575730645dxs-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/PW6505757-30645DX-S_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-bowls-diners/products/s576-pw650575730645dxs-klipscoop-portion-control-food-scoop">KlipScoop
                                                    Portion Control Food Scoop</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$15.70 USD">$15.70 USD</span></span>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>


                            <script>
                            $(".sidebar-wedget li.active a").removeAttr("href");
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Shop Page -->



    </div>
</main>

<?php include_once('../includes/footer.php'); ?>