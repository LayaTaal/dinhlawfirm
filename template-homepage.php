<?php 

	/* Template Name: Homepage */ get_header();
	
?>

	<main role="main">

		<?php
			//Build homepage from modules
			
			//Get children pages	
			$children = get_pages( 'child_of=' . $post->ID . '&parents=' . $post->ID . '&sort_column=menu_order' );
			
			/* For testing purposes */
			//echo '<pre>' . print_r( $children, true ) . '</pre>';
			
			//Loop through children pages
			foreach ($children as $child) {
				
				//Define basic variables
				$id = $child->ID;
				$slug = $child->post_name;
				$title = $child->post_title;
				$thumbnail = get_the_post_thumbnail_url($id);
				$content = $child->post_content;
				$content = apply_filters( 'the_content', $content);
				$order = $child->menu_order;
								
				//Wrap each section
				echo '<section id="' . $slug . '" class="homepage-section">';
								
					include( locate_template( 'template-parts/homepage-' . $order . '.php' ) );
				
				echo '</section>';
				
			}
		?>


	</main>

<?php get_footer(); ?>
