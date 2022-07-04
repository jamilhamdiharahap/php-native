<?php

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="./public/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/themify-icons.css">
    <link rel="stylesheet" href="./public/css/nice-select.css">
    <link rel="stylesheet" href="./public/css/flaticon.css">
    <link rel="stylesheet" href="./public/css/gijgo.css">
    <link rel="stylesheet" href="./public/css/animate.css">
    <link rel="stylesheet" href="./public/css/slick.css">
    <link rel="stylesheet" href="./public/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="./public/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="./public/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="https://mail.google.com/mail/u/0/#inbox"> <i class="fa fa-envelope"></i>jamilhamdihrp@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i>+6282294672578</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="btn btn-default btn-rounded mb-4" href="../../PROJEKANPHP/login.php" style="border: 1px solid;border-radius:30px;padding:6px 13px 6px ">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="./index.php">Home</a></li>
                                            <li><a href="#">Cari<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="service_details.html">Lacak Paket</a></li>
                                                    <li><a href="./cekTarip.php">Cek Tarif</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="service.html">Layanan</a></li>
                                            <li><a href="#">Informasi<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Lacak Paket</a></li>
                                                    <li><a href="single-blog.html">Cek Tarif</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Tentang<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Lacak Paket</a></li>
                                                    <li><a href="#">Cek Tarif</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Login modal -->

    <!-- Modal HTML -->
    <!-- <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form action="" id="login" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control" required="required">

                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>Password</label>
                                <a href="#" class="float-right text-muted"><small>Forgot?</small></a>
                            </div>
                            <input type="password" id="pass" name="pass" class="form-control" required="required" onclick="">
                            <i class="fas fa-eye-slash"></i>
                            <input type="checkbox" name="" id="show"> Show Password
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <label class="form-check-label">
                            <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->



    <!-- header-end -->

    <!-- slider_area_start -->

    <!-- slider_area_end -->

    <!-- <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/airplane.png" alt="">
                        </div>
                        <h3>Transportation</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/live.png" alt="">
                        </div>
                        <h3>Live Monitoring</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                        <div class="icon">
                            <img src="img/svg_icon/world.png" alt="">
                        </div>
                        <h3>Worldwide Service</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/2.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Land Transport</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/3.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Air Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="service_details.html">Ocean Freight</a></h3>
                                <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- contact_action_area  -->
    <!-- <div class="contact_action_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                        <h3>100% secure and safe</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing drawing.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /contact_action_area  -->
    <!-- chose_area  -->
    <!-- <div class="chose_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="about_image">
                            <img src="img/about/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="features_info">
                            <h3>Why Choose Us?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.
                            </p>
                            <ul>
                                <li> Apartments frequently or motionless. </li>
                                <li> Duis aute irure dolor in reprehenderit in voluptate. </li>
                                <li> Voluptatem quia voluptas sit aspernatur.</li>
                            </ul>

                            <div class="about_btn">
                                <a class="boxed-btn3-line" href="about.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ chose_area  -->

    <!-- counter_area  -->
    <!-- <div class="counter_area">
        <div class="container">
            <div class="offcan_bg">
                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">42</span> <span>+</span> </h3>
                            <p>Countries Covered</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">97</span> <span>+</span> </h3>
                            <p>Business Success</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">2342</span></h3>
                            <p>Happy Client</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">3245</span></h3>
                            <p>Business Done</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <!-- <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin.
                                    Pellentesque id dolor tempor sapien feugiat ultrices.</p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /testimonial_area  -->

    <!-- Estimate_area start  -->
    <!-- <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
                        <a href="#" class="boxed-btn3">+10 672 457 356</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product type">Product type</option>
                                            <option value="1">small</option>
                                            <option value="2">standard</option>
                                            <option value="3">high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product size">Product size</option>
                                            <option value="1">M</option>
                                            <option value="2">L</option>
                                            <option value="3">Xl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="1">departure</option>
                                            <option value="2">departure</option>
                                            <option value="3">departure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Delivery city">City of departure</option>
                                            <option value="1">Delivery</option>
                                            <option value="2">Delivery</option>
                                            <option value="3">Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Estimate_area end  -->

    <!-- contact_location  -->
    <!-- <div class="contact_location">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                        <p>600/D, Kings road, Green lane
                            NewYork-2563</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                        <h3> <img src="img/icon/support.svg" alt=""> Location</h3>
                        <p>+10 267 3563 4562 <br>
                            support@logistico.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--/ contact_location  -->


    <!-- footer start -->

    <!--/ footer end  -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <input type="text" placeholder="search">
                    <button type="submit">search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="./public/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./public/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/isotope.pkgd.min.js"></script>
    <script src="./public/js/ajax-form.js"></script>
    <script src="./public/js/waypoints.min.js"></script>
    <script src="./public/js/jquery.counterup.min.js"></script>
    <script src="./public/js/imagesloaded.pkgd.min.js"></script>
    <script src="./public/js/scrollIt.js"></script>
    <script src="./public/js/jquery.scrollUp.min.js"></script>
    <script src="./public/js/wow.min.js"></script>
    <script src="./public/js/nice-select.min.js"></script>
    <script src="./public/js/jquery.slicknav.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="./public/js/slick.min.js"></script>



    <!--contact js-->
    <script src="./public/js/contact.js"></script>
    <script src="./public/js/jquery.ajaxchimp.min.js"></script>
    <script src="./public/js/jquery.form.js"></script>
    <script src="./public/js/jquery.validate.min.js"></script>
    <script src="./public/js/mail-script.js"></script>


    <script src="./public/js/main.js"></script>




</body>

</html>