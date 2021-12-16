<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php include( __DIR__ . '/parts/site-content/page-banner/page-banner.php' ); ?>

            <?php include( __DIR__ . '/parts/site-content/posts-page/posts-page.php' ); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
