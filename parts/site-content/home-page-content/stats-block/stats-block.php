<?php
/**
 * Template part for displaying stats blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="stats-block <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('stats') ):

        // loop through the rows of data
        while ( have_rows('stats') ) : the_row(); ?>
            <div class="stats-col">
                <div class="stats-heading"><?php the_sub_field('heading'); ?></div>
                <span class="<?php if( get_sub_field('is_percentage') ) echo "stats-percentage"; ?>"><?php the_sub_field('count'); ?></span>
            </div>
        <?php
        endwhile;

    endif;

    ?>
</section>
