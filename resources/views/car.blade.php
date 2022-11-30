<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHJ | Cars</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/elegant-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <style>
        div.ini-fixed {
            position: fixed;
            width: 500%;
            bottom: 30px;
            left: 30px;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="/index"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Magelang St No.7,5, Jongke Tengah, Sendangadi, Mlati, Sleman, DIY
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+62) 857 4399 7226</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/index"><img src="{{ asset('/img/logo.png') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="/index">Home</a></li>
                                <li class="active">
                                    <a href="#">Product</a>
                                    <ul class="dropdown">
                                        <li><a href="/car">Mobil Honda</a></li>
                                        <li><a href="/spesifikasi">Spesifikasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="/price">Price</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Mobil Honda</h2>
                        <div class="breadcrumb__links">
                            <a href="/index"><i class="fa fa-home"></i> Home</a>
                            <span>Mobil Honda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Section Begin -->
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>SHOWROOM HONDA JOGJA PRODUCT</span>
                        <h2>Our Cars</h2>
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All Product</li>
                        <li data-filter=".sale">Best Saller</li>
                    </ul>
                </div>
            </div>
            <div class="row car-filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/Brio1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Brio2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Brio3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Brio4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda Brio </a></h5>
                                <ul>
                                    <li>
                                        <span>1120</span>
                                        cc
                                    </li>
                                    <li>90ps/6000 rpm</li>
                                    <li>
                                        <span>4</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>
                                    Rp.150 - 200
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/Mobilio1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Mobilio2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Mobilio3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Mobilio4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda Mobilio</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>118/6.600 rpm</li>
                                    <li>
                                        <span>6</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.190-250
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/BRV1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/BRV2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/BRV3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/BRV4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda BRV</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>120/6.600 rpm</li>
                                    <li>
                                        <span>6</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.270-340
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/HRV1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/HRV2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/HRV3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/HRV4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda HR-V</a></h5>
                                <ul>
                                    <li>
                                        <span>1.800</span>
                                        cc
                                    </li>
                                    <li>140/6.500 rpm</li>
                                    <li>
                                        <span>5</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>
                                    Rp.340-440
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/CRV1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/CRV2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/CRV3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/CRV4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda CR-V</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>190/5.600 rpm</li>
                                    <li>
                                        <span>6</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.500-660
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/city1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/city2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/city3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/city4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda City Hatchback</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>120/6.600 rpm</li>
                                    <li>
                                        <span>4</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>Rp.340
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/civichb1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civichb2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civichb3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civichb4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda Civic Hatchback</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>173/5.500 rpm</li>
                                    <li>
                                        <span>5</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.510
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix ">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/civic1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civic2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civic3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civic4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">All New Honda Civic RS </a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>178/6.000 rpm</li>
                                    <li>
                                        <span>5</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.577
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/NewCity1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/NewCity2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/NewCity3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/NewCity4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">All New Honda City</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>120/6.600 rpm</li>
                                    <li>
                                        <span>4</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.361
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/Acord1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Acord2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Acord3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/Acord4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">All New Honda Accord</a></h5>
                                <ul>
                                    <li>
                                        <span>1.500</span>
                                        cc
                                    </li>
                                    <li>190/5.500 rpm</li>
                                    <li>
                                        <span>5</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>Rp. 760
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/odsey1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/odsey2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/odsey3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/odsey4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda Odyssey</a></h5>
                                <ul>
                                    <li>
                                        <span>2.300</span>
                                        mi
                                    </li>
                                    <li>173/6.200</li>
                                    <li>
                                        <span>7</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Sale</span>
                                <h6>
                                    Rp.900
                                    <span>Jt</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="{{ asset('/img/cars/Mobil/civicr1.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civicr2.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civicr3.jpg') }}" alt="" />
                            <img src="{{ asset('/img/cars/Mobil/civicr4.jpg') }}" alt="" />
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <h5><a href="/price">Honda Civic R</a></h5>
                                <ul>
                                    <li>
                                        <span>2.000</span>
                                        cc
                                    </li>
                                    <li>310/6.500 rpm</li>
                                    <li>
                                        <span>4</span>
                                        Seat
                                    </li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option sale">For Sale</span>
                                <h6>
                                    Rp. 1.18
                                    <span>M</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Car Section End -->
    <div class="ini-fixed">
        <a class="faicon-phone" href="https://wa.wizard.id/a5a146" style="color:#57e902"><i
                class="fa fa-phone fa-2x">
            </i></a>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item">
                                <i class="fa fa-phone"></i>
                                (+62) 857 4399 7226
                            </div>
                            <div class="option__item email">
                                <i class="fa fa-envelope-o"></i>
                                showroomhondajogja@gmail.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('/img/footer-logo.png') }}" alt="" /></a>
                        </div>
                        <p>
                            Magelang St No.7,5, Jongke Tengah, Sendangadi, Mlati, Sleman, DIY
                        </p>
                        <div class="footer__social">
                            <a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Pembelian
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Cicilan
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Pembayaran
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Promo $ Diskon
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <h5>Top Product</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Civic
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Accord
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Odysey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__brand">
                        <h5>Produk</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Brio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Mobilio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda BR-V
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Jazz
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda HR-V
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda City NIK
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda Civic
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    Honda CRV
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="footer__copyright__text">
                <p style="color: white; text-align: center;">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Showroom Honda Jogja |
                    <a href="#" target="_blank"><b>SHJ</b></a>
                </p>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
