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
	<title>Entrepreneurship Cell | KIIT University</title>
	<meta name="keywords" content="Ecell, KIIT, Ecell KIIT, Entrepreneurship, KIIT Jobs" />
	<meta name="description" content="E-cell is a platform which explores
	the corporate behaviour within you. It doesn't only make you imagine innovation but also makes you
	a good crisis manager and a good show maker.">
	<meta name="author" content="kodexlabs.com">
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

	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
	<script>
		var OneSignal = window.OneSignal || [];
		OneSignal.push(["init", {
			appId: "98fc8ccf-d217-40f4-bc1f-d607bc48bfd1",
			autoRegister: false,
			notifyButton: {
				enable: true,
				position: 'bottom-left',
				colors: { 
	  'circle.background': 'blue',
      'circle.foreground': 'white',
      'badge.background': 'rgb(84,110,123)',
      'badge.foreground': 'white',
      'badge.bordercolor': 'white',
      'pulse.color': 'white',
      'dialog.button.background.hovering': 'rgb(77, 101, 113)',
      'dialog.button.background.active': 'rgb(70, 92, 103)',
      'dialog.button.background': 'rgb(84,110,123)',
      'dialog.button.foreground': 'white'
    }
			}
		}]);
	</script>
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">
	<link rel="stylesheet" href="css/theme-animate.css">
	<link rel="stylesheet" href="css/skins/default.css">
	<script src="vendor/modernizr/modernizr.js"></script>
	<?php include_once("php/ga.php") ?>

<script type="text/javascript"> //<![CDATA[ 
	var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
	document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>


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
										<a href="/"><i class="fa fa-angle-right"></i> Home</a>
									</li>
									<li>
										<span class="ws-nowrap"><i class="fa fa-phone"></i>+91-9583785500</span>
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
										<li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCvfLONcdrYLvzXndMlOIRYw/" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="active">
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
														<li><a href="team">The Ecell Team</a></li>
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
			<div class="slider-container rev_slider_wrapper">
				<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
					<ul>
						<li data-transition="fade">
							<img src="assets/images/slides/slide-bg.jpg"
							alt=""
							data-bgposition="center center"
							data-bgfit="cover"
							data-bgrepeat="no-repeat"
							class="rev-slidebg">
							<div class="tp-caption"
							data-x="177"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption top-label"
							data-x="250"
							data-y="180"
							data-start="500"
							data-transform_in="y:[-300%];opacity:0;s:500;">For those who are</div>
							<div class="tp-caption"
							data-x="480"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption main-label"
							data-x="135"
							data-y="210"
							data-start="1500"
							data-whitespace="nowrap"
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							data-mask_in="x:0px;y:0px;">Risk takers</div>
							<div class="tp-caption bottom-label"
							data-x="185"
							data-y="280"
							data-start="2000"
							data-transform_in="y:[100%];opacity:0;s:500;">We are there to help you.</div>
							<div class="tp-caption"
							data-x="910"
							data-y="248"
							data-start="2500"
							data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="assets/images/slides/slide-concept-2-1.png" alt=""></div>
							<div class="tp-caption"
							data-x="960"
							data-y="200"
							data-start="3500"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-2.png" alt=""></div>
							<div class="tp-caption"
							data-x="930"
							data-y="170"
							data-start="3650"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-3.png" alt=""></div>
							<div class="tp-caption"
							data-x="880"
							data-y="130"
							data-start="3750"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-4.png" alt=""></div>
							<div class="tp-caption"
							data-x="610"
							data-y="80"
							data-start="3950"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-5.png" alt=""></div>
							<div class="tp-caption blackboard-text"
							data-x="640"
							data-y="300"
							data-start="3950"
							style="font-size: 37px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Think</div>
							<div class="tp-caption blackboard-text"
							data-x="665"
							data-y="350"
							data-start="4150"
							style="font-size: 47px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>
							<div class="tp-caption blackboard-text"
							data-x="690"
							data-y="400"
							data-start="4350"
							style="font-size: 32px;"
							data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>
						</li>

						<li data-transition="fade">
							<img src="assets/images/slides/slide-bg.jpg"
							alt=""
							data-bgposition="center center"
							data-bgfit="cover"
							data-bgrepeat="no-repeat"
							class="rev-slidebg">
							<div class="tp-caption"
							data-x="177"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[-300%];opacity:0;s:500;"><img src="assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption top-label"
							data-x="250"
							data-y="180"
							data-start="500"
							data-transform_in="y:[-300%];opacity:0;s:500;">For those who are</div>
							<div class="tp-caption"
							data-x="480"
							data-y="180"
							data-start="1000"
							data-transform_in="x:[300%];opacity:0;s:500;"><img src="assets/images/slides/slide-title-border.png" alt=""></div>
							<div class="tp-caption main-label"
							data-x="135"
							data-y="210"
							data-start="1500"
							data-whitespace="nowrap"
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							data-mask_in="x:0px;y:0px;">Risk takers</div>
							<div class="tp-caption bottom-label"
							data-x="185"
							data-y="280"
							data-start="2000"
							data-transform_in="y:[100%];opacity:0;s:500;">We are there to help you.</div>
							<div class="tp-caption"
							data-x="910"
							data-y="248"
							data-start="2500"
							data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1300;"><img src="assets/images/slides/slide-concept-2-1.png" alt=""></div>
							<div class="tp-caption"
							data-x="960"
							data-y="200"
							data-start="3500"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-2.png" alt=""></div>
							<div class="tp-caption"
							data-x="930"
							data-y="170"
							data-start="3650"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-3.png" alt=""></div>
							<div class="tp-caption"
							data-x="880"
							data-y="130"
							data-start="3750"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-4.png" alt=""></div>
							<div class="tp-caption"
							data-x="610"
							data-y="80"
							data-start="3950"
							data-transform_in="y:[300%];opacity:0;s:300;"><img src="assets/images/slides/slide-concept-2-5.png" alt=""></div>
							<div class="tp-caption blackboard-text"
							data-x="640"
							data-y="300"
							data-start="3950"
							style="font-size: 37px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Think</div>
							<div class="tp-caption blackboard-text"
							data-x="665"
							data-y="350"
							data-start="4150"
							style="font-size: 47px;"
							data-transform_in="y:[300%];opacity:0;s:300;">Outside</div>
							<div class="tp-caption blackboard-text"
							data-x="690"
							data-y="400"
							data-start="4350"
							style="font-size: 32px;"
							data-transform_in="y:[300%];opacity:0;s:300;">The box :)</div>
						</li>
					</ul>
				</div>
			</div>
			<br>
			<div class="container">
				<div class="row center">
					<div class="col-md-12">
						<h1 class="mb-sm word-rotator-title">
							<strong>
								<span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
									<span class="word-rotate-items">
										<span>Imagine</span>
										<span>Innovate</span>
										<span>Implement</span>
									</strong>

								</h1>
								<p class="lead">
									The Entrepreneurship Cell, KIIT firmly believes that emerging economies like India need the drive and innovation of young entrepreneurs.
								</p>
							</div>
						</div>

					</div>

					<div class="home-concept">
						<div class="container">

							<div class="row center">
								<span class="sun"></span>
								<span class="cloud"></span>
								<div class="col-md-2 col-md-offset-1">
									<div class="process-image appear-animation" data-appear-animation="bounceIn">
										<img src="assets/images/imagine-concept.png" alt="" />
										<strong>Imagine</strong>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
										<img src="assets/images/innovate-concept.png" alt="" />
										<strong>Innovate</strong>
									</div>
								</div>
								<div class="col-md-2">
									<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
										<img src="assets/images/implement-concept.png" alt="" />
										<strong>Implement</strong>
									</div>
								</div>
								<div class="col-md-4 col-md-offset-1">
									<div class="project-image">
										<div id="fcSlideshow" class="fc-slideshow">
											<ul class="fc-slides">
												<li><a href="portfolio-single-project.html"><img width="320px" height="320px" class="img-responsive" src="assets/images/logo.png" alt="" /></a></li>
												<li><a href="portfolio-single-project.html"><img width="320px" height="320px" class="img-responsive" src="assets/images/logo.png" alt="" /></a></li>
												<li><a href="portfolio-single-project.html"><img width="320px" height="320px" class="img-responsive" src="assets/images/logo.png" alt="" /></a></li>
											</ul>
										</div>
										<strong class="our-work">Ecell</strong>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="container">

						<div class="row">
							<hr class="tall">
						</div>

					</div>

					<div class="container">
						<section class="call-to-action featured featured-secondary mb-xl">
							<div class="call-to-action-content">
								<img src="assets/tbi/thumb5.jpg" class="img-responsive" style="width:100px;height:100px" align="left"><h3>Introducing <strong>Nidhi Prayas</strong> a KIIT TBI initiative to support the <strong>Innovators</strong> by providing
								prototyping grant along with facility for the development of POC/ready product. 

							</h3>

							<p> Registrations are open.</p>

						</div>
						<div class="call-to-action-btn">
							<a href="tbi-initiatives#prayas" class="btn btn-lg btn-default">Apply Now!</a>
						</div>
					</section>
					<div class="container">

						<div class="row">
							<hr class="tall">
						</div>

					</div>
					<div class="row">
						<div class="col-md-8">
							<h2>Our <strong>Organization</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Director's Wing</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Tech Labs</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-google-plus"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Research and Development Wing</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>

								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-adjust"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Corporate Relations</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Public Relations</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-user"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Human Resources</h4>
											<p class="tall">&nbsp;</p>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<h2>Upcoming</h2>

							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fa fa-graduation-cap"></i>
												E-School
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											E School is a interactive curriculum on Entrepreneurship and Business Development. Its a 34-36 hours certified course. FREE OF COST ! It aims at inculcating the knowledge of opening and establishing your own startup and real time difficulties related to it currently being faced in India.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fa fa-laptopinfo-circle"></i>
												EAC
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											Join us in the next Entrepreneurship Awareness Camp this Saturday and Sunday to take a quick dive into the world of entrepreneurship along with an industrial visit to OPTCL on Sunday at 2:00 pm. All participants will be provided a certificate.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-briefcase"></i>
												Internship Camp
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											Hear. Conceptualize | Read. Analyze | Prepare. Intern
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-laptop"></i>
												Workshops and Others...
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											Coming Soon.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="tall">

					<div class="row center">
						<div class="col-md-6">
							<h2 class="mb-sm word-rotator-title">
								<strong>
									<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
										<span class="word-rotate-items col-md-6">
											<span>Do not be embarrassed by your failures, learn from them and start again.</span>
											<span>Innovation distinguishes between a leader and a follower.</span>
										</span>
									</span>
								</strong>
							</h2>
						</div>
					</div>



				</div>

				<section class="section section-custom-map">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts mb-xl">
										<h2>Latest <strong>Blog</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="day">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">VIRAL MARKETING TECHNIQUES FOR STARTUP COMPANIES</a></h4>
															<p>Being an entrepreneur requires great optimism, and a very strong belief in ...<a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="day">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">Social entrepreneurship – Popular but confusing</a></h4>
															<p>Recent study reveals while 3 quarter people support social entrepreneurship... <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">12</span>
																<span class="day">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">Flipkart&#39;s Outrageous Hires from the Silicon V...</a></h4>
															<p>&nbsp; &nbsp; <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">Corporate Social Responsibility</a></h4>
															<p>A form of corporate social-regulation integrated into a business model. CSR is titled to aid an organization’s ... <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">Grabig - Experience to Profit</a></h4>
															<p>&nbsp; &nbsp;<a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="https://blog.ecell.org.in" target="_blank">E-Hangouts Session with Mr. Rajeev Roy</a></h4>
															<p>Mr Rajeev Roy, Faculty, Entrepreneurship and International Management, Loyola University, Baltimore ,United States ,...<a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2>What Our<strong>Alumni</strong> Say</h2>
									<div class="row">
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>E-cell is a platform which explores the corporate behavior within you. It doesn't only make you imagine innovation but also makes you a good crisis manager and a good show maker.Being the alumnus I proudly look forward to cater all sort of help and assistance at any point to this very entrepreneurship cell</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/100000493504226/picture?width=50&height=50" alt="tutu">
																</div>
																<p><strong>Ashesh Das</strong><span>CEO,2015</span></p>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>We at KIIT E-Cell have developed and deployed the best of the methods to inculcate the habit of community learning which enhances self development. E-Cell is an institution where you get complete resources environment and motivation to have a test run of your startup or either being a part of one. We believe in inculcating skills for life. </p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/1014040806/picture?width=50&height=50" alt="tutu">
																</div>
																<p><strong>Aayush Tuteja</strong><span>CEO,2016</span></p>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div class="col-md-12">
														<div class="testimonial testimonial-primary">
															<blockquote>
																<p>The concept of community learning in Entrepreneurship Cell, KIIT is behind its people's success. Not only students but startups and mentors from diverse dominion have been a part of the organization working towards that one emotion of problem-solving and hence making the entrepreneurial ecosystem better. At an individual level, this organization has provided me with a broader aspect to problem-solving and taught me how to look at a problem with all possible perspectives. I'm glad to be a part of it.</p>
															</blockquote>
															<div class="testimonial-arrow-down"></div>
															<div class="testimonial-author">
																<div class="testimonial-author-thumbnail img-thumbnail">
																	<img src="https://graph.facebook.com/100000772382696/picture?width=50&height=50" alt="GD">
																</div>
																<p><strong>Gaurab Das</strong><span>Program Head,2016</span></p>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</section>
					</section>
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
										<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:ceo@ecell.org.in">ceo@ecell.org.in</a></p></li>
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
									<br /><br />
									<script language="JavaScript" type="text/javascript">
												TrustLogo("https://ecell.org.in/comodo_secure_seal_113x59_transp.png", "CL1", "none");
											</script>
											<a  href="https://ssl.comodo.com" id="comodoTL">SSL Certificates</a>
										
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

				<script src="vendor/jquery/jquery.js"></script>
				<script src="js/add_newsletter.js"></script>
				<script src="vendor/jquery.appear/jquery.appear.js"></script>
				<script src="vendor/jquery.easing/jquery.easing.js"></script>
				<script src="bootstrap/js/bootstrap.js"></script>
				<script src="vendor/common/common.js"></script>
				<script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
				<script src="vendor/isotope/jquery.isotope.js"></script>
				<script src="vendor/owl.carousel/owl.carousel.js"></script>

				<script src="js/theme.js"></script>

				<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
				<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
				<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
				<script src="js/views/view.home.js"></script>

				<script src="js/theme.init.js"></script>


			</body>
			</html>
