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
	<title>Playlist</title>
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
	</div>
	</div>
	<!-- header section end -->
	<!-- new collection section start -->
	<div class="collection_text">Playlist</div>
	<div class="layout_padding collection_section">
		<div class="container">
			<h1 class="new_text"><strong>New Playlist</strong></h1>
			<p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
			<div class="collection_section_2">
			<div class="row">

								<?php
								require_once "config.php";
								$product_array = ("SELECT * FROM playlist ORDER BY id ASC");
								$query1 = mysqli_query($connection, $product_array);
								if (!empty($query1)) {
								foreach ($query1 as $key => $value) {
								?>


			
					<div class="col-sm-4">
					<?php
								// Include the database configuration file  
								require_once 'config.php';
								$r = $connection->query("SELECT url FROM playlist");
								while ($rows = $r->fetch_assoc()) {
									static	$a = 1;

									// Get image data from database 
									$result = $connection->query("SELECT image FROM images where id =" . $a);

											if ($result == "Image(s) not found...") {
											$a++;
										}

										
											?>

					
						<div class="best_shoes">
						<?php if ($result->num_rows > 0) { ?>
												<?php
												while ($row = $result->fetch_assoc()) {
													// echo $a;
												?>
						
												<a target="blank" href="<?php echo $rows['url']; ?>" target="blank"><img width="370" height="315" src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"><b>JAVA TUTORIALS</b></a>
											<?php
													$a++;
												}
											}
										}
									}

									?>
									<?php
												} else {
											?>
										<p class="status error">Image(s) not found...</p>
												<?php
											}
										?>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- new collection section end -->


	<!-- section footer start -->
	<div class="section_footer">
		<div class="container">
			<div class="mail_section">
				<div class="row">
					<div class="col-sm-6 col-lg-2">
						<!-- <div><a href="#"><img src="images/footer-logo.png"></a></div> -->
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71)
								1234567890</span></div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
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
		</div>
	</div>
	</div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>



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