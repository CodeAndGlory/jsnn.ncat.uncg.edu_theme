<?php
if ( has_nav_menu( 'callout_links' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'callout_links',
        'container' => false,
        'menu_id' => 'callout-links',
        'menu_class' => 'callout-link-menu',
        'walker' => new Aria_Walker_Nav_Menu(),
        'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
    ) );
}