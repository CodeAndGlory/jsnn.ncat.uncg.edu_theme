<?php

include( __DIR__ . '/menu-toggle/menu-toggle.php' );

if ( has_nav_menu( 'primary' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_id' => 'primary-menu',
        'walker' => new Aria_Walker_Nav_Menu(),
        'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
    ) );
}
