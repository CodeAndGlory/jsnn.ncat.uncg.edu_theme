<?php
/**
 * Template part for displaying regular text blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="buttons-content">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('repeater_buttons') ):

        // loop through the rows of data
        while ( have_rows('repeater_buttons') ) : the_row();

        $link = get_sub_field('button_link');
        $aria_label_text = get_sub_field('aria-label');

        if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';

            $aria_label = $aria_label_text ? 'aria-label="'.$aria_label_text.'"' : "";

            ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" <?php echo $aria_label; ?>><?php echo esc_html( $link_title ); ?></a>

        <?php
        endif;
        endwhile;
    endif;

    ?>
</section>
