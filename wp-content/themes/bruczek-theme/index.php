<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bruczek-theme
 */
get_header();
?>

<div id="primary" class="content-area">
    <div id="main" class="content-wrapper site-main" role="main">

        <?php
        if (have_posts()) :

            if (is_home() && !is_front_page()) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text text-center"><?php single_post_title(); ?></h1>
                </header>

                <?php
            endif;
            $blog_enties_args = array('cat' => 4);
            $blog_enties = new WP_Query($blog_enties_args);
            /* Start the Loop */
            ?>
        <div class="news-post-wrapper">
                <?php while ($blog_enties->have_posts()) : $blog_enties->the_post();
                    ?>
                    <div class="row news-post">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </div><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
