<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bruczek-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="container-fluid">
            <div class="header-content-wrapper">
                <div class="row">
                    <div class="col-phone-1 col-xs-3 col-sm-2 col-md-2">
                        <div class="logo-wrapper">
                            <?php bruczek_theme_the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-5 col-sm-4 col-md-4">
                        <div class="site-title-wrapper">
                            <span class="site-title"><?php bloginfo( 'name' );?></span>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-4 col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-3 col-lg-offset-3">
                        <div class=" phone-number-wrapper">
                            <span class="glyphicon glyphicon-earphone phone-icon" aria-hidden="true"></span>
                            <span class="phone-number">+48 74 265 2525</span>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-12 col-sm-3 col-md-3 social-icons"></div>
                </div>
            </div>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">			
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
