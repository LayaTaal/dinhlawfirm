<?php 
	/* Template Name: Attorney */
	
	get_header();
	
	// Get each attorney's contact information
	$phone = get_post_meta($post->ID, 'attorney_meta_phone', true);
	$email = get_post_meta($post->ID, 'attorney_meta_email', true);
	
	$clean_phone = preg_replace('/\D+/', '', $phone);
	
?>

	<main role="main">
		
		<header class="page-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero_bg_left.jpg), url(<?php echo get_template_directory_uri() ?>/img/hero_bg_right.jpg)">
			<span class="page-header__title">Our Attorneys</span>
		</header>
		
		<!-- section -->
		<section class="subpage">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('attorney-content'); ?>>
				
				<h1><?php the_title(); ?></h1>
				
				<div class="attorney-extras">

					<div class="attorney-image">
						<?php the_post_thumbnail('full') ?>
					</div>
				
					<div class="attorney-contact">
						<a href="tel:+1<?php echo $clean_phone ?>"><span class="attorney-contact__icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/phone_icon_red.png" alt="Phone Icon"></span> <?php echo $phone ?></a>
						<a href="mailto:<?php echo $email ?>?subject=Website Inquiry"><span class="attorney-contact__icon"><img src="<?php echo get_template_directory_uri() ?>/img/icons/email_icon_red.png" alt="Email Icon"></span> <?php echo $email ?></a>
					</div>

				</div>

				<div class="attorney-profile">

					<?php the_content(); ?>
				
				</div>
				
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		
	</main>

<?php get_footer(); ?>
