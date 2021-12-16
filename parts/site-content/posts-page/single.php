<?php
/**
 * Template part for displaying the posts page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uncgonline
 */

?>

<section class="posts-page single-post">
    <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <div class="post-wrapper">

        <div class="post-date"><?php the_time( 'm.d.Y' ); ?></div>

        <div class="post">
            <h2 class="post-title"><?php the_title(); ?></h2>

            <p class="post-author">By <?php the_author(); ?></p>

            <?php if ( has_post_thumbnail() ): ?>
            <div class="post-featured-image">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <?php endif; ?>

            <div class="post-excerpt">
            <?php the_content(); ?>
            </div>

            <ul class="post-nav-wrapper">
                <li class="newer-post"><?php next_post_link('%link'); ?></li>
                <li class="older-post"><?php previous_post_link('%link'); ?></li>
            </ul>
        </div>

    </div>

    <?php endwhile; // End of the loop.
    else : ?>
    <p>No post was found.</p>
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
</section>