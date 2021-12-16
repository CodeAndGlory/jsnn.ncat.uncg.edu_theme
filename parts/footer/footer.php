    </div><!-- #content -->

    <?php
    $image = get_field('footer_tile_image', 'options');
    $style = '';
    if( $image ) {
        $style = 'style="background-image: url('.$image['url'].');"';
    }
    ?>

    <footer id="colophon" class="site-footer" role="contentinfo" <?php echo $style; ?>>
        <div class="site-info">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('footer_columns', 'options') ):

                // loop through the rows of data
                while ( have_rows('footer_columns', 'options') ) : the_row(); ?>
                    <div class="footer-column"> <?php the_sub_field('column', 'options'); ?></div>
                 <?php endwhile;
            endif;

            ?>
            <?php if( get_field('enable_social_media_column', 'options') ): ?>
            <div class="footer-column">
                <?php if( get_field('social_media_column_heading', 'options') ): ?>
                    <h5><?php the_field('social_media_column_heading', 'options') ?></h5>
                <?php endif; ?>

                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('social_media_column', 'options') ): ?>
                        <ul class="footer-social-media-links">
                        <?php
                        // loop through the rows of data
                        while ( have_rows('social_media_column', 'options') ) : the_row(); ?>
                            <li>
                                <a href="<?php echo (get_sub_field('type') != 'email') ? get_sub_field('url') : "mailto:" . get_sub_field('email') ?>"
                                   class="social-icon-<?php the_sub_field('type') ?>"
                                   <?php if( get_sub_field('open_new_window') ) echo 'target="_blank"' ?>
                                >
                                    <img
                                            src="<?php echo get_stylesheet_directory_uri() . "/parts/footer/icons/" . get_sub_field('type') . ".svg" ?>"
                                            alt="<?php the_sub_field('type') ?>"
                                            width="55"
                                            height="49"
                                    >
                                </a>
                            </li>
                         <?php endwhile; ?>
                        </ul>
                <?php
                    endif;
                ?>
            </div>
            <?php endif; ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
