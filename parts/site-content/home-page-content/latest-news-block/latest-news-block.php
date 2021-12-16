<?php
/**
 * Template part for displaying latest-news-blocks.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="latest-news-block <?php if( get_sub_field('bottom_border') ) echo "home-bottom-border"; ?>">

    <h2>
        <?php the_sub_field('header'); ?>
    </h2>

    <?php
    // the query
    $the_query = new WP_Query( array(
        'category_name' => get_sub_field('category'),
        'posts_per_page' => get_sub_field('number_of_posts_to_display'),
    ));
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
        <div class="excerpt-col-wrapper">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="excerpt-col">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read more</a></p>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </div>
    <?php else : ?>
        <div><?php __('No News'); ?></div>
    <?php endif; ?>

    <?php
    $link = get_sub_field('news_link');
    if( $link ):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="news-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

</section>
