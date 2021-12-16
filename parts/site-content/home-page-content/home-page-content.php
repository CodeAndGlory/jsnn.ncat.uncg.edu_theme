<?php // Flexible fields content.

if ( have_rows( 'home_page_fields' ) ) {
    while ( have_rows( 'home_page_fields' ) ) : the_row();
        if ( 'row_tagline_block' === get_row_layout() ) {
            include( __DIR__ . '/tagline-block/tagline-block.php' );
        }
        if ( 'row_full_width_content' === get_row_layout() ) {
            include( __DIR__ . '/full-width-content/full-width-content.php' );
        }
        if ( 'row_resources_row' === get_row_layout() ) {
            include( __DIR__ . '/resources-block/resources-block.php' );
        }
        if ( 'row_spotlight_block' === get_row_layout() ) {
            include( __DIR__ . '/spotlight-block/spotlight-block.php' );
        }
        if ( 'row_stats_block' === get_row_layout() ) {
            include( __DIR__ . '/stats-block/stats-block.php' );
        }
        if ( 'row_latest_news_block' === get_row_layout() ) {
            include( __DIR__ . '/latest-news-block/latest-news-block.php' );
        }
        if ( 'row_mission_block' === get_row_layout() ) {
            include(__DIR__ . '/mission-block/mission-block.php');
        }
    endwhile;
}