<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nur kitoblari</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="/assets/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="/assets/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/assets/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
    /* Logotip uchun umumiy stil */
    .logo {
        font-family: 'Arial', sans-serif; /* Zamonaviy shrift */
        font-size: 24px; /* Katta o'lcham */
        font-weight: bold; /* Qalin yozuv */
        text-decoration: none; /* Pastki chiziqni olib tashlash */
        color: #fff; /* Matn uchun oq rang */
        padding: 10px 20px; /* Ichki bo'shliq */
        border: 2px solid #006f91; /* Tashqi ramka */
        border-radius: 10px; /* Dumaloq burchaklar */
        background: linear-gradient(135deg, #00abe0, #006f91); /* Gradient fon */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Yumshoq soyabon */
        transition: all 0.3s ease; /* Effektlar uchun yumshoq o‘tish */
        display: inline-block; /* Ichki blok ko'rinish */
        text-align: center; /* Matnni markazga joylash */
    }

    /* Hover effekti */
    .logo:hover {
        background: linear-gradient(135deg, #006f91, #00abe0); /* Ranglarni almashtirish */
        color: #f1f1f1; /* Matnni biroz yorqinroq oq rangga o‘zgartirish */
        transform: scale(1.1); /* Kattalashtirish */
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.2); /* Kuchliroq soyabon */
    }

    /* Mobil qurilmalar uchun dizayn */
    @media (max-width: 768px) {
        .logo {
            font-size: 18px; /* Kichikroq shrift */
            padding: 8px 15px; /* Ichki bo‘shliqni kamaytirish */
            border-radius: 8px; /* Dumaloqlikni moslashtirish */
        }
    }

    @media (max-width: 480px) {
        .logo {
            font-size: 16px; /* Yana kichikroq shrift */
            padding: 6px 12px; /* Ichki bo‘shliqni yanada kamaytirish */
            border-radius: 5px; /* Dumaloqlikni kichraytirish */
        }
    }



</style>

<body class="home-4">

<x-frontend.header></x-frontend.header>

@yield('content')

<x-frontend.footer></x-frontend.footer>

<!-- all js here -->
<!-- jquery latest version -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>


<!-- bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/assets/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="/assets/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="/assets/js/wow.min.js"></script>
<!-- jquery.parallax-1.1.3.js -->
<script src="/assets/js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countdown.min.js -->
<script src="/assets/js/jquery.countdown.min.js"></script>
<!-- jquery.flexslider.js -->
<script src="/assets/js/jquery.flexslider.js"></script>
<!-- chosen.jquery.min.js -->
<script src="/assets/js/chosen.jquery.min.js"></script>
<!-- jquery.counterup.min.js -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<!-- waypoints.min.js -->
<script src="/assets/js/waypoints.min.js"></script>
<!-- plugins js -->
<script src="/assets/js/plugins.js"></script>
<!-- main js -->
<script src="/assets/js/main.js"></script>
</body>

</html>
