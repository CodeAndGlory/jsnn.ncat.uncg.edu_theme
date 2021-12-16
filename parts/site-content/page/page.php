<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<?php include( __DIR__ . '/../page-banner/page-banner.php' ); ?>

<?php
$class = '';
if(has_side_nav()) {
    $class .= 'has-side-nav';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>

    <?php if( has_side_nav() ): ?>
    <ul class="side-nav">
        <?php echo wpb_list_child_pages_menu(); ?>
    </ul>
    <?php endif; ?>

    <div class="main-page-content">

        <?php if( !is_front_page() && !get_field('hide_page_title') ): ?>
        <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
        <?php endif; ?>

        <div class="entry-content">
        <?php

        if(is_front_page()) {
            include( dirname( __DIR__ ) . '/home-page-content/home-page-content.php' );
        }

        include( dirname( __DIR__ ) . '/flex-content/flex-content.php' );

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'uncgonline' ),
            'after' => '</div>',
        ) );
        ?>
        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__( 'Edit %s', 'uncgonline' ),
                    the_title( '<span class="screen-reader-text">', '</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer><!-- .entry-footer -->
        <?php endif; ?>
    </div>
</article><!-- #post-## -->
