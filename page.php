<?php get_header(); ?>

	<main role="main">

		<header class="page-header" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/hero_bg_left.jpg), url(<?php echo get_template_directory_uri() ?>/img/hero_bg_right.jpg)">
			<h1 class="page-header__title"><?php the_title(); ?></h1>
		</header>
		
		<!-- section -->
		<section class="subpage">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

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
