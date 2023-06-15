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
        <?php if ( is_front_page() ) : ?>
            <div class="gin-bottle">
                <img src="https://www.fallscreekgincompany.com.au/wp-content/uploads/2023/04/fc-gin-bottle.png" />
            </div>
        <?php endif; ?>
            <?php
            the_content();
            understrap_link_pages();
            ?>

        </div><!-- .entry-content -->

    
	<footer class="entry-footer">

		<?php understrap_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
