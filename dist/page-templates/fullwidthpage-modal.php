<?php
/**
 * Template Name: Full Width Page - Modal
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
	$wrapper_id = 'no-title-page-wrapper';
}
?>

<div class="wrapper bg-primary" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?>">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">


					<!-- Modal -->
					<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title fs-5" id="ModalLabel">Welcome to Falls Creek Distillery!</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
							<p>It’s illegal in Australia to sell alcohol to anyone under 18.</p>
							<p>To continue using this website select the button that applies to you.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">I'm 18 or over</button>
								<button type="button" class="btn btn-primary">I'm under 18</button>
						</div>
						</div>
						</div>
					</div>
					
					<?php if ( is_front_page() ) : ?>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
						<script>
								// Activate the modal on page load
								var myModal = new bootstrap.Modal(document.getElementById('myModal'));
								myModal.show();
						</script>
					<?php endif; ?>


					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'front' );

						
					}
					?>

				</main>

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok. ?> -->



<?php
get_footer();
