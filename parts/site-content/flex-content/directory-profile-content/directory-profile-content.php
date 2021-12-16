<?php
/**
 * Template part for displaying regular text blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="directory-profile-content">
    <?php
    $image = get_sub_field('image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="directory-profile-details-wrapper">
        <?php
        if( !empty( get_sub_field('name') ) ): ?>
            <<?php the_sub_field('select_heading_for_name'); ?>><?php the_sub_field('name') ?></<?php the_sub_field('select_heading_for_name'); ?>>
        <?php endif; ?>

        <ul class="directory-profile-details">
            <?php
            if( !empty( get_sub_field('titleposition') ) ): ?>
                <li><?php the_sub_field('titleposition') ?></li>
            <?php endif; ?>

            <?php
            if( !empty( get_sub_field('office_location') ) ): ?>
                <li><?php the_sub_field('office_location') ?></li>
            <?php endif; ?>

            <?php
            if( !empty( get_sub_field('phone') ) ): ?>
                <li><?php the_sub_field('phone') ?></li>
            <?php endif; ?>

            <?php
            if( !empty( get_sub_field('email') ) ): ?>
                <li><a href="mailto:<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a></li>
            <?php endif; ?>

            <?php
            if( !empty( get_sub_field('website') ) ): ?>
                <li><a href="<?php the_sub_field('website') ?>" target="_blank">website</a></li>
            <?php endif; ?>
        </ul>

        <?php if( !empty(get_sub_field('google_scholar'))
                    || !empty(get_sub_field('linkedin'))
                    || !empty(get_sub_field('youtube'))
                ): ?>
        <ul class="directory-profile-icon-links">
            <?php
            if( !empty( get_sub_field('google_scholar') ) ): ?>
                <li><a href="<?php the_sub_field('google_scholar') ?>" target="_blank" title="Google Scholar" aria-label="opens in new window"><?php include(get_stylesheet_directory()."/images/icons/google-scholar-icon.svg.php"); ?></a></li>
            <?php endif; ?>
            <?php
            if( !empty( get_sub_field('linkedin') ) ): ?>
                <li><a href="<?php the_sub_field('linkedin') ?>" target="_blank" title="Linkedin" aria-label="opens in new window"><?php include(get_stylesheet_directory()."/images/icons/linkedin-icon.svg.php"); ?></a></li>
            <?php endif; ?>
            <?php
            if( !empty( get_sub_field('youtube') ) ): ?>
                <li><a href="<?php the_sub_field('youtube') ?>" target="_blank" title="YouTube" aria-label="opens in new window"><?php include(get_stylesheet_directory()."/images/icons/youtube-icon.svg.php"); ?></a></li>
            <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</section>
