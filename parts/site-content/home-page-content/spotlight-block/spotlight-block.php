<?php
/**
 * Template part for displaying full width content blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="spotlight-block <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">

    <?php
    if( have_rows('lead_block') ): ?>
    <div class="quick-links">
        <ul>
            <?php while( have_rows('lead_block') ): the_row(); ?>
                <li>
                    <?php
                    $link = get_sub_field('link');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php if(get_sub_field('icon')): ?>
                                <span class="icon-<?php the_sub_field('icon'); ?>" aria-hidden="true"><?php include("icons/icon-".get_sub_field('icon').".svg"); ?></span>
                            <?php endif; ?>
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if( have_rows('spotlight') ): ?>
    <div class="spotlight-content">
        <?php while( have_rows('spotlight') ): the_row(); ?>

            <?php if(get_sub_field('heading')): ?>
            <h2><?php the_sub_field('heading'); ?></h2>
            <?php endif; ?>

            <div class="spotlight-content-inner">
            <?php
            $link = get_sub_field('spotlight_1_link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

            <?php
                $image = get_sub_field('spotlight_1_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            <?php endif; ?>

            <?php
            $link = get_sub_field('spotlight_2_link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

            <?php
                $image = get_sub_field('spotlight_2_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                    <span><?php echo esc_html( $link_title ); ?></span>
                </a>
            <?php endif; ?>
            </div>

        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
