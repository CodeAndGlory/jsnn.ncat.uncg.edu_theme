<?php
/**
 * Template part for displaying back button.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<?php if( get_field('enable_back_button') ): ?>
<section class="back-button">
    <a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php the_field( 'back_button_text' ); ?></a>
</section>
<?php endif; ?>