<?php // Flexible fields content.

$content_iter = 0; // iterator

if ( have_rows( 'page_content' ) ) {
    while ( have_rows( 'page_content' ) ) : the_row();
        if ( 'row_normal_text_content' === get_row_layout() ) {
            include( __DIR__ . '/normal-content/normal-content.php' );
        }
        if ( 'row_emphasis_content' === get_row_layout() ) {
            include( __DIR__ . '/emphasis-content/emphasis-content.php' );
        }
        if ( 'row_intro_text_content' === get_row_layout() ) {
            include( __DIR__ . '/intro-content/intro-content.php' );
        }
        if ( 'row_table_content' === get_row_layout() ) {
            include( __DIR__ . '/table/table.php' );
        }
        if ( 'row_accordion_content' === get_row_layout() ) {
            include( __DIR__ . '/accordion-content/accordion-content.php' );
        }
        if ( 'row_button_links_content' === get_row_layout() ) {
            include( __DIR__ . '/buttons-content/buttons-content.php' );
        }
        if ( 'row_directory_profile' === get_row_layout() ) {
            include( __DIR__ . '/directory-profile-content/directory-profile-content.php' );
        }
        if ( 'row_faculty_row' === get_row_layout() ) {
            include( __DIR__ . '/faculty-row-content/faculty-row-content.php' );
        }
        if ( 'row_page_divider' === get_row_layout() ) {
            include( __DIR__ . '/page-divider/page-divider.php' );
        }
        if ( 'row_news_block' === get_row_layout() ) {
            include( __DIR__ . '/news-post-block/news-post-block.php' );
        }
        if ( 'row_lab_block' === get_row_layout() ) {
            include( __DIR__ . '/lab-content/lab-content.php' );
        }
        if ( 'row_resources_block' === get_row_layout() ) {
            include(__DIR__ . '/resources-content-block/resources-content-block.php');
        }
        if ( 'row_two_column_block' === get_row_layout() ) {
            include(__DIR__ . '/two-column/two-column.php');
        }

        $content_iter++;
    endwhile;
}

if ( !have_rows( 'page_content' ) ) {
    the_content();
}
