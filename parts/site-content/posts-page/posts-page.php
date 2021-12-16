<?php
/**
 * Template part for displaying the posts page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="posts-page">
    <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <div class="post-wrapper">

        <div class="post-date"><?php the_time( 'm.d.Y' ); ?></div>

        <div class="post">
            <h2 class="post-title"><?php the_title(); ?></h2>

            <div class="post-excerpt">
            <?php the_excerpt(); ?>
            </div>

            <p class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></p>
        </div>

    </div>

    <?php endwhile; // End of the loop.
    else : ?>
    <p>No posts were found.</p>
    <?php
    endif;
    ?>

    <div class="posts-navigation">
    <?php
    previous_posts_link( '&lt; Newer Posts' );
    next_posts_link( 'Past Posts &gt;', $query->max_num_pages );
    ?>
    </div>

    <?php
    wp_reset_postdata();
    ?>

    <div class="news-archive">
        <h2>News Archive</h2>
        <ul>
            <?php wp_get_archives(array('type' => 'yearly')); ?>
        </ul>
    </div>
</section>