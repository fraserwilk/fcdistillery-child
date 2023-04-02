<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!--  removed the page Title -->
	<canvas id="bg"></canvas>
        <div class="entry-content">
            <div class="gin-bottle">
                <img src="http://localhost/fcgin/wp-content/uploads/2023/03/fc-gin-bottle.png" />
            </div>
            <?php
            the_content();
            understrap_link_pages();
            ?>

        </div><!-- .entry-content -->
        <script src="http://localhost/fcgin/wp-content/themes/fcdistillery-child/src/js/custom-javascript.js"></script>
    
	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
