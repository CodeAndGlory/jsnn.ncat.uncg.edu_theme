<?php

$hero_image = get_field('hero_image', $post_id);

if( $enable_hero_banner && !empty( $hero_image ) ): ?>
    <div class="hero-banner">
        <?php
            // Image variables.
            $url = $hero_image['url'];
            $title = $hero_image['title'];
            $alt = $hero_image['alt'];
        ?>

        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />

        <div class="hero-text-box">
            <?php the_field('hero_banner_text', $post_id); ?>

            <?php
            $link = get_field('hero_banner_link', $post_id);
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="hero-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?>