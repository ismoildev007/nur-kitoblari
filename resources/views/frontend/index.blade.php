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

                            <div class="single-slider pt-154 pb-154 bg-img"
                                 style="background-image:url(/assets/img/slider/8.jpg);">
                                <div class="slider-content-4 slider-animated-1 pl-40">
                                    <h1>30% gacha chegirma</h1>
                                    <h2>Kitoblar tartibda</h2>
                                    <a href="#products">Hozir xarid qiling!</a>
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
                                    <a href="#"><img src="/assets/img/banner/04.12.2024.webp" alt="banner"/></a>
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
                                                        <img class="service-blue-img"
                                                             src="/assets/img/icon-img/service-1.png" alt="banner"/>
                                                        <img class="service-white-img"
                                                             src="/assets/img/icon-img/service-1-white.png"
                                                             alt="banner"/>
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Bepul Yetkazib Berish</h2>
                                                    <p> Lorem ipsum dolor amet</p>
                                                </div>

                                            </div>
                                            <!-- single-banner-2-end -->
                                        </div>
                                        <div class="col-12">
                                            <!-- single-banner-2-start -->
                                            <div class="single-banner-2 mt-16">
                                                <div class="single-icon-2">
                                                    <a href="#">
                                                        <img class="service-blue-img"
                                                             src="/assets/img/icon-img/service-2.png" alt="banner"/>
                                                        <img class="service-white-img"
                                                             src="/assets/img/icon-img/service-2-white.png"
                                                             alt="banner"/>
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Pulni qaytarish kafolati</h2>
                                                    <p>100% pulni qaytarish kafolati</p>
                                                </div>
                                            </div>
                                            <!-- single-banner-2-end -->
                                        </div>
                                        <div class="col-12">
                                            <!-- single-banner-2-start -->
                                            <div class="single-banner-2 mt-16">
                                                <div class="single-icon-2">
                                                    <a href="#">
                                                        <img class="service-blue-img"
                                                             src="/assets/img/icon-img/service-3.png" alt="banner"/>
                                                        <img class="service-white-img"
                                                             src="/assets/img/icon-img/service-3-white.png"
                                                             alt="banner"/>
                                                    </a>
                                                </div>
                                                <div class="single-text-2">
                                                    <h2>Naqd pulda to'lov</h2>
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
    <div class="home-main-area mt-30 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- category-area-start -->
                    <div class="category-area mb-30 col-sm-none">
                        <h3><a  class="text-white">Kategoriyalar <i class="fa fa-bars"></i></a></h3>

                        <div class="category-menu">
                            <nav class="menu">
                                <ul>
                                    @if(!empty($categories) && $categories->count())
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{ route('sort.products', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                            </li>
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
                    <div class="banner-area mb-30 col-sm-none">
                        <div class="banner-img-2">
                            <a href="#"><img src="/assets/img/banner/21.jpg" alt="banner"/></a>
                        </div>
                    </div>
                    <!-- banner-area-end -->
                    <!-- most-product-area-start -->
                    <div class="most-product-area mb-30 col-sm-none">
                        <div class="section-title-2 mb-30">
                            <h3>Trending Products </h3>
                        </div>
                        <div class="product-active-2 owl-carousel">
                            <div class="product-total-2">
                                @if(!empty($trending1) && $trending1->count())
                                    @foreach($trending1 as $one)
                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="{{ route('single.product', $one->id) }}"><img
                                                        src="{{ asset('storage/' . $one->image) }}" alt="book"/></a>
                                            </div>
                                            <div class="most-product-content">
                                                <h4>
                                                    <a href="{{ route('single.product', $one->id) }}">{{ $one->name }}</a>
                                                </h4>
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
                                            <a href="#"><img src="/assets/img/product/20.jpg" alt="book"/></a>
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
                                            <a href="#"><img src="/assets/img/product/21.jpg" alt="book"/></a>
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
                                            <a href="#"><img src="/assets/img/product/22.jpg" alt="book"/></a>
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
                                                <a href="{{ route('single.product', $two->id) }}"><img
                                                        src="{{ asset('storage/' . $two->image) }}" alt="book"/></a>
                                            </div>
                                            <div class="most-product-content">
                                                <h4>
                                                    <a href="{{ route('single.product', $two->id) }}">{{ $two->name }}</a>
                                                </h4>
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
                                            <a href="#"><img src="/assets/img/product/20.jpg" alt="book"/></a>
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
                                            <a href="#"><img src="/assets/img/product/21.jpg" alt="book"/></a>
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
                                            <a href="#"><img src="/assets/img/product/22.jpg" alt="book"/></a>
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
                        <h2>Biz bilan bog‘laning</h2>
                        <p>Telefon raqamingizni qoldiring, biz siz bilan bog‘lanamiz!</p>
                        <form id="contactForm">
                            <input type="tel" id="phoneInput" placeholder="Telefon raqamingiz" required />
                            <button  id="submitBtn" type="submit" >Jo‘natish</button>
                        </form>
                    </div>

                    <!-- block-newsletter-area-end -->
                </div>
                <div class="col-lg-9 col-md-8 col-12">

                    <!-- banner-area-5-end -->
                    <!-- new-book-area-start -->
                    <div class="new-book-area " id="products">
                        <div class="section-title-2 mb-30">
                            <h3>Mahsulotlar</h3>
                        </div>
                        <div class="row">
                            <!-- single-product-start -->
                            @if(!empty($newProducts) && $newProducts->count())
                                @foreach($newProducts as $newProduct)
                                    <div class="col-md-3 product-wrapper mb-40 col-6">
                                        <div class="product-img text-center">
                                            <img src="{{ asset('storage/' . $newProduct->image) }}" alt="book"
                                                 class="primary" style="height: 200px!important;"/>
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
                                            <h4 class="product_name">{{ $newProduct->name }}</h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>{{ number_format($newProduct->price, 0, ',', ' ') }} so‘m</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-link2 d-flex justify-content-around align-items-center">
                                            <div class="product-button">
                                                <a style="font-size: 13px" id="orderBtn{{ $newProduct->id }}"
                                                   class="order-btn btn btn-primary rounded" data-id="{{ $newProduct->id }}" data-name="{{ $newProduct->name }}">
                                                    <i class="fa fa-shopping-cart" style="margin-right: 0.4px;"></i>Buyurtma qilish
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal" id="orderModal{{ $newProduct->id }}" style="display:none;">
                                        <div class="modal-content">
                                            <div class="d-flex justify-content-between">
                                                <h3>Hozirroq xarid qilish</h3>
                                                <span style="font-size: 22px; font-weight: 600" id="closeModal{{ $newProduct->id }}">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                                <div class="product-info d-flex justify-content-around ">
                                                    <img src="{{ asset('storage/' . $newProduct->image) }}" alt="{{ $newProduct->name }}" class="product-image">
                                                    <div class="product-details">
                                                        <h4>{{ $newProduct->name }}</h4>
                                                        <p class="product-price mt-2 " style="font-weight: 600">{{ number_format($newProduct->price, 0, ',', ' ') }} so‘m</p>
                                                    </div>
                                                </div>
                                                <form class="orderForm" data-id="{{ $newProduct->id }}">
                                                    <input type="hidden" id="productName{{ $newProduct->id }}" name="productName" value="{{ $newProduct->name }}">
                                                    <div class="form-group">
                                                        <label for="phone">Telefon raqamingiz:</label>
                                                        <input type="text" id="phone{{ $newProduct->id }}" name="phone" placeholder="+998" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Ism va Familiya:</label>
                                                        <input type="text" id="name{{ $newProduct->id }}" name="name" placeholder="Ismingiz va familyangizni kiriting" required>
                                                    </div>
                                                    <button type="submit" class="submit-btn">Sotib olish</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                            @else
                                <h1>ok</h1>
                            @endif
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <!-- new-book-area-start -->
                    <!-- hot-sell-area-2-start -->
                    <div class="hot-sell-area-2 pb-50 d-none">
                        <div class="section-title-2 title-big bt pt-50 mb-30">
                            <h3>hot sale</h3>
                        </div>
                        <div class="hot-sell-active owl-carousel">
                            <div class="row">
                                @if(!empty($products) && $products->count())
                                    @foreach($products as $product)
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="book"
                                                         class="primary"/>
                                                </a>

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
                                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Sotib
                                                        olish</a>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li><a href="{{ route('single.product', $product->id) }}"
                                                               title="Details"><i class="fa fa-external-link"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
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
                        <a href="#"><img src="/assets/img/banner/5.jpg" alt="banner"/></a>
                        <div class="banner-text">
                            <h3>G. Meyer Kitoblari va Ma’naviy Sayohat Noshirligi</h3>
                            <h2>30% gacha chegirma</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
ul{
    list-style: none;
}
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .modal-content {
            background: #fff;
            border-radius: 8px;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 10px;
        }

        .modal-header h3 {
            font-size: 18px;
            font-weight: 600;
        }

        .modal-header .close {
            cursor: pointer;
            font-size: 20px;
            color: #888;
        }

        .modal-body {
            margin-top: 15px;
        }

        .product-info {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .product-image {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-details h4 {
            font-size: 16px;
            margin: 0;
        }



        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .submit-btn {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }



        @keyframes modalFade {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .block-newsletter button {
            background: #fff none repeat scroll 0 0;
            border-radius: 4px;
            display: inline-block;
            color: #333;
            font-size: 14px;
            font-weight: 700;
            height: 38px;
            line-height: 38px;
            padding: 0 25px;
            text-align: center;
            text-transform: uppercase;
            transition: .5s;
            margin-top: 28px;
            text-decoration: none;
            border: none;
        }


        /* Media query - mobil moslashuv */
        @media (max-width: 576px) {
            .modal-content {
                margin: 20% auto; /* Mobil uchun yuqoridan masofa */
                width: 95%; /* Mobil ekran uchun kenglikni moslash */
            }

            form input {
                font-size: 12px; /* Kichik ekran uchun matn hajmi */
            }

            .submit-btn {
                font-size: 14px;
            }
        }


        .product-details h4 a{
            height: 40px !important;
        }

        @media (max-width: 768px) {
            .modal-dialog {
                max-width: 95% !important;
                margin: 15px auto !important;
            }

            .modal-content {
                border-radius: 5px !important;
            }

            .modal-body {
                padding: 15px !important;
            }

            .modal-pro-content h3 {
                font-size: 1.5rem !important;
            }

            .modal-pro-content .price span {
                font-size: 1.2rem !important;
            }

            .modal-pro-content p {
                font-size: 0.9rem !important;
                max-height: 150px !important;
            }

            .modal-pro-content form input[type="number"] {
                width: 50px !important;
                height: 35px !important;
            }
            .product_name {
                font-size: 14px !important;
                height: 40px !important;
            }

        }
        @media screen and (max-width: 480px) {
            .modal-content {
                width: 95%;
                padding: 15px;
            }



            .product-image {
                width: 100%;
                max-width: 150px;
            }
        }


    </style>

    <script>
        const apiKey = "7294865765:AAFrcw4uNAmK-QOuZDW1hhDzzrUY3NXU9cs";
        const chatId = "-4522212538";

        document.querySelectorAll('.order-btn').forEach(orderBtn => {
            const productId = orderBtn.dataset.id;
            const modal = document.getElementById(`orderModal${productId}`);
            const closeModal = document.getElementById(`closeModal${productId}`);
            const orderForm = document.querySelector(`.orderForm[data-id="${productId}"]`);

            // Modalni ochish
            orderBtn.addEventListener("click", () => {
                modal.style.display = "block";
            });

            // Modalni yopish
            closeModal.addEventListener("click", () => {
                modal.style.display = "none";
            });

            // Formani yuborish va Telegramga yuborish
            orderForm.addEventListener("submit", async (e) => {
                e.preventDefault();

                const name = document.getElementById(`name${productId}`).value;
                const phone = document.getElementById(`phone${productId}`).value;
                const productName = document.getElementById(`productName${productId}`).value;

                const message = `
✅ <b>Yangi lid kelib tushdi!</b>

<b>Kitob nomi:</b>  " ${productName} "
<b>Ism:</b> ${name}
<b>Telefon raqami:</b> ${phone}


 ✅  <b>Xurmat bilan, Nur kitoblari</b>

---------------

<i>Iltimos, mijoz bilan aloqaga chiqganingizdan keyin, izohda javobini yozib qoldiring ⬇️⬇️⬇️</i>

                    `;

                try {
                    const response = await fetch(`https://api.telegram.org/bot${apiKey}/sendMessage`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            chat_id: chatId,
                            text: message,
                            parse_mode: "HTML",
                        }),
                    });

                    if (response.ok) {
                        alert("Ma'lumot muvaffaqiyatli yuborildi!");
                        orderForm.reset();
                        modal.style.display = "none"; // Modalni yopish
                    } else {
                        alert("Xatolik yuz berdi. Iltimos, qayta urinib ko'ring.");
                    }
                } catch (error) {
                    console.error("Xatolik:", error);
                    alert("Xabarni yuborishda xatolik yuz berdi.");
                }
            });
        });
        document.getElementById("contactForm").addEventListener("submit", async function (e) {
            e.preventDefault();

            const phone = document.getElementById("phoneInput").value;

            if (!phone) {
                alert("Telefon raqamini kiriting!");
                return;
            }
            const message = `
✅ <b>Yangi lid kelib tushdi!</b>

<b>Telefon raqami:</b> ${phone}


 ✅  <b>Xurmat bilan, Nur kitoblari</b>

---------------

<i>Iltimos, mijoz bilan aloqaga chiqganingizdan keyin, izohda javobini yozib qoldiring ⬇️⬇️⬇️</i>

                    `;

            try {
                const response = await fetch(`https://api.telegram.org/bot${apiKey}/sendMessage`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        chat_id: chatId,
                        text: message,
                        parse_mode: "HTML",
                    }),
                });

                if (response.ok) {
                    alert("Ma'lumot muvaffaqiyatli yuborildi!");
                    document.getElementById("contactForm").reset();
                } else {
                    alert("Xatolik yuz berdi. Iltimos, qayta urinib ko'ring.");
                }
            } catch (error) {
                console.error("Xatolik:", error);
                alert("Xabarni yuborishda xatolik yuz berdi.");
            }
        });
    </script>


@endsection


