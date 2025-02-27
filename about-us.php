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
	<title>About Us - Ecell | KIIT University</title>	
	
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
										<a href="#"><i class="fa fa-angle-right"></i>About Us</a>
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
												<li class="dropdown active">
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
								<li class="active">About Us</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				

				<div class="row">


				</div>

				<div class="row">
					<div class="col-md-12">
						<hr class="tall">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3 class="heading-primary"><strong>Who</strong> We Are</h3>
						<p>We believe that emerging economies like India need the drive of the new and young breed of worthy entrepreneurs who target their efforts on innovative ways to technologically address the genuine needs of millions of people.
							Motivated by this vision, Kiit E-Cell targets on fostering entrepreneurship culture amongst the students and establishing necessary support systems for aspiring entrepreneurs with the East India's largest inbuilt technology business incubator KIIT TBI. This is achieved through a number of activities such as Discussion forums, Speaker sessions, B-plan competitions, summer internships and webinars by eminent international personalities which provide the tools to create an implementable plan from an idea. We deeply encourage the self development of our members through the groundbreaking concept of E-School.
						</p>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						<hr class="tall">
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h3 class="heading-primary mt-xl" id="whoweare" >Our <strong>History</strong></h3>
					</div>
				</div>
				<div role="main" class="main">

					<div class="container">

						<div class="row">
							<div class="col-md-12">
								<div class="blog-posts">

									<section class="timeline">
										<div class="timeline-body">
											<div class="timeline-date">
												<h3 class="heading-primary">How It All Started</h3>
											</div>

											<article class="timeline-box left post post-medium">
												<div class="row">


												</div>
												<div class="row">
													<div class="col-md-12">

														<div class="post-content">
															<h4 class="heading-primary"><a href="blog-post.html">Jan 2012-Feb 2013</a></h4>
															<p>The Idea of establishing an entrepreneurship Cell inside KIIT University came into existence in the year 2012 after a few revolting students from different streams of engineering participated in one of the highly acknowledged events in the Startup world, The Entrepreneurship Summit, IIT Kharagpur. The visit initially meant only for learning purposes turned out to be a landmark event in establishing an Entrepreneurial Ecosystem inside the KIIT University. What initially was just a day dream became reality on 5 April 2013 when KIIT E-Cell organized its first session and opened the gates for the immensely talented students of the University. Since that day the KIIT E-Cell has been providing huge opportunities for the masses. KIIT E-Cell owes it all to those revolutionaries like Tanmay Dayal, Sreejit Bakshi, Mohit Dayal and Pratik Basu.</p>
														</div>

													</div>
												</div>

											</article>

											<article class="timeline-box right post post-medium">
												<div class="row">


												</div>
												<div class="row">
													<div class="col-md-12">

														<div class="post-content">
															<h4 class="heading-primary"><a href="blog-post.html">July 2014-Aug 2014</a></h4>
															<p>
																<h6 class="heading-primary">
																	<strong>
																		Pre-induction sessions
																	</strong>
																</h6>
																There were four pre-induction sessions starting from 12th july to 9th August. The first one was based on in demand skill of 'Digital Marketing' which is more affordable and quick advertising technique having longer shelf lives and are easier to attach to other campaigns. It gives the brand more time and space to tell its story. The second one being on 'Ideation' that uncovered the implicit knowledge and different perspectives on a situation. In addition to purging your mind , it is a fun way to find solutions and recovering enthusiasm in the team. Followed by a third session where the guests talked about an essential component in any business's success or failure i.e the 'Corporate culture'. It is the belief and behaviour that determine how a company's employees and management interact and handle outside business transactions. Followed by a fourth session by Google Business Group, Bhubaneswar. These were followed by a recruitment procedure for the new batch comprising of group discussion followed by a case study and personal interview in Sept 2014.
															</p>
														</div>

													</div>
												</div>

											</article>

											<article class="timeline-box left post post-medium">
												<div class="row">


												</div>
												<div class="row">
													<div class="col-md-12">

														<div class="post-content">
															<h4 class="heading-primary"><a href="blog-post.html">Oct 2014-Dec 2014</a></h4>
															<p><h6 class="heading-primary">
																<strong>
																	E-Chai "Lets meet up and catch up"
																</strong>
															</h6>
															It was an enthusiastic bunch of young minds with the experts from wide range of fields. Dr. Mrutyunjay Suar Sir, Founder Director of School of Biotechnology,KIIT and CEO, KIIT-TBI, prof. Kumar Mohanty,Dean CAAS, Prof Surya Narayan Mishra, PG program chairperson, school of management, ER. Devesh Rath, Project officer-Technology promotion,Kiit-TBI as the mentors and the founders of Insyst solutions, Autosports India, Maiestas Technologies pvt ltd. as the guests were present for this new 'regular meet up initiative'. There were professionals coding on php, java and many more freelancers, game developers, video and graphics developer. The event started with the introduction of the esteemed personalities followed by a panel discussion and then a real time networking session began for a long time where each one of them present there had a personal interaction. The uniqueness in echai is that anyone from a chai wala who earns profits with no business plan to a entrepreneur who earns profits with a unique business plan can attend this session with on-spot registration of 10.00 INR and we can know anything which leads a idea to a great success. This event was sponsored by cafe Italiano. 'Let me Dream' project was also initiated in this month which portrays the success story of women entrepreneurs who gave colours to their dreams.
														</p>
													</div>

												</div>
											</div>

										</article>

										<div class="timeline-date">
											<h3 class="heading-primary">Dec 2014</h3>
										</div>

										<article class="timeline-box left post post-medium">

											<div class="row">
												<div class="col-md-12">

													<div class="post-content">
														<h4 class="heading-primary"><a href="blog-post.html">
															<h6 class="heading-primary">
																<strong>
																	E-Hangout
																</strong>
															</h6>
														</a>
													</h4>
													<p>An E-Hangout session was conducted by entrepreneur Rajeev Roy who discussed upon 'Entrepreneurial culture in USA compared to India' highlighting the key pillars to build a successful enterprise environment viz. entrepreneurship culture, education and training, access to funding, regulation, taxation and coordinated support. This was followed by 'Perceptor's Expression' by mentors of WOW where they provided the attendees with live examples of how determination and hard work can change the lives of women. The women who have adored and supported us through the thick and thin of life were given a special mention through 'The Selfie Project' that was published in December.</p>
												</div>

											</div>
										</div>

									</article>

									<article class="timeline-box right post post-medium">
										<div class="row">

										</div>
										<div class="row">
											<div class="col-md-12">

												<div class="post-content">
													<h4 class="heading-primary"><a href="blog-post.html">Mid Dec 2014</a></h4>
													<p>
														<h6 class="heading-primary">
															<strong>
																EAC
															</strong>
														</h6>
														Entrepreneurship awareness camp is a three day workshop organised within the premises of the institution. It aims at developing entrepreneurial aptitude by bringing various recognized entrepreneurial leaders, ecell mentors, faculty and the young minds by discussing pertinent topics and issues involved with entrepreneurial initiatives. After two days of motivating lectures, business quizzes and personal interactions the last day is engaged for Industrial visit to organisations like OPTCL, Parle-G to name a few. Such camps were conducted regularly till the mid of march,2015. It was followed by a 'Kite Event' on the occasion of 'Makarsankranti' where messages and slogans were adored on the kites regarding women empowerment and flown high into the air. With an astounding participation, the event was covered by media and also turned several appreciative heads.
													</p>
												</div>

											</div>
										</div>

									</article>

									<article class="timeline-box left post-medium">
										<div class="row">

										</div>
										<div class="row">
											<div class="col-md-12">

												<div class="post-content">
													<h4 class="heading-primary"><a href="blog-post.html">13th Feb-15th Feb 2015</a></h4>
													<p>
														<h6 class="heading-primary">
															<strong>
																Business plan competitions
															</strong>
														</h6>
														EMBARK - B Plan competition is a three level game with first round where a case study is provided to the participants. By thorough analysis they need to make a rough business plan keeping the given criteria in mind. The second round i.e BI-Business intelligence round where selected teams were asked six important questions. The participants were cross-questioned on the given topics by the panelists. Finally the selected teams pitched their ideas in front of the panelists. 'Wolf of e street' is an event giving you a real experience of running a company with its super funxausting (fun+exhausting) modules. The prelims consisted of common sense along with business quiz questions. The finals were divided into 5 modules named Startup HR Operations Finance Marketing. The winners of both the games were awarded with handsome cash prizes along with a certificate.
													</p>
												</div>

											</div>
										</div>

									</article>

									<article class="timeline-box right post-medium">
										<div class="row">

										</div>
										<div class="row">
											<div class="col-md-12">

												<div class="post-content">
													<h4 class="heading-primary"><a href="blog-post.html">13th Mar-15th Mar 2015</a></h4>
													<p>
														<h6 class="heading-primary">
															<strong>
																E-Summit
															</strong>
														</h6>
														E-Summit was the Eastern India's largest business acquaintance to the youth with about 1000 participants from across the country. The event comprised of various workshops on marketing-commerce, business process and development and many more in addition to the panel discussions, hackathons, business quizzes and E-talks by best entrepreneurs and corporate people. Internship camp in esummit aimed at providing summer internships including the virtual internship opportunities to the attendees in start-ups. The session 2013-2014 was concluded by Ashesh Das, the coordinator of ECell on 21st March who believes that Imagination is the new knowledge.
													</p>
												</div>

											</div>
										</div>

									</article>

										<!--
										<div class="timeline-date">
											<h3 class="heading-primary">Load More ...</h3>
										</div>
									-->

								</div>

							</section>

						</div>
					</div>

				</div>

			</div>

		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h3 class="heading-primary mt-xl" id="mentors" >Our <strong>Mentors</strong></h3>
					</div>
				</div>
				<ul class="history">
					<li class="appear-animation" data-appear-animation="fadeInUp">
						<div class="thumb">
							<img src="https://ecell.org.in/assets/images/2017/mentors/Anil-Bajpai.jpg" alt="" />
						</div>
						<div class="featured-box">
							<div class="box-content">
								<h5 class="heading-primary">
									<strong>Anil Bajpai |
										Director, KIIT School Of Managment
									</strong>
								</h5>
								<p><strong>Mr. Bajpai</strong> has had a very enriching and rewarding corporate career spanning across two important sectors, semiconductors and telecom.
									He has worked with various companies – Vodafone Essar Spacetel Ltd. as Chief Operating Officer, Reliance Infocom Ltd. as CEO(Madhya Pradesh, Chattisgarh and Odisha), DSS Mobilink as Vice President(Operations), Airtel as General Manager (Sales, Marketing and Customer Care), Max Electronics as Deputy General Manager, Continental Device India Ltd. as Manager, Hindustan Motors Ltd. as Zonal Sales Manager, SB Billimoria & Co. as Consultant.</p>
								</div>
							</div>
						</li>
						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb">
								<img src="https://ecell.org.in/assets/images/2017/mentors/Mrutyunjay-Suar.jpg" alt="Mrutyunjay-Suar" />
							</div>
							<div class="featured-box">
								<div class="box-content">
									<h5 class="heading-primary">
										<strong>Dr. Mrutyunjay Suar |
											Director, KIIT TBI |
											Professor, KIIT School Of Biotechnology.
										</strong>
									</h5>
									<p><strong>Dr. Suar</strong> is the Chief Executive Officer of Technology Business Incubator at KIIT University (KIIT-TBI), which is promoting 23 start-ups in the field of ICT, Biotechnology and Engineering. Dr. Suar founded a start up company Enoveo Biosolutions Pvt. Ltd working on several aspects of Bioengineering solutions and providing specialized services in the area of genomics and proteomics. He was selected as a future young technical leader of India & was invited as a speaker to Steinem rhein symposium, Switzerland, September 2010. he was nominated and invited to attend the Global Entrepreneurship Leadership Symposium (GELS), November, 16-23, 2009, UC-Berkeley</p>
								</div>
							</div>
						</li>

						<li class="appear-animation" data-appear-animation="fadeInUp">
							<div class="thumb">
								<img src="https://ecell.org.in/assets/images/2017/mentors/Kumar-Mohanty.jpg" alt="Kumar-Mohanty"/>
							</div>
							<div class="featured-box">
								<div class="box-content">
									<h5 class="heading-primary">
										<strong>Kumar Mohanty |
											Dean, Career Advisory & Augmentation Services (CAAS)
										</strong>
									</h5>
									<p>
										<strong>
											Mr. Mohanty </strong>
											has more than 14 years of experience as a Marketing Manager with Nicco, then as Branch manager with Jenson and Nicholson and Finolex Cables as an AGM-Sales and as Business Head with IMS before joining KIIT.
										</p>
									</div>
								</div>
							</li>

							<li class="appear-animation" data-appear-animation="fadeInUp">
								<div class="thumb">
									<img src="https://ecell.org.in/assets/images/2017/mentors/Partho-Sengupta.png" alt="Partho-Sengupta" />
								</div>
								<div class="featured-box">
									<div class="box-content">
										<h5 class="heading-primary">
											<strong>Partho Sengupta |
												Professor, KIIT School Of Management
											</strong>
										</h5>
										<p>
											<strong>
												Mr. Sengupta </strong>
												is a Master Neuro-Linguistic Practitioner (NLP-Richard Bandler School, USA) and a practicing Management Consultant cum Trainer and a Corporate Advisor. He is also a Techno-Commercial Resource Person in the Energy Sector and has led Funded Projects of WB, DFID (UK), and ADB in Bangladesh, Bhutan & India directed at privatization. His recent management book “Principles & Practices of Management”, published by VIKAS Publishers (India) and launched from his Alma Mater-XLRI Business School on 20 th Nov 2011, exudes a set of distinctive styles that effectively connects with the potential energy of the “Y” Generation.
											</p>
										</div>
									</div>
								</li>
								<li class="appear-animation" data-appear-animation="fadeInUp">
									<div class="thumb">
										<img src="https://ecell.org.in/assets/images/2017/mentors/Surya-Mishra.jpg" alt="Surya-Mishra" />
									</div>
									<div class="featured-box">
										<div class="box-content">
											<h5 class="heading-primary"><strong>Dr. Surya Mishra |
												Asst. Professor, KIIT School Of Management</strong></h5>
												<p>
													Faculty Advisor for Corporate Engagement at KIIT University , Bhubaneswar. He is a marketing professional with combined experience in Brand Management, Sales and Channel Management and Management Education and Education Management.
												</p>
											</div>
										</div>
									</li>

									<li class="appear-animation" data-appear-animation="fadeInUp">
										<div class="thumb">
											<img src="https://ecell.org.in/assets/images/2017/mentors/Sucheta-Priyabadini.jpg" alt="Sucheta-Priyabadini" />
										</div>
										<div class="featured-box">
											<div class="box-content">
												<h5 class="heading-primary"><strong>Dr. Sucheta Priyabadini | Joint Registrar of KiiT University</strong></h5>
												<p>
													Dr. Sucheta Priyabadini is a noted Indian social scientist, writer, painter and educationist. She is known for her role in the field of Women Empowerment. 
												</p>
											</div>
										</div>
									</li>

									<li class="appear-animation" data-appear-animation="fadeInUp">
										<div class="thumb">
											<img src="https://ecell.org.in/assets/images/2017/mentors/Saranjit-Singh.jpg" alt="Saranjit-Singh" />
										</div>
										<div class="featured-box">
											<div class="box-content">
												<h5 class="heading-primary"><strong>Dr.Saranjit Singh | TNP Head KiiT University</strong></h5>
												<p>
													Dr. Saranjit Singh is alumnus and recipient of University Gold Medal from Punjab University, Chandigarh. He is a renowned academic, having almost 32 years of teaching and research experience. He is known for excellence in research, and is well recognized International expert in the areas of drug stability testing, degradation chemistry, impurity and metabolite profiling. 
												</p>
											</div>
										</div>
									</li>
									<li class="appear-animation" data-appear-animation="fadeInUp">
										<div class="thumb">
											<img src="https://ecell.org.in/assets/images/2017/mentors/dummy.jpg" alt="Kumar-Devdutta" />
										</div>
										<div class="featured-box">
											<div class="box-content">
												<h5 class="heading-primary"><strong>Prof. Kumar Devdutta | Faculty Advisor KiiT University</strong></h5>
												<p>
													Prof. Devdutta Kumar, 43, of KIIT University successfully completed the  VietnamCambodia International Cycle Trip from Hanoi to Phnom Penh (through Ho Chi Minh City) recently. Six other cyclists successfully completed the 2002 km Brevet organised by Bhubaneswar Cycling and Adventure Club. However, Prof. Kumar's achievement is particularly inspiring as his one leg is afftected by Polio. <br />

												</p>
											</div>
										</div>
									</li>
									<!-- <li class="appear-animation" data-appear-animation="fadeInUp">
										<div class="thumb">
											<img src="https://ecell.org.in/assets/images/2017/mentors/Miten-Mehta.jpg" alt="Miten-Mehta" />
										</div>
										<div class="featured-box">
											<div class="box-content">
												<h5 class="heading-primary"><strong>Miten Mehta | Angel Investor based in Silicon Valley</strong></h5>
												<p>
													Mr. Mehta is Co-Founder of Spinta Global Accelerator, HQ out of Fremont, CA, that delivers ‘Silicon Valley Acceleration Model Out-Of-Box’ for start-ups and Enterprise in verticals of HealthTech, EdTech, FinTech, &HighTech segments, to help them bring their innovative products and services faster to the market.<br />
													He has co-founded four successful start-ups, including three in Silicon Valley, USA – Spintaccel, KloudData, eComLive (InfoSpace) and MoConDi (MobileMedia) in London, UK. Miten has been an investor / advisor to iPsh (Omnicom), JP Mobile (Good) Cronus Ventures, PlaySpan (Visa), WaveMF, Hubilo, Strike, Chatur Ideas, eShiksha, MarketPulse and AngelLab among others. Miten served as consultant & non-exec director on board of 63 moons Technologies from Nov 2014 to Dec 2016.
												</p>
											</div>
										</div>
									</li>
									<li class="appear-animation" data-appear-animation="fadeInUp">
										<div class="thumb">
											<img src="https://ecell.org.in/assets/images/2017/mentors/Shriyans-Bhandari.jpg" alt="Shriyans Bhandari" />
										</div>
										<div class="featured-box">
											<div class="box-content">
											<h5 class="heading-primary"><strong>Shriyans Bhandari | Co-Founder GreenSole</strong></h5>
												<p>
													Mr. Bhandari is holds a master degree in Entrepreneurial Leadership Graduate from Babson College. He is an ardent marathon runner and has authored “Birds of Aravallis” in association with Rajasthan Tourism and BNHS India. He has spoken at various environmental and entrepreneurship forums including the ones at Harvard Kennedy School, Babson College, MIT, Wharton and TEDx Youth WASO, Dubai.
												</p>
											</div>
										</div>
									</li> -->

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

				<!-- Vendor -->		
				<script src="vendor/jquery/jquery.js"></script>
				<script src="vendor/jquery.appear/jquery.appear.js"></script>
				<script src="vendor/jquery.easing/jquery.easing.js"></script>		
				<script src="vendor/bootstrap/js/bootstrap.js"></script>
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