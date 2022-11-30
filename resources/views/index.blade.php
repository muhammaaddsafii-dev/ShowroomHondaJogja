<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="HVAC Template" />
    <meta name="keywords" content="HVAC, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SHJ | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />

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
            <a href="/index"><img src="{{ asset('/img/logo.png') }}" alt="" /></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li>
                <i class="fa fa-map-marker"></i>
                Magelang St No.7,5, Jongke Tengah, Sendangadi, Mlati, Sleman, DIY
            </li>
            <li>
                <i class="fa fa-envelope-o"></i>
                showroomhondajogja@gmail.com
            </li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+62) 857 4399 7226</span>
        </div>
        <div class="offcanvas__social">
            <a href="https://wa.wizard.id/a5a146"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/ryanhondajogja/"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
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
                                <a href="https://wa.wizard.id/a5a146"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://www.instagram.com/ryanhondajogja/"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
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
                                <li class="active"><a href="/index">Home</a></li>
                                <li>
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

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>SELAMAT DATANG DI</span>
                            <h2>Showroom Honda Jogja</h2>
                        </div>
                        <a href="/car" class="primary-btn">
                            Cek Informasi Mobil
                        </a>
                        <a href="https://wa.wizard.id/a5a146" class="primary-btn more-btn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Feature Section Begin -->
    <section class="feature spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature__text">
                        <div class="section-title">
                            <span>Selamat Datang di Website SHJ</span>
                            <h2>Showroom Honda Jogja</h2>
                        </div>
                        <div class="feature__text__desc">
                            <p>
                                Selamat Datang di website kami, website ini bernaung di bawah PT. Anugerah Sejahtera
                                Putera (Honda
                                Anugerah).
                                Saat ini layanan PT. Anugerah Sejahtera Putera (Honda Anugerah) adalah 3S, yaitu Sales,
                                Service, dan
                                Spare
                                Part. Dengan stock unit terlengkap dan terbesar di area Yogyakarta.
                            </p>
                            <p>
                                Kami selalu memberikan pelayanan penjualan terbaik dengan pilihan type terlengkap pada
                                Showroom kami.
                                Sedangkan pada layanan purna jual, kami selalu memberikan pelayanan dengan teknisi
                                berpengalaman dan
                                terbaik untuk service kendaraan anda secara berkala maupun General Repair. Dan dengan
                                dukungan dari
                                Honda Prospect Motor, kami selalu menyediakan dan memberi jaminan original spare part
                                pada kendaraan
                                Honda anda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-1.png') }}" alt="" />
                                </div>
                                <h6>Engine</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-2.png') }}" alt="" />
                                </div>
                                <h6>Turbo</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-3.png') }}" alt="" />
                                </div>
                                <h6>Colling</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-4.png') }}" alt="" />
                                </div>
                                <h6>Suspension</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-5.png') }}" alt="" />
                                </div>
                                <h6>Electrical</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="feature__item">
                                <div class="feature__item__icon">
                                    <img src="{{ asset('/img/feature/feature-6.png') }}" alt="" />
                                </div>
                                <h6>Brakes</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>SHOWROOM HONDA JOGJA PRODUCT</span>
                        <h2>Our Cars</h2>
                    </div>
                </div>
            </div>
            <div class="row" style="background: white;">
                <div class="col-lg-4 col-md-6">
                    <div class="latest__blog__item">
                        <div class="latest__blog__item__pic set-bg" data-setbg="img/latest-blog/lb-1.jpg">
                            <ul>
                                <li style="background: #ffc107; color: black;">Rp.150 jt</li>
                                <li>MT</li>
                                <li>Type S</li>
                            </ul>
                        </div>
                        <div class="latest__blog__item__text">
                            <h5>Brio</h5>
                            <a href="/car" class="primary-btn">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest__blog__item">
                        <div class="latest__blog__item__pic set-bg" data-setbg="img/latest-blog/lb-3.jpg">
                            <ul>
                                <li style="background: #ffc107; color: black;">Rp.270 jt</li>
                                <li>MT</li>
                                <li>Type S</li>
                            </ul>
                        </div>
                        <div class="latest__blog__item__text">
                            <h5>BRV</h5>
                            <a href="/car" class="primary-btn">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest__blog__item">
                        <div class="latest__blog__item__pic set-bg" data-setbg="img/latest-blog/lb-2.jpg">
                            <ul>
                                <li style="background: #ffc107; color: black;">Rp.340 jt</li>
                                <li>MT</li>
                                <li>Type 1.5 S</li>
                            </ul>
                        </div>
                        <div class="latest__blog__item__text">
                            <h5>HRV</h5>
                            <a href="/car" class="primary-btn">Lihat Produk</a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>HONDA ANUGRAH YOGYAKARTA OFFER SERVICES</span>
                        <h2> Car Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('/img/services/services-2.png') }}" alt="" />
                        <h5>Buying A Cars</h5>
                        <p>
                            Penjualan Unit baru Mobil Honda terlengkap di Yogyakarta.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('/img/services/services-3.png') }}" alt="" />
                        <h5>Service</h5>
                        <p>
                            Service Berkala Kendaraan Honda anda di bengkel resmi kami.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('/img/services/services-1.png') }}" alt="" />
                        <h5>Spare Part</h5>
                        <p>
                            Kami menjamin suku cadang pada bengkel kami selalu Original.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="{{ asset('/img/services/services-4.png') }}" alt="" />
                        <h5>Body Paint & Repair</h5>
                        <p>
                            Kami juga melayani perbaikan Body dan Cat Mobil anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>Keistimewaan Showroom Honda Jogja</h2>
                        </div>
                        <ul>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Pusat jual beli mobil (new/seccond) Honda terlengkap di Yogyakarta.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Menjujung tinggi integritas pelayanan, kualitas produk dan kepuasan pelanggan.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Pelayanan konsumen 24 jam.
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Menjamin kepuasan pelanggan dengan produk yang berkualitas dan harga spesial.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="{{ asset('/img/chooseus-video.png') }}" alt="" />
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Cta Begin -->
    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-2.jpg">
                        <h4>Showroom Honda Jogja</h4>
                        <p>
                            Pusat Informasi Mobil Honda di Yogyakrata terpercaya, tepat dan akurat. Informasi harga,
                            promo, kredit dan
                            cicilan hubungi nomor tertera.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="cta__item set-bg" data-setbg="img/cta/cta-1.jpg">
                        <h4>Honda Lovers</h4>
                        <p>
                            Honda memberikan garansi pada kendaraan anda apabila terdapat cacat material atau kesalahan
                            dari hasil
                            kerja pabrik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta End -->
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
                <input type="text" id="search-input" placeholder="Search here....." />
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
