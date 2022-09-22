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

		<?=$this->load->view('templates/bootstraps/menu'); ?>
