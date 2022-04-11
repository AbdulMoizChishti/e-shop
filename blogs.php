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
	<title>BLOG</title>
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
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
					<div class="container-fluid">
						
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- New Arrivals section start -->
	<div class="collection_text">Blogs</div>
	<div class="collection_section layout_padding">
		<div class="container">
			<h1 class="new_text"><strong>New Arrivals Playlist</strong></h1>
			<p class="consectetur_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
		</div>
	</div>
	<div class="layout_padding gallery_section">
		<div class="container">
			<div class="row">
				<?php
				require_once "config.php";
				$product_array = ("SELECT * FROM blog ORDER BY id ASC");
				$query1 = mysqli_query($connection, $product_array);
				if (!empty($query1)) {
					foreach ($query1 as $key => $value) {
				?>
						<div class="col-sm-4">


							<div class="best_shoes">
								<p class="best_text">Best Shoes </p>
								<div class="shoes_icon">

									<?php
									// Include the database configuration file  
									require_once 'config.php';
									$r = $connection->query("SELECT image FROM images");
									while ($row = $r->fetch_assoc()) {
										static	$a = 8;

										// Get image data from database 
										$result = $connection->query("SELECT image FROM images where id =" . $a);
									}

									echo $a;
									?>

									<?php if ($result->num_rows > 0) { ?>
										<div class="gallery">
											<?php
											while ($row = $result->fetch_assoc()) {
												// echo $a;
											?>
												<a href="blog-1.php?link=<?php echo $a; ?>"><img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /></a>
											<?php
												$a++;
											}


											?>
										</div>
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
				<?php
					}
				}
				?>

			</div>

		</div>

	</div>
	</div>
	<!-- New Arrivals section end -->
	



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