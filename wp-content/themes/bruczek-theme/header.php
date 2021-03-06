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
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">
                <div class="container-fluid">
                    <div class="header-content-wrapper">
                        <div class="row">
                            <div class="col-mobile col-xs-3 col-sm-2 col-md-2">
                                <div class="logo-wrapper">
                                    <?php bruczek_theme_the_custom_logo(); ?>
                                </div>
                            </div>
                            <div class="col-mobile col-xs-5 col-sm-4 col-md-4">
                                <div class="site-title-wrapper">
                                    <span class="site-title"><?php bloginfo('name'); ?></span>
                                </div>
                            </div>
                            <div class="col-mobile col-xs-8 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2">
                                <div class="row">
                                    <div class="col-xs-7 col-sm-9 col-md-9 col-lg-8 phone-number-wrapper">
                                        <span class="glyphicon glyphicon-earphone phone-icon" aria-hidden="true"></span>
                                        <span class="phone-number">+48 74 265 2525</span>
                                    </div>
                                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-4 social-icons">
                                        <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">			
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
