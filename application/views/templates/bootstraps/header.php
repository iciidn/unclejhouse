<!DOCTYPE html>
<html class="boxed">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$aplikasi->nama_unit?></title>


		<meta name="keywords" content="kost , kost cilegon , kost serang , kost murah" />
		<meta name="description" content="Kost Uncle J House | Cilegon Serang Banten">
		<meta name="author" content="aom.my.id">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url()?>logo.jpeg" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?=base_url()?>logo.jpeg">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-elements.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-blog.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/skins/skin-hotel.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/demos/demo-hotel.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=base_url()?>assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="header-top-custom">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-address">
						<i class="icon-location-pin icons text-color-primary"></i>
						<label>address</label>
						<strong>1234 Street Name, Porto, Envato</strong>
					</div>
					<div class="col-sm-3 col-phone">
						<i class="icon-phone icons text-color-primary"></i>
						<label>call us</label>
						<strong>(800) 1234-5678</strong>
					</div>
					<div class="col-sm-4 col-share">
						<i class="icon-share icons text-color-primary"></i>
						<label>follow us</label>
						<ul class="social-icons">
							<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i> <span>Instagram</span></a></li>
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i> <span>Facebook</span></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i> <span>Twitter</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="body">
			<header id="header" class="header-flex" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 220, 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="demo-hotel.html">
										<img alt="Porto" width="192" height="55" src="<?=base_url()?>assets/img/demos/hotel/logo-hotel.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="active">
														<a href="<?=base_url()?>">
															Home
														</a>
													</li>
													<li>
														<a href="<?=base_url()?>">
															Hotel
														</a>
													</li>
													<li>
														<a href="<?=base_url()?>">
															Rooms &amp; Rates
														</a>
													</li>
													<li>
														<a href="<?=base_url()?>">
															Special Offers
														</a>
													</li>
													<li>
														<a href="<?=base_url()?>">
															Location
														</a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-primary dropdown-mega dropdown-mega-book-now" id="headerBookNow">
														<a class="dropdown-toggle" href="<?=base_url()?>">
															Book Now
														</a>
														<ul class="dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<form id="bookFormHeader" action="demo-hotel-book.html" method="POST">
																		<div class="row">
																			<div class="form-group">
																				<div class="col-md-12">
																					<div class="form-control-custom form-control-datepicker-custom">
																						<input type="text" value="" class="form-control text-uppercase font-size-sm" data-msg-required="This field is required." placeholder="Arrival" name="bookNowArrivalHeader" id="bookNowArrivalHeader" required>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="form-group">
																				<div class="col-md-12">
																					<div class="form-control-custom form-control-datepicker-custom">
																						<input type="text" value="" class="form-control text-uppercase font-size-sm" data-msg-required="This field is required." placeholder="Departure" name="bookNowDepartureHeader" id="bookNowDepartureHeader" required>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="form-group">
																				<div class="col-md-6">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="bookNowAdults" data-msg-required="This field is required." id="bookNowAdults" required>
																							<option value="">Adults</option>
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option value="3">3</option>
																							<option value="4">4</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="bookNowKids" data-msg-required="This field is required." id="bookNowKids" required>
																							<option value="">Kids</option>
																							<option value="1">0</option>
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option value="3">3</option>
																							<option value="4">4</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12">
																				<input type="submit" value="Check availability" class="btn btn-secondary btn-lg btn-block text-uppercase font-size-sm">
																			</div>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
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
				<div class="slider-container rev_slider_wrapper" style="height: 530px;">
					<div id="revolutionSlider" class="slider rev_slider manual">
						<ul>
							<li data-transition="boxfade">

								<img src="<?=base_url()?>assets/img/demos/hotel/slides/slide-hotel-1.jpg"
									  alt=""
									  data-bgposition="center bottom"
									  data-bgfit="cover"
									  data-bgrepeat="no-repeat"
									  data-bgparallax="10"
									  class="rev-slidebg"
									  data-no-retina>
							</li>
							<li data-transition="boxfade">

								<img src="<?=base_url()?>assets/img/demos/hotel/slides/slide-hotel-2.jpg"
									  alt=""
									  data-bgposition="center bottom"
									  data-bgfit="cover"
									  data-bgrepeat="no-repeat"
									  data-bgparallax="10"
									  class="rev-slidebg"
									  data-no-retina>
							</li>
							<li data-transition="boxfade">

								<img src="<?=base_url()?>assets/img/demos/hotel/slides/slide-hotel-3.jpg"
									  alt=""
									  data-bgposition="center bottom"
									  data-bgfit="cover"
									  data-bgrepeat="no-repeat"
									  data-bgparallax="10"
									  class="rev-slidebg"
									  data-no-retina>
							</li>
						</ul>
					</div>
				</div>

				<section class="section section-no-background section-no-border m-none">
					<div class="container">
						<div class="row mb-xl">
							<div class="col-md-8">

								<h3 class="mt-xl mb-none pb-none text-uppercase">In the Heart of Porto</h3>
								<div class="divider divider-primary divider-small mb-xl mt-none">
									<hr class="mt-sm">
								</div>

								<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet. Lorem ipsum dolor sit amet.</p>

								<p class="mt-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

								<a class="btn btn-primary btn-lg font-size-sm text-uppercase mt-sm mb-xlg" href="#">Learn More</a>
							</div>
							<div class="col-md-4">

								<div class="micro-map box-shadow-custom clearfix">
									<div class="micro-map-map">
										<div id="googleMapsMicro" class="google-map m-none" style="height: 280px;"></div>
									</div>
									<div class="micro-map-info">
										<div class="micro-map-info-detail">
											<i class="icon-location-pin icons text-color-primary"></i>
											<label>address</label>
											<strong>1234 Street Name, Porto, Envato</strong>
											<a href="<?=base_url()?>" title="">(View Location)</a>
										</div>
										<div class="micro-map-info-detail">
											<i class="icon-phone icons text-color-primary"></i>
											<label>call us</label>
											<strong>(800) 1234-5678</strong>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</section>

				<section class="parallax section section-parallax section-center m-none section-overlay-opacity section-overlay-opacity-scale-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?=base_url()?>assets/img/demos/hotel/parallax-hotel.jpg">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h3 class="mb-xs mt-none text-light text-uppercase">Enjoy the best of Porto</h3>
								<p class="lead text-light mb-xlg">Make your reservation right now with the best price</p>

								<a class="btn btn-primary btn-lg font-size-sm text-uppercase mt-sm" href="<?=base_url()?>">Book Now</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-none">
					<div class="container">
						<div class="row mb-xl">
							<div class="col-md-4">

								<div class="owl-carousel owl-theme nav-inside box-shadow-custom mt-xl" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
									<div>
										<img alt="" class="img-responsive" src="<?=base_url()?>assets/img/demos/hotel/gallery/gallery-1.jpg">
									</div>
									<div>
										<img alt="" class="img-responsive" src="<?=base_url()?>assets/img/demos/hotel/gallery/gallery-2.jpg">
									</div>
								</div>

							</div>
							<div class="col-md-8">

								<h3 class="mt-xl mb-none pb-none text-uppercase">Hotel Overview</h3>
								<div class="divider divider-primary divider-small mb-xl mt-none">
									<hr class="mt-sm">
								</div>

								<p class="mt-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut. <a href="<?=base_url()?>" class="custom-rtl-link-fix" title="">(View More...)</a></p>

								<div class="row">
									<div class="col-md-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark font-size-sm">
											<li><i class="fa fa-check"></i> 24 Rooms, 4 Luxury suites</li>
											<li><i class="fa fa-check"></i> Fitness center</li>
											<li><i class="fa fa-check"></i> Airport transporation</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark font-size-sm">
											<li><i class="fa fa-check"></i> 24-Hour In-Room Dining</li>
											<li><i class="fa fa-check"></i> Cocktail Bar</li>
											<li><i class="fa fa-check"></i> Dog Friendly - Pets Stay Free</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul class="list list-icons list-primary list-borders text-uppercase text-color-dark font-size-sm">
											<li><i class="fa fa-check"></i> Valet car service</li>
											<li><i class="fa fa-check"></i> Pool</li>
											<li><i class="fa fa-check"></i> Free Wi-Fi</li>
										</ul>
									</div>
								</div>

							</div>


						</div>
					</div>
				</section>

				<section class="section section-text-light section-background section-center section-overlay-opacity section-overlay-opacity-scale-4 m-none" style="background-image: url(img/demos/hotel/video-cover-bg-1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12" style="height: 360px;">
								<a href="https://vimeo.com/178747566" class="play-video-custom"><img src="<?=base_url()?>assets/img/demos/hotel/play-icon.png" class="img-responsive" width="90" height="90" /></a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-primary section-no-border m-none" data-plugin-parallax data-plugin-options="{'speed': 6}" data-image-src="<?=base_url()?>assets/img/demos/hotel/parallax-hotel-map.png">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h3 class="mt-xl mb-none pb-none text-light text-uppercase">Guest Reviews</h3>
								<div class="divider divider-light divider-small divider-small-center mb-xl mt-none">
									<hr class="mt-sm">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
									<div class="testimonial-author">
										<p><strong>John Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes.</p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
									<div class="testimonial-author">
										<p><strong>Brad Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<blockquote class="box-shadow-custom">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet.</p>
									</blockquote>
									<div class="testimonial-arrow-down"></div>
									<div class="testimonial-author">
										<p><strong>Paul Smith</strong><span>Porto Advisor</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-background section-no-border m-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">

								<h3 class="mt-xl mb-none pb-none text-uppercase">Special Offers</h3>
								<div class="divider divider-primary divider-small divider-small-center mb-xl mt-none">
									<hr class="mt-sm">
								</div>

								<div class="row pt-xl">
									<div class="col-md-6">
										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom thumb-info-no-zoom thumb-info-side-image-custom-highlight appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-responsive" src="<?=base_url()?>assets/img/demos/hotel/gallery/gallery-4.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text">
														<h4 class="text-uppercase">Porto Special</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti...</p>
													</span>
												</span>
											</span>
										</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-responsive" style="max-width: 240px;" src="<?=base_url()?>assets/img/demos/hotel/gallery/gallery-2.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text">
														<h4 class="text-uppercase">Plan Ahead</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
													</span>
												</span>
											</span>
										</a>

										<a href="#" class="text-decoration-none">
											<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom box-shadow-custom appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
												<span class="thumb-info-side-image-wrapper">
													<img alt="" class="img-responsive" style="max-width: 240px;" src="<?=base_url()?>assets/img/demos/hotel/gallery/gallery-3.jpg">
												</span>
												<span class="thumb-info-caption">
													<span class="thumb-info-caption-text">
														<h4 class="text-uppercase">Valentine's Day</h4>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
													</span>
												</span>
											</span>
										</a>
									</div>
								</div>

								<a class="btn btn-primary btn-lg font-size-sm text-uppercase mt-sm" href="<?=base_url()?>">View All</a>

							</div>

						</div>
					</div>
				</section>

				<section class="section section-tertiary section-no-border m-none">
					<div class="container">
						<div class="row">
							<div class="col-md-3">

								<p class="lead p-none m-none font-size-md text-uppercase">Sign Up Now For</p>
								<h4 class="mb-xs mt-none text-light text-uppercase">Exclusive special offers:</h4>

							</div>
							<div class="col-md-9">

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="row">
										<div class="col-sm-5">
											<div class="form-control-custom">
												<input type="text" class="form-control input-lg text-uppercase font-size-sm mr-lg" id="newsletterName" placeholder="Full Name *" required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-control-custom">
												<input type="email" class="form-control input-lg text-uppercase font-size-sm mr-lg" id="newsletterEmail" placeholder="Email Address *"
												required>
											</div>
										</div>
										<div class="col-sm-3">
											<button type="submit" class="btn btn-primary btn-lg btn-block font-size-sm text-uppercase mt-sm">Subscribe Now</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>

				<footer id="footer" class="color color-primary mt-none pt-xlg pb-xlg">
					<div class="container">
						<div class="row pt-md pb-md">
							<div class="col-md-3 mb-none">
								<img alt="Porto" class="img-responsive logo mt-sm" style="max-width: 145px;" src="<?=base_url()?>assets/img/demos/hotel/logo-hotel-footer.png">
							</div>
							<div class="col-md-3 mb-none">
								<div class="footer-info">
									<i class="icon-location-pin icons"></i>
									<label>address</label>
									<strong>1234 Street Name, Porto, Envato</strong>
								</div>
							</div>
							<div class="col-md-2 mb-none">
								<div class="footer-info">
									<i class="icon-phone icons"></i>
									<label>call us</label>
									<strong>(800) 1234-5678</strong>
								</div>
							</div>
							<div class="col-md-4 mb-none">
								<div class="footer-info">
									<i class="icon-share icons"></i>
									<label>follow us</label>
									<ul class="social-icons">
										<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i> Instagram</a></li>
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i> Twitter</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</footer>

			</div>

		</div>

		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<nav id="sub-menu">
							<ul>
								<li>
									<a href="<?=base_url()?>">
										Hotel
									</a>
								</li>
								<li>
									<a href="<?=base_url()?>">
										Rooms &amp; Rates
									</a>
								</li>
								<li>
									<a href="<?=base_url()?>">
										Special Offers
									</a>
								</li>
								<li>
									<a href="<?=base_url()?>">
										Location
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 align-right">
						<p>© Copyright 2017. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Vendor -->
		<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/common/common.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/vide/vide.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url()?>assets/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Demo -->
		<script src="<?=base_url()?>assets/js/demos/demo-hotel.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url()?>assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url()?>assets/js/theme.init.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			$('#googleMapsMacro').gMap({
				controls: {
					draggable: true,
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 13
			});

			$('#googleMapsMicro').gMap({
				controls: {
					draggable: false,
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 13
			});

			var mapRef = $('#googleMapsMacro, #googleMapsMicro').data('gMap.reference');

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
