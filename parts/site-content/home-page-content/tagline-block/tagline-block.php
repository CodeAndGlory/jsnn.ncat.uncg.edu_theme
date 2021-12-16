<?php
/**
 * Template part for displaying tagline blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="tagline-block <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">

    <?php if( get_sub_field( 'tagline' ) ): ?>
    <div class="tagline-block-tagline">
        <h1><?php the_sub_field( 'tagline' ); ?></h1>
    </div>
    <?php endif; ?>

    <?php if( get_sub_field( 'introduction' ) ): ?>
    <div class="tagline-block-introduction">
        <?php the_sub_field( 'introduction' ); ?>
    </div>
    <?php endif; ?>

</section>
