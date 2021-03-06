<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uncgonline
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'uncgonline' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="header-main">
            <div class="site-branding">
                <div class="logo-wrapper">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/jsnn-logo2.svg" alt="">
                    </a>
                </div>

                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <div class="site-description"><p><?php echo $description; /* WPCS: xss ok. */ ?></p></div>
                <?php
                endif; ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="primary-navigation">
                <?php
                include( __DIR__ . '/navigation/navigation.php' );
                ?>
                </div>
                <div class="secondary-navigation">
                <?php
                include(__DIR__ . '/navigation/callout-nav.php');
                include( __DIR__ . '/search/search.php' );
                ?>
                </div>
            </nav><!-- #site-navigation -->
        </div>
        <div class="header-mobile">
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <div class="site-description"><p><?php echo $description; /* WPCS: xss ok. */ ?></p></div>
            <?php
            endif; ?>

            <?php include( __DIR__ . '/navigation/callout-nav.php' ); ?>
        </div>
    </header><!-- #masthead -->



    <div id="content" class="site-content">
