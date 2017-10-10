<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Original Title- Hail Hydra!-->
	<title>Ecell Recruitment</title>

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
	<script type="text/css">
	
	#progress-wrp {
    border: 1px solid #0099CC;
    padding: 1px;
    position: relative;
    border-radius: 3px;
    margin: 10px;
    text-align: left;
    background: #fff;
    box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
	}
	#progress-wrp .progress-bar{
    height: 20px;
    border-radius: 3px;
    background-color: #f39ac7;
    width: 0;
    box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
	}
	#progress-wrp .status{
    top:3px;
    left:50%;
    position:absolute;
    display:inline-block;
    color: #000000;
	}
	</script>
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
												<li class="dropdown">
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
								<li><a href="/">Home</a></li>
								<li><a href="#">Recruitment</a></li>
								<li class="active">2017</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>Join Ecell</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">			

			<div class="col-md-6">
			<img src="assets/images/regclosed.png" class="img-responsive img-rounded mb-lg">
			</div>
			<h6>
				Thank you for your interest in E-Cell. We have closed the registrations for now. Hope to see you next time.<br/></h6>
				Follow our <a href="https://ecell.org.in">website</a>,<a href="https://facebook.com/kiitecell">Facebook Page</a>,<a href="https://twitter.com/kiit_ecell">Twitter</a>, <a href="https://blog.ecell.org.in">Blog</a> and you can now even subscribe for Notifications.

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
								<img alt="KIIT Ecell" class="img-responsive" style="-webkit-filter:grayscale(100%); filter:grayscale(100%);width:30px; height:30px;" src="assets/images/logo_alt.jpg">
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
	<script src="stureg.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	<script src="js/add_newsletter.js"></script>

	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>
	<!--script type="text/javascript">
	$.ajax({
    url : post_url,
    type: "POST",
    data : form_data,
    contentType: false,
    cache: false,
    processData:false,
    xhr: function(){
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                
                $(progress_bar_id +" .progress-bar").css("width", + percent +"%");
                $(progress_bar_id + " .status").text(percent +"%");
            }, true);
        }
        return xhr;
    },
    mimeType:"multipart/form-data"
	}).done(function(res){ 
    $(my_form_id)[0].reset(); 
    $(result_output).html(res); 
    submit_btn.val("Upload").prop( "disabled", false); 
	});
	</script-->
</body>
</html>