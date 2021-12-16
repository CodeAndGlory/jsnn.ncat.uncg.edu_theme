<?php
/**
 * Template part for displaying full width resources blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="resources-block <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">
    <?php
        if( have_rows('lead_block') ): ?>
        <div class="resources-lead-block">
        <?php while( have_rows('lead_block') ): the_row(); ?>

            <?php if(get_sub_field('heading')): ?>
                <h2><?php the_sub_field('heading'); ?></h2>
            <?php endif; ?>

            <?php if(get_sub_field('blurb')): ?>
                <?php the_sub_field('blurb'); ?>
            <?php endif; ?>

            <?php
            $link = get_sub_field('link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="link-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

        <?php endwhile; ?>
        </div> <!-- .resources-lead-block -->
    <?php endif; ?>

    <?php
    if( have_rows('resources_block') ): ?>
        <div class="resource-links">
            <?php while( have_rows('resources_block') ): the_row(); ?>
                <?php if(get_sub_field('heading')): ?>
                    <h2><?php the_sub_field('heading'); ?></h2>
                <?php endif; ?>
                <ul>
                <?php while( have_rows('repeater_resources') ): the_row(); ?>
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
            <?php endwhile; ?>
        </div> <!-- .resource-links -->
    <?php endif; ?>
</section>
