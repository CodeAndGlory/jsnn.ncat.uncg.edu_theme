<?php
/**
 * Template part for displaying regular text blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="faculty-row-content">

    <?php
    if( !empty( get_sub_field('heading') ) ): ?>
        <h2><?php the_sub_field('heading') ?></h2>
    <?php endif; ?>

    <div class="faculty-row-profile-wrapper">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('repeater_faculty') ):
        // loop through the rows of data
        while ( have_rows('repeater_faculty') ) : the_row(); ?>

            <div class="faculty-row-profile">

                <?php
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <?php
                if( !empty( get_sub_field('name') ) ): ?>
                    <h3><?php the_sub_field('name') ?></h3>
                <?php endif; ?>

                <ul>

                    <?php
                    if( !empty( get_sub_field('titleposition') ) ): ?>
                        <li><?php the_sub_field('titleposition') ?></li>
                    <?php endif; ?>

                    <?php
                    if( !empty( get_sub_field('office_location') ) ): ?>
                        <li><?php the_sub_field('office_location') ?></li>
                    <?php endif; ?>

                    <?php
                    if( !empty( get_sub_field('email') ) ): ?>
                        <li><a href="mailto:<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a></li>
                    <?php endif; ?>

                    <?php
                    if( !empty( get_sub_field('phone') ) ): ?>
                        <li><?php the_sub_field('phone') ?></li>
                    <?php endif; ?>
                </ul>

            </div>

        <?php endwhile;
    endif;

    ?>
        <div class="faculty-row-profile faculty-row-profile-spacer"></div>
        <div class="faculty-row-profile faculty-row-profile-spacer"></div>
        <div class="faculty-row-profile faculty-row-profile-spacer"></div>
    </div>
</section>
