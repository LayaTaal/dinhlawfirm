			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="footer-1 footer-column">
					<a href="<?php bloginfo('url'); ?>" class="footer-title">
						<img src="<?php echo get_template_directory_uri() ?>/img/dinh_logo_light_2.png" alt="Dinh Law Firm - Personal Injury and Immigration Attorneys">

						
					</a>
					<p class="copyright">&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</p> 
				</div>
				<div class="footer-2 footer-column">
					<?php if( is_active_sidebar('footer-area-2') ) :
						dynamic_sidebar('footer-area-2');
					endif; ?>
				</div>
				<div class="footer-3 footer-column">
					<?php if( is_active_sidebar('footer-area-3') ) :
						dynamic_sidebar('footer-area-3');
					endif; ?>				</div>
				<div class="footer-4 footer-column">
					<?php if( is_active_sidebar('footer-area-4') ) :
						dynamic_sidebar('footer-area-4');
					endif; ?>				</div>
				<div class="footer-5 footer-column">
					<?php if( is_active_sidebar('footer-area-2') ) :
						dynamic_sidebar('footer-area-5');
					endif; ?>				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
