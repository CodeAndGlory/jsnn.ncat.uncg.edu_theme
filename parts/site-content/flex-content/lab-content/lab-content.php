<?php
/**
 * Template part for displaying lab content blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="lab-content">

    <ul class="lab-details">
    <?php if( get_sub_field('location') ): ?>
        <li><?php the_sub_field('location'); ?></li>
    <?php endif; ?>

    <?php if( get_sub_field('directors') ): ?>
        <li><?php the_sub_field('directors'); ?></li>
    <?php endif; ?>

    <?php if( get_sub_field('contact_email') ): ?>
        <li><a href="mailto:<?php the_sub_field('contact_email'); ?>"><?php the_sub_field('contact_email'); ?></a></li>
    <?php endif; ?>
    </ul>

    <?php if( get_sub_field('description') ): ?>
    <div class="lab-description">
        <?php the_sub_field('description'); ?>
    </div>
    <?php endif; ?>

</section>
