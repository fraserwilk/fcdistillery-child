<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-primary" style="color: #6AC3D5;" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row text-center">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

					© <?php echo date("Y"); ?> Falls Creek Distillery Pty Ltd • <a href="<?php echo esc_url(get_site_url(null, '/terms')); ?>" class="footer">Terms & Conditions</a>
					

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

