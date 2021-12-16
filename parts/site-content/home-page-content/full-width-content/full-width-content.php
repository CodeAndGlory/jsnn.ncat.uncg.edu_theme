<?php
/**
 * Template part for displaying full width content blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="full-width-content <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">
    <?php the_sub_field( 'full_width_content' ); ?>
</section>
