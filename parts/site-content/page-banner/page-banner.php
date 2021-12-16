<?php

if( is_home() || is_single() ) {
    $post_id = get_option('page_for_posts');
} else {
    $post_id = $post->ID;
}

// page banner
$enable_page_banner = get_field('enable_page_banner', $post_id);
$page_banner = get_field('page_banner_optional', $post_id);
if( $enable_page_banner && !empty( $page_banner ) ): ?>
    <div class="page-banner" style="background-image: url('<?php echo esc_url($page_banner['url']); ?>')" >
        <?php if( !empty( get_field('page_banner_text', $post_id) ) ): ?>
            <?php if(get_field('hide_page_title')): ?>
                <h1><?php the_field('page_banner_text', $post_id); ?></h1>
            <?php else: ?>
                <p><?php the_field('page_banner_text', $post_id); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php
// hero banner
$enable_hero_banner = get_field('enable_hero_banner', $post_id);
include(__DIR__ . '/hero-banner/hero-banner.php');
?>

<?php if( empty( $enable_page_banner ) && empty( $enable_hero_banner ) ): ?>
    <hr class="page-divider <?php if(is_front_page()) echo "no-breadcrumbs" ?>">
<?php endif; ?>

<?php
if(!is_front_page()) {
    include(__DIR__ . '/../breadcrumbs/breadcrumbs.php');
}
?>

<?php
    include( dirname( __DIR__ ) . '/back-button/back-button.php' );
?>
