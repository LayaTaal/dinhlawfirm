<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        	<link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        
        <!-- Load fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 

	</head>
	<body <?php body_class(); ?>>
		
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				
				<div class="info-bar">
					
					<!-- Language Options -->
					<div class="language-options">
						<?php do_action('wpml_add_language_selector') ?>
					</div>
						
					<!-- contact -->
					<div class="contact-info">
						<a href="mailto:info@dinhlawfirm.com?subject=Website Inquiry">info@dinhlawfirm.com</a>
						|
						<a href="tel:+12818790447">281-879-0447</a>						
					</div>
					
				</div>
				
				<div class="header-menu">
					
					<div class="header-menu__logo">
						<a href="<?php echo get_site_url() ?>">
							<img src="<?php echo get_template_directory_uri() ?>/img/dinh-law-firm-logo664px.png" alt="Dinh Law Firm - Personal Injury and Immigration Attorneys"
							>
						</a>
						
						<div class="header-menu__toggle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					
					<div class="header-menu__nav">
						<?php html5blank_nav(); ?>
					</div>
					
				</div>

			</header>
			<!-- /header -->
			
			<div class="mobile-callout">
				<div class="email-callout">
					<a href="<?php echo get_site_url() ?>/contact/">
						<img src="<?php echo get_template_directory_uri() ?>/img/icons/email_icon_red.png" alt="Email Dinh Law Firm"> Schedule Consultation
					</a>
				</div>
				<div class="tel-callout">
					<a href="tel:1-281-879-0447" class="tel-num">
					  <img src="<?php echo get_template_directory_uri() ?>/img/icons/phone_icon_red.png" alt="Call Dinh Law Firm"> Call
					</a>
				</div>
			</div>
