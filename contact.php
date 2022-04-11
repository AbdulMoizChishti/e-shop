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
    <title>Contact </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
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
                                <a class="nav-item nav-link" href="playlist.php">Playlist</a>
                                <a class="nav-item nav-link" href="blogs.php">Blogs</a>
                                <a class="nav-item nav-link" href="aboutus.php">About Us</a>
                                <a class="nav-item nav-link" href="contact.php">Contact</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- contact section start -->
        <div class="collection_text">Contact Us</div>
        <div class="layout_padding contact_section">
            <div class="container">
                <h1 class="new_text"><strong>Contact Now</strong></h1>
            </div>
            <div class="container-fluid ram">
                <div class="row">
                    <div class="col-md-6">
                        <div class="email_box">
                            <div class="input_main">
                                <div class="container">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="Name" name="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="email-bt" placeholder="E-mail" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="email-bt" placeholder="deadline" name="deadline">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="massage-bt" placeholder="Project Description" rows="5" id="comment" name="Prpjectdescription"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <p>Please select your Category:</p>
                                              <input type="radio" id="html" name="fav_language" value="HTML">
                                              <label for="html">University Project</label><br>
                                              <input type="radio" id="css" name="fav_language" value="CSS">
                                              <label for="css">Commercial Project</label><br>


                                        </div>
                                    </form>
                                </div>
                                <div class="send_btn">
                                    <button class="main_bt">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shop_banner">
                            <div class="our_shop">
                                <button class="out_shop_bt">Our Shop</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact section end -->
        

    <!-- Javascript files-->
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
        })
    </script>
</body>

</html>