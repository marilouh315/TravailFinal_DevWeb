<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?>	
		<div class="footer_custom">
			Marilou Heon <?php $date = date("Y"); print($date) ?>
		</div>
		<?php do_action( 'hestia_do_footer' ); ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>
