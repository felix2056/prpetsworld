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
                <h2 class="breadcrumb-title">Cat Toys</h2>
                <!-- breadcrumb-list start -->

                <nav class="" role="navigation" aria-label="breadcrumbs">
                    <ul class="breadcrumb-list">

                        <li class="breadcrumb-item">
                            <a href="/" title="Back to the home page">Home</a>
                        </li>
                        <li class="breadcrumb-item">




                            <span>Cat Toys</span>



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
                                                        href="/collections/cat-toys/products/a687-71148-turbo-cat-turbo-tail-cat-toy-rattle-ball">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71148_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485900365906, 1); return false;"
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
                                                            onclick="quiqview('a687-71148-turbo-cat-turbo-tail-cat-toy-rattle-ball')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71148-turbo-cat-turbo-tail-cat-toy-rattle-ball">Turbo
                                                            Cat Turbo Tail Cat Toy - Rattle Ball</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$11.70 USD">$11.70 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71147-turbo-cat-turbo-tail-cat-toy-pop-up-ball">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71147_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485900300370, 1); return false;"
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
                                                            onclick="quiqview('a687-71147-turbo-cat-turbo-tail-cat-toy-pop-up-ball')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71147-turbo-cat-turbo-tail-cat-toy-pop-up-ball">Turbo
                                                            Cat Turbo Tail Cat Toy - Pop-Up Ball</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$13.80 USD">$13.80 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71150-turbo-cat-turbo-tail-cat-toy-ameba-bug">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71150_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485900103762, 1); return false;"
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
                                                            onclick="quiqview('a687-71150-turbo-cat-turbo-tail-cat-toy-ameba-bug')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71150-turbo-cat-turbo-tail-cat-toy-ameba-bug">Turbo
                                                            Cat Turbo Tail Cat Toy - Ameba Bug</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$11.70 USD">$11.70 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71712-wooly-wonkz-under-the-sea-cat-toy-angel-fish">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71712_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485900070994, 1); return false;"
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
                                                            onclick="quiqview('a687-71712-wooly-wonkz-under-the-sea-cat-toy-angel-fish')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71712-wooly-wonkz-under-the-sea-cat-toy-angel-fish">Wooly
                                                            Wonkz Under The Sea Cat Toy - Angel Fish</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$16.20 USD">$16.20 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71713-wooly-wonkz-under-the-sea-cat-toy-seahorse">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71713_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485896368210, 1); return false;"
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
                                                            onclick="quiqview('a687-71713-wooly-wonkz-under-the-sea-cat-toy-seahorse')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71713-wooly-wonkz-under-the-sea-cat-toy-seahorse">Wooly
                                                            Wonkz Under The Sea Cat Toy - Seahorse</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$16.20 USD">$16.20 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71711-wooly-wonkz-under-the-sea-cat-toy-starfish">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71711_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485896007762, 1); return false;"
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
                                                            onclick="quiqview('a687-71711-wooly-wonkz-under-the-sea-cat-toy-starfish')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71711-wooly-wonkz-under-the-sea-cat-toy-starfish">Wooly
                                                            Wonkz Under The Sea Cat Toy - Starfish</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$16.20 USD">$16.20 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-71714-wooly-wonkz-under-the-sea-cat-toy-clown-fish">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71714_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485895549010, 1); return false;"
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
                                                            onclick="quiqview('a687-71714-wooly-wonkz-under-the-sea-cat-toy-clown-fish')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-71714-wooly-wonkz-under-the-sea-cat-toy-clown-fish">Wooly
                                                            Wonkz Under The Sea Cat Toy - Clown Fish</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$16.20 USD">$16.20 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-67553-wooly-wonkz-woodland-cat-toy-lime-fish">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/67553_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485895450706, 1); return false;"
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
                                                            onclick="quiqview('a687-67553-wooly-wonkz-woodland-cat-toy-lime-fish')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-67553-wooly-wonkz-woodland-cat-toy-lime-fish">Wooly
                                                            Wonkz Woodland Cat Toy - Lime Fish</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$14.70 USD">$14.70 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-65304-savvy-tabby-glitter-critters-cat-toy-snail">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/65304_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485893255250, 1); return false;"
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
                                                            onclick="quiqview('a687-65304-savvy-tabby-glitter-critters-cat-toy-snail')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-65304-savvy-tabby-glitter-critters-cat-toy-snail">Savvy
                                                            Tabby Glitter Critters Cat Toy - Snail</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$10.20 USD">$10.20 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-68041-wooly-wonks-safari-cat-toy-parrot">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/68041_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485892304978, 1); return false;"
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
                                                            onclick="quiqview('a687-68041-wooly-wonks-safari-cat-toy-parrot')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-68041-wooly-wonks-safari-cat-toy-parrot">Wooly
                                                            Wonks Safari Cat Toy - Parrot</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$14.70 USD">$14.70 USD</span></span>

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
                                                        href="/collections/cat-toys/products/a687-11111-kong-moppy-kickaroo-cat-toy">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/11111_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485892108370, 1); return false;"
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
                                                            onclick="quiqview('a687-11111-kong-moppy-kickaroo-cat-toy')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-11111-kong-moppy-kickaroo-cat-toy">Kong
                                                            Moppy Kickaroo Cat Toy</a></h3>
                                                    <div class="price-box">

                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$11.46 USD">$11.46 USD</span></span>

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



                                                        <span class="sale-title">Sale</span>


                                                        <span class="percent-count">-1%</span>





                                                    </div>
                                                    <a
                                                        href="/collections/cat-toys/products/a687-6151-fling-ama-string-cat-toy">
                                                        <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/6151_270X320_crop_center.jpg?v=1571716586"
                                                            alt="">
                                                    </a>
                                                    <div class="product-action">


                                                        <a class="wishlist" href="/account/login" title="Wishlist">
                                                            <span class="add-wishlist"><i class="icon-heart"></i></span>
                                                        </a>





                                                        <a href="javascript:void(0);"
                                                            onclick="Shopify.addItem(21485891387474, 1); return false;"
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
                                                            onclick="quiqview('a687-6151-fling-ama-string-cat-toy')"
                                                            class="quick-view" data-toggle="modal"
                                                            data-target="#exampleModalCenter"><i
                                                                class="icon-magnifier-add"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a
                                                            href="/collections/cat-toys/products/a687-6151-fling-ama-string-cat-toy">Fling-Ama-String
                                                            Cat Toy</a></h3>
                                                    <div class="price-box">

                                                        <span class="old-price"><span class="money"
                                                                data-currency-usd="$47.00 USD">$47.00 USD</span></span>
                                                        <span class="new-price"><span class="money"
                                                                data-currency-usd="$46.50 USD">$46.50 USD</span></span>

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
                                                41
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
                                                    <a href="/collections/cat-toys?page=2" title="">2</a>
                                                </li>



                                                <li>
                                                    <a href="/collections/cat-toys?page=3" title="">3</a>
                                                </li>



                                                <li>
                                                    <a href="/collections/cat-toys?page=4" title="">4</a>
                                                </li>



                                                <li class="next"><a href="/collections/cat-toys?page=2" class="Next"
                                                        title="Next »"><span aria-hidden="true">Next</span></a></li>

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


                                        <a href="/collections/all/cattoys">cattoys</a>
                                    </div>
                                </div>
                                <div class="sidbar-product shop-sidebar mb--30">
                                    <h4 class="title">BEST FOOD FOR PETS</h4>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a
                                                href="/collections/cat-toys/products/a687-71936-real-meat-turkey-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71936_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-71936-real-meat-turkey-dog-food">Real
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
                                                href="/collections/cat-toys/products/a687-71937-real-meat-turkey-and-venison-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/71937_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-71937-real-meat-turkey-and-venison-dog-food">Real
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
                                                href="/collections/cat-toys/products/a687-8967-real-meat-chicken-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8967_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-8967-real-meat-chicken-dog-food">Real
                                                    Meat Chicken Dog Food</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$55.50 USD">$55.50 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a href="/collections/cat-toys/products/a687-8968-real-meat-lamb-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8968_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-8968-real-meat-lamb-dog-food">Real
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
                                                href="/collections/cat-toys/products/a687-58412-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/58412_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-58412-klipscoop-portion-control-food-scoop">KlipScoop
                                                    Portion Control Food Scoop</a></h3>
                                            <div class="price-box">
                                                <span class="new-price"><span class="money"
                                                        data-currency-usd="$15.70 USD">$15.70 USD</span></span>

                                            </div>
                                        </div>
                                    </div>






                                    <div class="sidbar-product-inner">
                                        <div class="product-image">
                                            <a href="/collections/cat-toys/products/a687-8966-real-meat-beef-dog-food">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/8966_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/a687-8966-real-meat-beef-dog-food">Real
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
                                                href="/collections/cat-toys/products/s576-pw670575730647dxl-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/PW6705757-30647DX-L_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/s576-pw670575730647dxl-klipscoop-portion-control-food-scoop">KlipScoop
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
                                                href="/collections/cat-toys/products/s576-pw650575730645dxs-klipscoop-portion-control-food-scoop">
                                                <img src="//cdn.shopify.com/s/files/1/0059/6620/0914/products/PW6505757-30645DX-S_90X107_crop_center.jpg?v=1571716435"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-content text-left">
                                            <h3><a
                                                    href="/collections/cat-toys/products/s576-pw650575730645dxs-klipscoop-portion-control-food-scoop">KlipScoop
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