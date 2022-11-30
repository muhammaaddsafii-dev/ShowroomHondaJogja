<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHJ | About</title>

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
                                <li>
                                    <a href="#">Product</a>
                                    <ul class="dropdown">
                                        <li><a href="/car">Mobil Honda</a></li>
                                        <li><a href="/spesifikasi">Spesifikasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="/price">Price</a></li>
                                <li class="active"><a href="/about">About</a></li>
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
                        <h2>Tentang Kami</h2>
                        <div class="breadcrumb__links">
                            <a href="/index"><i class="fa fa-home"></i> Home</a>
                            <span>Tentang Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- About Us Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title about-title">
                        <h2>Selamat Datang <br />Showroom Honda Jogja</h2>
                        <p>Pusat informasi mobil honda di Yogyakarta dengan 3 layanan utama Sales, Service, dan Spare
                            Part. Kami
                            menjujung tinggi kualitas pelayanan hingga menjamin terciptanya kepercayaan dan kebahagiaan
                            sahabat Honda
                        </p>
                    </div>
                </div>
            </div>
            <div class="about__feature">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('/img/about/af-1.png') }}" alt="">
                            <h5>Integritas Pelayanan</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('/img/about/af-3.png') }}" alt="">
                            <h5>Kualitas Produk</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <img src="{{ asset('/img/about/af-2.png') }}" alt="">
                            <h5>Kepuasan Pelanggan</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('/img/about/about-pic.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__item">
                        <h5>Our Mission</h5>
                        <p>
                            “<i>Creating Satisfied Buying Experience Honda Vehicles at PT. Anugerah Sejahtera Putera
                                (Honda
                                Anugerah)</i>",
                            dimana para konsumen Honda Lovers akan merasakan kepuasan, kenyamanan dan kebahagiaan dari
                            proses
                            pembelian kendaraan sampai perawatan kendaraan secara berkala.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="about__item">
                        <h5>Our Vision</h5>
                        <p>
                            1. Melakukan kinerja internal organisasi dan sistem yang ada dengan maksimal.
                        </p>
                        <p>
                            2. Peningkatan kinerja dan kualitas SDM Honda Anugrah yang tetap berorientasi utama pada
                            kepuasan
                            pelanggan <i>(Customer Satisfaction) </i>di setiap layanan Sales, Service, dan Spare parts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Clients Begin -->
    <div class="clients spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title client-title">
                        <span>SALES HONDA ANUGRAH YOGYAKARTA</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="#" class="client__item">
                        <img src="{{ asset('/img/SALES.jpeg') }}" style="width: 150px;" height="240px"
                            alt="">
                    </a>
                    <div class="team__item__text">
                        <h5>Aditya Ryan Atma Ardany</h5>
                        <span>Sales</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients End -->

    <!-- Counter Begin -->
    <div class="counter spad set-bg" data-setbg="img/counter-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <strong>+</strong>
                        <h2 class="counter-num">9</h2>
                        <strong>th</strong>
                        <p>Experience</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <strong>+</strong>
                        <h2 class="counter-num">700</h2>
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team-title">
                        <span>Dokumentasi Pembelian</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t1.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t2.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t3.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t4.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t5.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{ asset('/img/about/t6.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
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
