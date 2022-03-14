<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BLOG-1</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style>
        * {
            box-sizing: border-box !important;
            transition: ease all 0.5s;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: #666666;
            font-size: 14px;
            font-family: 'Raleway', sans-serif;
            ;
            line-height: 1.80857;
            font-weight: normal;
            overflow-x: hidden;
        }

        a {
            color: #1f1f1f;
            text-decoration: none !important;
            outline: none !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            letter-spacing: 0;
            font-weight: normal;
            position: relative;
            padding: 0 0 10px 0;
            font-weight: normal;
            line-height: normal;
            color: #111111;
            margin: 0
        }

        h1 {
            font-size: 24px
        }

        h2 {
            font-size: 22px
        }

        h3 {
            font-size: 18px
        }

        h4 {
            font-size: 16px
        }

        h5 {
            font-size: 14px
        }

        h6 {
            font-size: 13px
        }

        *,
        *::after,
        *::before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
            color: #212121;
            text-decoration: none !important;
            opacity: 1
        }

        button:focus {
            outline: none;
        }

        ul,
        li,
        ol {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }

        p {
            margin: 20px;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
        }

        a {
            color: #ffffff;
            text-decoration: none;
            outline: none !important;
        }

        .header_main {
            width: 100%;
            float: left;
            background-image: url(../images/header.png);
            height: auto;
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .logo {
            width: 100%;
            float: left;
            text-align: center;
            margin-top: 55px;
        }

        .header {
            width: 100%;
            width: 100%;
            float: left;
            background-color: #072833;
            padding-bottom: 10px;
            padding-top: 10px;
        }


        .header_main {
            width: 100%;
            float: left;
            background-image: url(../images/header.png);
            height: auto;
            padding-bottom: 20px;
        }

        .banner-main {
            width: 100%;
            float: left;
            background-image: url(../images/banner.png);
            height: auto;
            padding-top: 20px;
            padding-bottom: 226px;
            background-size: cover;
        }

        .last {
            padding-top: 10px;
            padding-left: 40px;
        }

        .titlepage-h1 {
            width: 100%;
            float: left;
            margin: 0 auto;
            text-align: center;
        }

        .bnner_title {
            font-size: 46pt;
            color: #ffffff;
            padding-top: 70px;
            font-family: 'Raleway', sans-serif;
            ;
        }


        .long_text {
            font-size: 14pt;
            color: #ffffff;
            padding-bottom: 30px;
        }

        .btn_main {
            width: 40%;
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 60px;
            padding-left: 0;
            color: #fff;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .navbar-nav.mr-auto {
            width: 100%;
            margin: 0;
            display: block;
        }

        .navbar-nav.mr-auto li {
            float: left;
        }

        .navbar-nav.mr-auto li.last {
            float: right;
        }

        .navbar-light .navbar-nav .active>.nav-link {
            color: #23bbfb;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #23bbfb;
        }

        .bg-light {
            background-color: none;
        }

        .services_main {
            width: 100%;
            float: left;
            background-color: #ffffff;
            height: auto;
            padding-bottom: 30px;
            padding-top: 30px;
        }

        .creative_taital {
            width: 100%;
            float: left;
            background-color: #ffffff;
            height: auto;
            padding-bottom: 30px;
            padding-top: 30px;
            box-shadow: 0px 0px 10px 0px;
            color: black;
            margin-top: -110px;
            margin-bottom: 50px;
        }

        .creative_text {
            color: #050000;
            font-size: 22pt;
            text-align: center;
            border-bottom: 1px solid #000;
            width: 46%;
            margin: 0 auto;
            text-align: center;
            font-weight: bold;

        }

        .section_service_2 {
            width: 100%;
            float: left;

        }

        .service_text {
            color: #050000;
            font-size: 22pt;
            text-align: center;
            border-bottom: 1px solid #000;
            width: 22%;
            margin: 0 auto;
            font-weight: bold;
        }

        .service_main {
            width: 100%;
            float: left;
            margin-top: 30px;
        }

        .written_text {
            width: 100%;
            float: left;
            background-color: #072833;
            height: auto;
            padding: 20px;
        }

        .written_text {
            width: 100%;
            float: left;
            color: #ffffff;
            margin-top: 20px;
        }

        .like_icon {
            padding-left: 20px;
            min-height: 50px;
        }

        .quote_section {
            width: 100%;
            float: left;
            background-color: #076787;
            height: auto;
            padding: 20px;
            font-weight: bold;
        }

        .quote_text {
            color: #ffffff;
            width: 100%;
            float: left;
        }

        .loan_text {
            color: #ffffff;
            width: 100%;
            float: left;
            margin: 0px;

        }

        .quote_btn {
            width: 80%;
            margin: 0 auto;
            text-align: center;
            margin-top: 20px;
        }


        .touch_section {
            width: 100%;
            padding-top: 57px;
            margin-bottom: 47px;
            display: inline-block !important;
        }

        .touch_text {
            width: 27%;
            margin: 0 auto;
            text-align: center;
            border-bottom: 1px solid #000;
            color: #050000;
            font-size: 22pt;
            font-weight: bold;

        }

        .lets_touch_main {
            width: 100%;
            float: left;
            background-color: #072833;
            padding-top: 40px;
            padding-bottom: 40PX;
        }

        .input_main {
            width: 100%;
            float: left;
            background-color: #ffffff;
            padding: 40px 20px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #072833;
            background-clip: padding-box;
            border: 1px solid #072833;
            border-radius: 0px;
            border: 0px;
        }

        .send_btn {
            padding-left: 15px;
        }

        .lorem_text {
            width: 100%;
            float: left;
            color: #ffffff;
            font-size: 17px;
            line-height: 35px;
            padding-top: 80px;
        }

        .contact_main {
            width: 100%;
            float: left;
            background-color: #ffffff;
            padding-top: 40px;
        }

        .contact_section_2 {
            width: 50%;
            margin: 0 auto;
            display: block;
            padding-top: 40px;
        }

        .map_icon {
            width: 100%;
            float: left;
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .copyright {
            width: 100%;
            float: left;
            background-color: #076787;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .copyright_text {
            width: 100%;
            float: left;
            color: #fbfdfd;
            text-align: center;
            margin: 0px;
        }

        .email-text {
            width: 100%;
            float: left;
            color: #3ac3f0;
        }

        .email-text a {
            text-decoration: none;
            color: #333;
        }

        .email-text a:hover {
            color: #000;
        }

        .copyright_text a:hover,
        .copyright_text a:focus {
            color: #fff;
        }

        button.main_bt {
            background: #ce4109;
            border: none;
            color: #fff;
            width: 150px;
            height: 50px;
            border-radius: 5px;
            font-size: 22px;
        }

        .email-bt {
            background: #072833;
            border: none;
            color: #fff;
            width: 100%;
            height: 55px;
            font-size: 22px;
            padding: 20px;


        }

        .massage-bt {
            background: #072833;
            border: none;
            color: #fff;
            width: 100%;
            height: 145px;
            font-size: 22px;
            padding: 20px;


        }

        .button.navbar-toggler.collapsed {
            background: #fff;
        }

        .navbar-toggler:not(:disabled):not(.disabled) {
            cursor: pointer;
            background-color: #fff;
            padding: 10px 20px;
        }

        .about_main {
            width: 100%;
            float: left;
            margin-top: 130px;
        }

        .section_service_main {
            width: 100%;
            float: left;
            padding-top: 30px;
            padding-bottom: 30px;

        }

        .contact_main {
            width: 100%;
            float: left;
            padding-top: 30px;

        }

        .blog_main {
            width: 100%;
            float: left;
        }

        .blog_text {
            width: 100%;
            float: left;
            font-size: 34px;
            color: #000;
            text-align: center;
            font-weight: bold;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .blog_section_2 {
            width: 100%;
            float: left;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .section_1 {
            width: 100%;
            float: left;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px;
        }

        .date-bt {
            background: #072833;
            border: none;
            color: #fff;
            width: 110px;
            height: 35px;
            font-size: 12px;
            margin-top: -35px;
            font-weight: 500;
            float: left;
            max-width: 100%;
            clear: both;
            position: relative;
        }

        .about_page .creative_taital {
            width: 100%;
            float: left;
            background-color: #ffffff;
            height: auto;
            padding-bottom: 30px;
            padding-top: 30px;
            color: #e7e7e7;
            margin-top: -100px;
            margin-bottom: 50px;
            box-shadow: none;
        }

        /** arrow css **/

        #main_slider a.carousel-control-prev {
            position: absolute;
            left: 82px;
            bottom: 10px;
            top: inherit;
        }

        #main_slider a.carousel-control-prev {
            position: absolute;
            top: 40% !important;
            left: 17px !important;
            width: 70px;
            height: 70px;
            border-radius: 35px;
        }

        #main_slider .carousel-control-prev,
        #main_slider .carousel-control-next {
            width: 62px;
            height: 60px;
            background: #fffdfd;
            opacity: 1;
            font-size: 30px;
            color: #000;
        }

        #main_slider .carousel-control-prev,
        #main_slider .carousel-control-next {
            width: 62px;
            height: 60px;
            background: #fffdfd;
            opacity: 1;
            font-size: 30px;
            color: #000;
            border-radius: 35px;
            top: 40% !important;
        }

        #main_slider .carousel-control-prev:hover,
        #main_slider .carousel-control-next:hover,
        #main_slider .carousel-control-prev:focus,
        #main_slider .carousel-control-next:focus {
            background: #10b5fa;
            color: #fff;

        }
    </style>
</head>
<!-- body -->

<body>
    <div class="header_main">
        <div class="container">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
        </div>
    </div>
    </div>
    <div class="header">
        <div class="container">
            <!--  header inner -->
            <!-- header section start -->
            <div class="header_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
                        </div>
                        <div class="col-sm-9">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-item nav-link" href="index.php">Home</a>
                                        <a class="nav-item nav-link" href="products.php">Products</a>
                                        <a class="nav-item nav-link" href="blogs.php">Blogs</a>
                                        <a class="nav-item nav-link" href="aboutus.php">About Us</a>
                                        <a class="nav-item nav-link" href="contact.php">Contact</a>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="banner_section">
                    <div class="container-fluid">
                        <section class="slide-wrapper">
                            <div class="container-fluid">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>


                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end header end -->
    <!--banner start -->
    <div class="banner-main">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="titlepage-h1">
                            <h1 class="bnner_title">Welcome To<br>
                                <span style="color: #10b5fa">Content Writing Services</span>
                            </h1>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking </p>
                        </div>
                        <div class="btn_main">
                            <button type="button" class="btn btn-dark btn-lg"><a href="contact.html">Contact</a></button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="titlepage-h1">
                            <h1 class="bnner_title">Welcome To<br>
                                <span style="color: #10b5fa">Content Writing Services</span>
                            </h1>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking </p>
                        </div>
                        <div class="btn_main">
                            <button type="button" class="btn btn-dark btn-lg">Contact</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="titlepage-h1">
                            <h1 class="bnner_title">Welcome To<br>
                                <span style="color: #10b5fa">Content Writing Services</span>
                            </h1>
                            <p class="long_text">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking </p>
                        </div>
                        <div class="btn_main">
                            <button type="button" class="btn btn-dark btn-lg">Contact</button>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!--banner end -->
    <!--services start -->
    <div class="services_main">
        <div class="container">
            <div class="creative_taital">
                <h1 class="creative_text"><?php
                $id=11;
                define('DB_SERVER', 'localhost');
                define('DB_USERNAME', 'root');
                define('DB_PASSWORD', '');
                define('DB_NAME', 'eshop');
                
                
                $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT title FROM blogs WHERE id =".$id;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                         echo "<span>" .$row["title"] ."</span>";
                    }
                   
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?></h1>







                <?php
                $id=11;
                // define('DB_SERVER', 'localhost');
                // define('DB_USERNAME', 'root');
                // define('DB_PASSWORD', '');
                // define('DB_NAME', 'eshop');
                
                
                $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT description FROM blogs WHERE id =".$id;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                         echo "<p>" .$row["description"] ."</p>";
                    }
                   
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>




            </div>

        </div>
    </div>
    <!--services end -->
    <!-- section footer start -->
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div><a href="#"><img src="images/footer-logo.png"></a></div>
                    </div>
                    <!-- <div class="col-sm-6 col-lg-2">
						<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div> -->
                    <!-- </div> -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">TuitionsTonight@gmail.com</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/in-icon.png"></a></li>
                                <li><a href="#"><img src="images/google-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum
                            dolor sit amet,</p>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">Address </h2>
                        <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet
                                15/2 NewYork City, NY, United States.</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Our Company </h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Delivery</li>
                                <li>Legal Notice</li>
                                <li>About us</li>
                                <li>Secure payment</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h2 class="adderess_text">Products</h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Prices drop</li>
                                <li>New products</li>
                                <li>Best sales</li>
                                <li>Contact us</li>
                                <li>Sitemap</li>
                                <li><a href="admin.php">Admin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h2 class="adderess_text">Newsletter</h2>
                        <div class="form-group">
                            <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                        </div>
                        <button class="subscribr_bt">Subscribe</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Javascript files-->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });


                    $('#myCarousel').carousel({
                        interval: false
                    });

                    //scroll slides on swipe for touch enabled devices

                    $("#myCarousel").on("touchstart", function(event) {

                        var yClick = event.originalEvent.touches[0].pageY;
                        $(this).one("touchmove", function(event) {

                            var yMove = event.originalEvent.touches[0].pageY;
                            if (Math.floor(yClick - yMove) > 1) {
                                $(".carousel").carousel('next');
                            } else if (Math.floor(yClick - yMove) < -1) {
                                $(".carousel").carousel('prev');
                            }
                        });
                        $(".carousel").on("touchend", function() {
                            $(this).off("touchmove");
                        });
                    });
    </script>


</body>

</html>