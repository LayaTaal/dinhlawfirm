<?php
	/**
	 * Template to display the personal injury section of homepage
	*/
?>

<div class="practice-area-wrapper">
	<div class="practice-area-wrapper__column-one">
		<div class="pa-circle pa-circle--blue">
			<span>Have you been in an accident?</span>
		</div>
		<div class="pa-circle pa-circle--red">
			<span>Are you unable to work?</span>
		</div>
		<div class="pa-circle pa-circle--grey">
			<span>Are medical bills piling up?</span>
		</div>
		<div class="pa-circle pa-circle--black">
			<span>Have you received medical treatment?</span>
		</div>
	</div><!-- .practice-area-wrapper__column-one -->
	<div class="practice-area-wrapper__column-two">
		<?php echo $content; ?>
	</div><!-- .practice-area-wrapper__column-two -->
</div><!-- .practice-area-wrapper -->