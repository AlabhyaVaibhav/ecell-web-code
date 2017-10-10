<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--Original Title- Hail Hydra!-->
		<title>Initiatives  - Ecell | KIIT University</title>	

		<link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

        <?php include_once("php/ga.php") ?>
		
	</head>
	<body>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="/">
										<img alt="Ecell" width="100" height="100" data-sticky-width="50" data-sticky-height="50" data-sticky-top="50" src="assets/images/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">

									<div class="header-search hidden-xs">
										<form id="searchForm" action="page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">	
										<li class="hidden-xs">
												<a href="#"><i class="fa fa-angle-right"></i>Initiatives</a>
											</li>										
											<li class="hidden-xs">
												<a href="/"><i class="fa fa-angle-right"></i>Home</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i>+91-7749995976</span>
											</li>
										</ul>
									</nav>
								
								<div class="header-row">
									<div class="header-nav header-nav-top-line">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="https://www.youtube.com/channel/UCvfLONcdrYLvzXndMlOIRYw/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
												<li>
														<a href="/">Home</a>
													</li>
													<li>
													<a href="joinEcell">Join Ecell</a>
												</li>
													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="#home">
															About Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us#whoweare">Who We Are?</a></li>
															<li><a href="about-us#mentors">Our Mentors</a></li>
														</ul>
													</li>
													<li class="dropdown active">
													<a data-hash class="dropdown-toggle" href="#home">
														Initiatives
													</a>
													<ul class="dropdown-menu">
														<li><a href="https://interncamp.ecell.org.in">Internship Camp</a></li>
														<li><a href="eschool">E-School</a></li>
														<li><a href="initiatives#wow">Women on Web (WoW)</a></li>
														<li><a href="initiatives#campuspreneur">Campuspreneur</a></li>
														<li><a href="initiatives#campuspreneur">Makers Lab</a></li>
														<li><a href="tbi-initiatives">TBI Initiatives</a></li>
													</ul>
												</li>
													<li class="dropdown">
														<a data-hash class="dropdown-toggle" href="#home">
															Partners
														</a>
														<ul class="dropdown-menu">
															<li><a href="partners#assoc">Associates</a></li>
															<li><a href="partners#spons">Sponsors</a></li>
														</ul>
													</li>
													<li>
														<a href="gallery">Gallery</a>
													</li>
													
													<li>
														<a href="http://blog.<?php echo $parent_url; ?>">Blog</a>
													</li>
													<li>
														<a href="contact-us">Contact Us</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				
				<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Initiatives</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Initiatives</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

			<div class="row">
						<div class="col-md-12" id="eschool">
							<h3 class="heading-primary mt-xl">Our <strong>Initiatives</strong></h3>
						</div>
					</div>
					<ul class="history">
						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb">
								<img src="assets/images/E-SCHOOL.jpg" alt="" />
							</div>
							<div class="featured-box">
								<div class="box-content" >
									<h5 class="heading-primary">
										<strong>
											E-School
										</strong>
									</h5>
									<p>
										E School is a interactive curriculum on Entrepreneurship and Business Development. Its a 34-36 hours certified course. FREE OF COST ! It aims at inculcating the knowledge of opening and establishing your own startup and real time difficulties related to it currently being faced in India. The objective of this stream is to provide comprehensive knowledge and develop competencies to start an independent business.
										<br /><br />
										<a href="https://ecell.org.in/eschool" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Main Page</a>
									</p>
								</div>
							</div>
						</li>
						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb"  id="internship_camp">
								<img src="assets/images/internshipcamp2016.png" alt="" />
							</div>
							<div class="featured-box" >
								<div class="box-content">
									<h5 class="heading-primary">
										<strong>Internship Camp
										</strong>
										</h5>
									<p>
										This Internship Camp will facilitate a symbiotic relationship between companies and the students of KIIT University. In this camp we focus on providing the best set of talents to the companies keeping in mind their requirements, simultaneously we offer students to bag internships in various domains. The Internship procedure consists of resume handling and analysis followed by student selection for the appropriate sectors and interview by the company officials. The internship durations are flexible and range from one month summer internship, two months summer internship and six month internships. This unique platform ensures that the students get the most out of the event (Internship Camp), in the form of Internships which can boost their CVs to another level. Simultaneously, the students also get to implement their knowledge in solving real life problems and gaining work experience.<br /><br />
									<a href="https://ecell.org.in/icamp" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Main Page</a>
									</p>
								</div>
							</div>
						</li>

						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb" id="wow">
								<img src="assets/images/wow.jpeg" alt=""/>
							</div>
							<div class="featured-box">
								<div class="box-content">
										<h5 class="heading-primary">
											<strong>WoW
											</strong>
										</h5>
									<p>
										Our motive is to engage with women in tech, raise them as a brand, launch an app, or change careers through connecting to Women Who Code in the global network.
									</p>
								</div>
							</div>
						</li>

						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb" id="campuspreneur">
								<img src="assets/images/campuspreneur.jpg" alt="" />
							</div>
							<div class="featured-box">
								<div class="box-content">
										<h5 class="heading-primary">
											<strong>
												Campuspreneur 2016
											</strong>
										</h5>
									<p>
We believe that we can increase the effectiveness and impact manifold when we have talented and motivated people working with us towards the same goal. Our CAMPUSPRENEUR Program is aimed at achieving the above goals.
									</p>
								</div>
							</div>
						</li>

					</ul>

				</div>
			</div>

		</div>


			</div>
 
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="javascript:return false" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="Email" id="Email" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "kiit_ecell", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 7B,Second Floor, TBI Biotech Campus,KIIT University, Bhubaneshwar.</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91-9583785500, +91-9861658537</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:kodexlabs@gmail.com">kodexlabs@gmail.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/kiitecell" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="https://twitter.com/kiit_ecell" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="https://www.youtube.com/channel/UCvfLONcdrYLvzXndMlOIRYw/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
							<a href="https://play.google.com/store/apps/details?id=com.kodexlabs.sparrow">
							<h5>Get Sparrow <img src="assets/images/sparrow_logo.png" width="50px" height="auto"><br /> Official E-Cell App</h5>
							<img src="assets/images/playstore.png" width="170px" height="auto"></a>
						</div>
					</div>
				</div>

				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="/" class="logo">
									<img alt="KIIT Ecell" class="img-responsive" style="width:30px; height:30px;" src="assets/images/logo_alt.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright 2017. All Rights Reserved. KIIT E-Cell, KIIT University</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="faq">FAQ's</a></li>
										<li><a href="sitemap.xml">Sitemap</a></li>
										<li><a href="contact-us">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>		
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<script src="js/add_newsletter.js"></script>	
	
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>	

	</body>
</html>