@extends('layouts.app')

@section('content')

        <div class="intro-slider-container">
            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl"
                 data-owl-options='{"nav": false, "rtl": true}'>
                <div class="intro-slide"
                     style="background-image: url(assets/images/demos/demo-2/slider/slide-1.jpg);">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">مبل تخت خواب شو</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">بهترین انتخاب <br>مطابق سلیقه شما</h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-primary">
                            <span>خرید</span>
                            <i class="icon-long-arrow-left"></i>
                        </a>
                    </div><!-- End .container intro-content -->
                </div><!-- End .intro-slide -->

                <div class="intro-slide"
                     style="background-image: url(assets/images/demos/demo-2/slider/slide-2.jpg);">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">پیشنهاد جدید</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">میز <br>قهوه خوری <br><span
                                class="text-primary">49,000<sup>تومان</sup></span></h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-primary">
                            <span>خرید</span>
                            <i class="icon-long-arrow-left"></i>
                        </a>
                    </div><!-- End .container intro-content -->
                </div><!-- End .intro-slide -->

                <div class="intro-slide"
                     style="background-image: url(assets/images/demos/demo-2/slider/slide-3.jpg);">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">اتاق نشیمن</h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title">
                            طراحی اتاق نشیمن <br>مطابق سلیقه شما<br>
                            <span class="text-primary">
                                    <sup class="text-white font-weight-light">از</sup>99,000<sup>تومان</sup>
                                </span>
                        </h1><!-- End .intro-title -->

                        <a href="category.html" class="btn btn-primary">
                            <span>خرید</span>
                            <i class="icon-long-arrow-left"></i>
                        </a>
                    </div><!-- End .container intro-content -->
                </div><!-- End .intro-slide -->
            </div><!-- End .owl-carousel owl-simple -->

            <span class="slider-loader text-white"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->

        <div class="brands-border owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                    "nav": false,
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "rtl": true,
                            "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
            <a href="#" class="brand">
                <img src="assets/images/brands/1.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/2.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/3.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/4.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/5.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/6.png" alt="نام برند">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/7.png" alt="نام برند">
            </a>
        </div><!-- End .owl-carousel -->

        <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

        <div class="banner-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="banner banner-large banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="assets/images/demos/demo-2/banners/banner-1.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-top">
                                <h4 class="banner-subtitle">پیشنهاد ویژه</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title">میز قهوه</h3><!-- End .banner-title -->
                                <div class="banner-text">از 19,000 تومان</div><!-- End .banner-text -->
                                <a href="#" class="btn btn-outline-gray banner-link">خرید<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-5 -->

                    <div class="col-md-6 col-lg-3">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="assets/images/demos/demo-2/banners/banner-2.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-bottom">
                                <h4 class="banner-subtitle text-grey">برای فروش</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white">صندلی های <br>فوق العاده</h3>
                                <!-- End .banner-title -->
                                <div class="banner-text text-white">از 39,000 تومان</div><!-- End .banner-text -->
                                <a href="#" class="btn btn-outline-white banner-link">مشاهده<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-md-6 col-lg-4">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="assets/images/demos/demo-2/banners/banner-3.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-top">
                                <h4 class="banner-subtitle text-grey">محصولات جدید</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white">جعبه <br>و سبد</h3>
                                <!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">مشاهده<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="assets/images/demos/demo-2/banners/banner-4.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-top">
                                <h4 class="banner-subtitle">برای فروش</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title">تخفف لامپ</h3><!-- End .banner-title -->
                                <div class="banner-text">تا 30% تخفیف</div><!-- End .banner-text -->
                                <a href="#" class="btn btn-outline-gray banner-link">خرید<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .banner-group -->

        <div class="mb-3"></div><!-- End .mb-6 -->

        <div class="container">
            <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="products-featured-link" data-toggle="tab"
                       href="#products-featured-tab" role="tab" aria-controls="products-featured-tab"
                       aria-selected="true">مبلمان</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab"
                       role="tab" aria-controls="products-sale-tab" aria-selected="false">بیشترین فروش</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab"
                       aria-controls="products-top-tab" aria-selected="false">بیشترین امتیاز</a>
                </li>
            </ul>
        </div><!-- End .container -->

        <div class="container-fluid">
            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
                     aria-labelledby="products-featured-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                         data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "rtl": true,
                            "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">نردبان Butler Stool
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    251,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-2-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-2-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">چراغ روشنایی Octo
                                        4240</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    746,000 تومان
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #1f1e18;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">جدید</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-3-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">صندلی راحتی Flow Slim
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    970,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">فروش ویژه</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-4-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-4-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">مبل تخت خواب شو</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">337,000 تومان</span>
                                    <span class="old-price">449,000</span>
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #878883;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-5-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-5-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">چراغ رومیزی زیبا</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    675,000 تومان
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #74543e;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-6-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">صندلی راحتی Elephant
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    475,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">نردبان Butler Stool
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    251,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel"
                     aria-labelledby="products-sale-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                         data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "rtl": true,
                            "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-5-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-5-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">چراغ رومیزی زیبا</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    675,000 تومان
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #74543e;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-6-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-6-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">صندلی راحتی Elephant
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    475,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-1-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-1-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">نردبان Butler Stool
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    251,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel"
                     aria-labelledby="products-top-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                         data-toggle="owl" data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "rtl": true,
                            "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>
                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-2-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-2-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">چراغ روشنایی Octo
                                        4240</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    746,000 تومان
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #1f1e18;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">جدید</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-3-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-3-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">صندلی راحتی Flow Slim
                                    </a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    970,000 تومان
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product product-11 text-center">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">فروش ویژه</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/products/product-4-1.jpg" alt="تصویر محصول"
                                         class="product-image">
                                    <img src="assets/images/demos/demo-2/products/product-4-2.jpg" alt="تصویر محصول"
                                         class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title text-center"><a href="product.html">مبل تخت خواب شو</a>
                                </h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">337,000 تومان</span>
                                    <span class="old-price">449,000</span>
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #878883;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                                name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container-fluid -->

        <div class="mb-5"></div><!-- End .mb-5 -->

        <div class="bg-light deal-container pt-5 pb-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="deal">
                            <div class="deal-content text-right">
                                <h4>تعداد محدود</h4>
                                <h2>پیشنهاد روزانه</h2>

                                <h3 class="product-title"><a href="product.html">POÄNG</a></h3>
                                <!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">149,000 تومان</span>
                                    <span class="old-price">240,000</span>
                                </div><!-- End .product-price -->

                                <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                <a href="product.html" class="btn btn-primary">
                                    <span>خرید</span><i class="icon-long-arrow-left"></i>
                                </a>
                            </div><!-- End .deal-content -->
                            <div class="deal-image">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-2/deal/product-1.jpg" alt="image">
                                </a>
                            </div><!-- End .deal-image -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-9 -->

                    <div class="col-lg-3">
                        <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                            <a href="#">
                                <img src="assets/images/demos/demo-2/banners/banner-5.jpg" alt="بنر">
                            </a>

                            <div class="banner-content banner-content-top banner-content-center text-center">
                                <h4 class="banner-subtitle">بهترین انتخاب</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title">AGEN</h3><!-- End .banner-title -->
                                <div class="banner-text text-primary">49,000 تومان</div><!-- End .banner-text -->
                                <a href="#" class="btn btn-outline-gray banner-link">خرید<i
                                        class="icon-long-arrow-left"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light -->

        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title text-center">پرفروش ترین محصولات</h2><!-- End .title -->

                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab"
                           role="tab" aria-controls="top-all-tab" aria-selected="true">همه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab"
                           aria-controls="top-fur-tab" aria-selected="false">مبل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab"
                           aria-controls="top-decor-tab" aria-selected="false">دکور</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab"
                           aria-controls="top-light-tab" aria-selected="false">روشنایی</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel"
                     aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-7-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-7-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">چراغ های رومیزی
                                                زیبا</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-8-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-8-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">نگه دارنده
                                                Madra Log</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color
                                                        name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">فروش ویژه</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-9-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-9-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی راحتی
                                                باغ</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">94,000 تومان</span>
                                            <span class="old-price">108,00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-10-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-10-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">لامپ سقفی
                                                بزرگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                        name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-11-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-11-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی بین
                                                بگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            259,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-12-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-12-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">مبل 2 </a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            980,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-13-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-13-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی پشت
                                                دار</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            945,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-14-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-14-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-15-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-15-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-16-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-16-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">لامپ رومیزی</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            499,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">فروش ویژه</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-9-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-9-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی راحتی
                                                باغ</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">94,000 تومان</span>
                                            <span class="old-price">94,000</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">جدید</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-12-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-12-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">مبل 2 </a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            980,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-13-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-13-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">مبل</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی پشت
                                                دار</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            945,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-8-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-8-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">نگه دارنده
                                                Madra Log</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color
                                                        name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-11-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-11-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">صندلی بین
                                                بگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            259,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-14-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-14-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-15-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-15-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">دکور</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">روشنایی 3
                                                تیکه</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            199,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-7-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-7-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">چراغ های رومیزی
                                                زیبا</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-10-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-10-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">لامپ سقفی
                                                بزرگ</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            401,000 تومان
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                        name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product product-11 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-2/products/product-16-1.jpg"
                                                 alt="تصویر محصول" class="product-image">
                                            <img src="assets/images/demos/demo-2/products/product-16-2.jpg"
                                                 alt="تصویر محصول" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>افزودن به
                                                        لیست علاقه مندی</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat text-center">
                                            <a href="#">روشنایی</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title text-center"><a href="product.html">لامپ رومیزی</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            499,000 تومان
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد خرید</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-1 mb-6">
        </div><!-- End .container -->

        <div class="blog-posts">
            <div class="container">
                <h2 class="title text-center">اخبار فروشگاه ما</h2><!-- End .title-lg text-center -->

                <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "rtl": true,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/demos/demo-2/blog/post-1.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">22 فروردین 1399</a>, 0 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">ادامه خواندن</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/demos/demo-2/blog/post-2.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">12 فروردین 1399</a>, 0 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">ادامه خواندن</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry entry-display">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="assets/images/demos/demo-2/blog/post-3.jpg" alt="توضیحات عکس">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">10 فروردین 1399</a>, 2 دیدگاه
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title text-center">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                <a href="single.html" class="read-more">ادامه خواندن</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .owl-carousel -->

                <div class="more-container text-center mt-2">
                    <a href="blog.html" class="btn btn-outline-darker btn-more"><span>مشاهده اخبار بیشتر</span><i
                            class="icon-long-arrow-left"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->
        </div><!-- End .blog-posts -->
@endsection
