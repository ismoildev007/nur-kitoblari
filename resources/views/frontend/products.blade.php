@extends('layouts.frontend')

@section('content')
    <!-- slider-group-start -->
    <div class="slider-group  mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                    <!-- slider-area-start -->
                    <div class="slider-area">
                        <div class="slider-active owl-carousel">
                            <div class="single-slider slider-hm4-1 pt-154 pb-154 bg-img" style="background-image:url(/assets/img/slider/7.jpg);">
                                <div class="slider-content-4 slider-animated-1 pl-40">
                                    <h1>Sale up to 30% off</h1>
                                    <h2>Books in Store</h2>
                                    <a href="#">Shopping now!</a>
                                </div>
                            </div>
                            <div class="single-slider pt-154 pb-154 bg-img" style="background-image:url(/assets/img/slider/8.jpg);">
                                <div class="slider-content-4 slider-animated-1 pl-40">
                                    <h1>Sale up to 30% off</h1>
                                    <h2>Books in Order</h2>
                                    <a href="#">Shopping now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider-area-end -->
                </div>
                <div class="col-lg-3 col-md-12 col-12">
                    <!-- banner-static-2-start -->
                    <div class="banner-static-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="banner-img-2">
                                    <a href="#"><img src="/assets/img/banner/20.jpg" alt="banner" /></a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <!-- banner-area-3-start -->
                                <div class="banner-area-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- single-banner-2-start -->
                                            <div class="single-banner-2 mt-16">
                                                <div class="single-icon-2">
                                                    <a href="#">
                                                        <img class="service-blue-img" src="/assets/img/icon-img/service-1.png" alt="banner" />
                                                        <img class="service-white-img" src="/assets/img/icon-img/service-1-white.png" alt="banner" />
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Free shipping item</h2>
                                                    <p>For all orders over $500</p>
                                                </div>
                                            </div>
                                            <!-- single-banner-2-end -->
                                        </div>
                                        <div class="col-12">
                                            <!-- single-banner-2-start -->
                                            <div class="single-banner-2 mt-16">
                                                <div class="single-icon-2">
                                                    <a href="#">
                                                        <img class="service-blue-img" src="/assets/img/icon-img/service-2.png" alt="banner" />
                                                        <img class="service-white-img" src="/assets/img/icon-img/service-2-white.png" alt="banner" />
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Money back guarante</h2>
                                                    <p>100% money back guarante</p>
                                                </div>
                                            </div>
                                            <!-- single-banner-2-end -->
                                        </div>
                                        <div class="col-12">
                                            <!-- single-banner-2-start -->
                                            <div class="single-banner-2 mt-16">
                                                <div class="single-icon-2">
                                                    <a href="#">
                                                        <img class="service-blue-img" src="/assets/img/icon-img/service-3.png" alt="banner" />
                                                        <img class="service-white-img" src="/assets/img/icon-img/service-3-white.png" alt="banner" />
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Cash on delivery</h2>
                                                    <p>Lorem ipsum dolor amet</p>
                                                </div>
                                            </div>
                                            <!-- single-banner-2-end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- banner-area-3-end -->
                            </div>
                        </div>

                    </div>
                    <!-- banner-static-2-end -->
                </div>
            </div>
        </div>
    </div>
    <!-- slider-group-end -->
    <!-- home-main-area-start -->
    <div class="home-main-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- category-area-start -->
                    <div class="category-area mb-30">
                        <h3><a href="#">Category Menu <i class="fa fa-bars"></i></a></h3>
                        <div class="category-menu">
                            <nav class="menu">
                                <ul>
                                    @if(!empty($categories) && $categories->count())
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('sort.products', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    @else
                                        <li><a href="#">Used Books</a></li>
                                        <li><a href="#">Sales Off</a></li>
                                        <li><a href="#">Biographies</a></li>
                                        <li><a href="#">Cookbooks</a></li>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li class="rx-child"><a href="shop.html">Health, Fitness</a></li>
                                        <li class="rx-parent">
                                            <a class="rx-default">
                                                <span class="cat-thumb fa fa-plus"></span> More Categories
                                            </a>
                                            <a class="rx-show">
                                                <span class="cat-thumb fa fa-minus"></span> Close Menu
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- category-area-end -->
                    <!-- banner-area-start -->
                    <div class="banner-area mb-30">
                        <div class="banner-img-2">
                            <a href="#"><img src="/assets/img/banner/21.jpg" alt="banner" /></a>
                        </div>
                    </div>
                    <!-- banner-area-end -->
                    <!-- most-product-area-start -->
                    <div class="most-product-area mb-30">
                        <div class="section-title-2 mb-30">
                            <h3>Trending Products </h3>
                        </div>
                        <div class="product-active-2 owl-carousel">
                            <div class="product-total-2">
                                @if(!empty($trending1) && $trending1->count())
                                    @foreach($trending1 as $one)
                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="{{ route('single.product', $one->id) }}"><img src="{{ asset('storage/' . $one->image) }}" alt="book" /></a>
                                            </div>
                                            <div class="most-product-content">
                                                <h4><a href="{{ route('single.product', $one->id) }}">{{ $one->name }}</a></h4>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>{{ $one->price }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="single-most-product bd mb-18">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/20.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Endeavor Daytrip</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$30.00</li>
                                                    <li class="old-price">$33.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-most-product bd mb-18">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/21.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$30.00</li>
                                                    <li class="old-price">$35.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-most-product">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/22.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Compete Track Tote</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$35.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="product-total-2">
                                @if(!empty($trending2) && $trending2->count())
                                    @foreach($trending2 as $two)
                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="{{ route('single.product', $two->id) }}"><img src="{{ asset('storage/' . $two->image) }}" alt="book" /></a>
                                            </div>
                                            <div class="most-product-content">
                                                <h4><a href="{{ route('single.product', $two->id) }}">{{ $two->name }}</a></h4>
                                                <div class="product-price">
                                                    <ul>
                                                        <li>{{ $two->price }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="single-most-product bd mb-18">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/20.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Endeavor Daytrip</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$30.00</li>
                                                    <li class="old-price">$33.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-most-product bd mb-18">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/21.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$30.00</li>
                                                    <li class="old-price">$35.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-most-product">
                                        <div class="most-product-img">
                                            <a href="#"><img src="/assets/img/product/22.jpg" alt="book" /></a>
                                        </div>
                                        <div class="most-product-content">
                                            <h4><a href="#">Compete Track Tote</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>$35.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- most-product-area-end -->
                    <!-- block-newsletter-area-start -->
                    <div class="block-newsletter">
                        <h2>Sign up for send newsletter</h2>
                        <p>You can be always up to date with our company new!</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your email address" />
                        </form>
                        <a href="#">Send Email</a>
                    </div>
                    <!-- block-newsletter-area-end -->
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <!-- banner-area-5-start -->
                    <div class="banner-area-5">
                        <div class="single-banner-4 xs-mb">
                            <div class="banner-img-2">
                                <a href="#"><img src="/assets/img/banner/24.jpg" alt="banner" /></a>
                            </div>
                        </div>
                        <div class="single-banner-5">
                            <div class="banner-img-2">
                                <a href="#"><img src="/assets/img/banner/23.jpg" alt="banner" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area-5-end -->
                    <!-- new-book-area-start -->
                    <div class="new-book-area ptb-50">
                        <div class="section-title-2 mb-30">
                            <h3>New Arrivals</h3>
                        </div>
                        <dv class="row">
                            <!-- single-product-start -->
                            @if(!empty($newProducts) && $newProducts->count())
                                @foreach($newProducts as $newProduct)
                                    <div class="col-md-3 product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('storage/' . $newProduct->image) }}" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="#" data-bs-target="#productModal{{ $newProduct->id }}" data-bs-toggle="modal" title="Quick View">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </div>
                                            <div class="product-flag">
                                                <ul>
                                                    <li><span class="sale">new</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <div class="product-rating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">{{ $newProduct->name }}</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>{{ $newProduct->price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-link">
                                            <div class="product-button">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li><a href="{{ route('single.product', $newProduct->id) }}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-3 product-wrapper mb-40">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/1.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <li><span class="discount-percentage">-5%</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-rating">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Joust Duffle Bag</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$60.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/18.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="product-rating">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Driven Backpack</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$34.00</li>
                                                <li class="old-price">$36.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- single-product-end -->
                        </dv>
                    </div>
                    <!-- new-book-area-start -->
                    <!-- hot-sell-area-2-start -->
                    <div class="hot-sell-area-2 pb-50">
                        <div class="section-title-2 title-big bt pt-50 mb-30">
                            <h3>hot sale</h3>
                        </div>
                        <div class="hot-sell-active owl-carousel">
                            @if(!empty($products) && $products->count())
                                @foreach($products as $product)
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="#" data-bs-target="#productModal{{ $product->id }}" data-bs-toggle="modal" title="Quick View">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </div>
                                            <div class="product-flag">
                                                <ul>
                                                    <li><span class="sale">new</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <div class="product-rating mt-20">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4><a href="#">{{ $product->name }}</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>{{ $product->price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-link">
                                            <div class="product-button">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Sotib olish</a>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li><a href="{{ route('single.product', $product->id) }}" title="Details"><i class="fa fa-external-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <!-- single-product-start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/7.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <li><span class="discount-percentage">-5%</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="timer-2 text-center">
                                            <div data-countdown="2023/10/15"></div>
                                        </div>
                                        <div class="product-rating mt-20">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Strive Shoulder Pack</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$30.00</li>
                                                <li class="old-price">$32.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/3.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="timer-2 text-center">
                                            <div data-countdown="2023/10/15"></div>
                                        </div>
                                        <div class="product-rating mt-20">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$52.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/11.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="discount-percentage">-5%</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="timer-2 text-center">
                                            <div data-countdown="2023/08/15"></div>
                                        </div>
                                        <div class="product-rating mt-20">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Impulse Duffle</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$74.00</li>
                                                <li class="old-price">78.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                                <!-- single-product-start -->
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="/assets/img/product/9.jpg" alt="book" class="primary" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <li><span class="discount-percentage">-5%</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <div class="timer-2 text-center">
                                            <div data-countdown="2023/12/15"></div>
                                        </div>
                                        <div class="product-rating mt-20">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                        <div class="product-price">
                                            <ul>
                                                <li>$35.00</li>
                                                <li class="old-price">40.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-link">
                                        <div class="product-button">
                                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-end -->
                            @endif
                        </div>
                    </div>
                    <!-- hot-sell-area-2-end -->
                </div>
            </div>
        </div>
    </div>
    <!-- home-main-area-end -->
    <!-- banner-area-start -->
    <div class="banner-area-5 mtb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-img-2 for-height">
                        <a href="#"><img src="/assets/img/banner/5.jpg" alt="banner" /></a>
                        <div class="banner-text">
                            <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                            <h2>Sale up to 30% off</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area-end -->
    <!-- social-group-area-start -->
    <div class="social-group-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Latest Tweets</h3>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="twitter-text">
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum notare quam
                            </p>
                            <a href="#">koparion</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title-3">
                        <h3>Stay Connected</h3>
                    </div>
                    <div class="link-follow">
                        <ul>
                            <li><a href="{{ $contact->telegram }}"><i class="fa fa-plane"></i></a></li>
                            <li><a href="{{ $contact->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $contact->youtube }}"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $contact->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- social-group-area-end -->
    @if(!empty($products) && $products->count())
        @foreach($products as $product)
            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="modal-tab">
                                        <div class="product-details-large tab-content">
                                            <div class="tab-pane active" id="image-1">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="modal-pro-content">
                                        <h3>{{ $product->name }}</h3>
                                        <div class="price">
                                            <span>{{ $product->price }}</span>
                                        </div>
                                        <p>{!! $product->content !!}</p>
                                        <form action="#" style="margin-top: 30px !important;">
                                            <input type="number" value="1" />
                                            <button>Sotib olish</button>
                                        </form>
                                        <span><i class="fa fa-check"></i> In stock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        @endforeach
    @elseif(!empty($newProducts) && $newProducts->count())
        @foreach($newProducts as $product)
            <!-- Modal -->
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="modal-tab">
                                        <div class="product-details-large tab-content">
                                            <div class="tab-pane active" id="image-1">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="modal-pro-content">
                                        <h3>{{ $product->name }}</h3>
                                        <div class="price">
                                            <span>{{ $product->price }}</span>
                                        </div>
                                        <p>{!! $product->content !!}</p>
                                        <form action="#" style="margin-top: 30px !important;">
                                            <input type="number" value="1" />
                                            <button>Sotib olish</button>
                                        </form>
                                        <span><i class="fa fa-check"></i> In stock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        @endforeach
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="modal-tab">
                                    <div class="product-details-large tab-content">
                                        <div class="tab-pane active" id="image-1">
                                            <img src="/assets/img/product/quickview-l4.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="modal-pro-content">
                                    <h3>Chaz Kangeroo Hoodie3</h3>
                                    <div class="price">
                                        <span>$70.00</span>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
                                    <form action="#" style="margin-top: 30px !important;">
                                        <input type="number" value="1" />
                                        <button>Add to cart</button>
                                    </form>
                                    <span><i class="fa fa-check"></i> In stock</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    @endif
@endsection
